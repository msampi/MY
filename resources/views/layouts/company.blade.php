<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Magyates - Taking Corporate Access into the Digital Age</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/iCheck/flat/blue.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/modal-video/css/modal-video.min.css') }}">
    
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    
      <!-- Left side column. contains the logo and sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #ffffff; margin-left: 0px !important;">
            <!-- Modal -->
            <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModal" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div id="form-content">
                    
                      <div class="modal-body">
                        <h3>Contact with {{$company->name}}</h3>
                        <p>To get in contact with {{$company->name}} please provide this information: </p>
                        <div class="form-group col-sm-12">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                        </div>
                        <div class="form-group col-sm-12">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Your email']) !!}
                        </div>
                        <div class="form-group col-sm-12">
                            {!! Form::label('message', 'Message:') !!}
                            {!! Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message']) !!}
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="send-button" type="button" class="btn btn-primary">Send</button>
                      </div>
                  </div>
                  <div id="success-message">
                    <div class="modal-body">
                      <i class="fa fa-check"></i>
                      <p>The message to {{$company->name}} has been sent successfully</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                  </div>
                  <div id="error-message">
                    <div class="modal-body">
                      <i class="fa fa-close"></i>
                      <p>An error has ocurred, please try again</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="row">
                <div class="company-header" style="background-image:url({{ asset('uploads/'.$company->photo_bg )}})">
                    <div class="company-logo">
                        <img class="img-responsive" src="{{ asset('uploads/'.$company->user->image )}}">
                    </div>
                    @if (Auth::user())
                    <a class="company-header-logout" href="{{ url('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                    @endif
                </div>
    
                <section class="content" style="padding-top:0">
                    <div class="col-sm-3">
                       <h1>{{ $company->name }}</h1>
                       <h3>{{ $company->country->name }}</h3>
                       <h4>{{ $company->sector }}</h4>
                       <h4>{{ $company->website }}</h4>
                       <br>
                       @if ($company->contact_email)
                          <h3>Have some questions?</h3>
                          <button id="contact-button" class="btn btn-primary">Get in touch with this company</button>
                       @endif
                    </div>
                    <div class="col-sm-9">
                        @yield('content')
                    </div>
                </section>
            </div>
        
    </div>

    </div>    
    <script src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ URL::asset('plugins/modal-video/js/modal-video.js') }}"></script>
    <script>
        
      var BASE_URL = '{!! url('/') !!}';

      
      $(function () {

        $('.search-table').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "oLanguage": {
                  "oPaginate": {
                  "sFirst": "First page", // This is the link to the first page
                  "sPrevious": "<", // This is the link to the previous page
                  "sNext": ">", // This is the link to the next page
                  "sLast": "Last page" // This is the link to the last page
                  },
                  "sSearch" : '<i class="fa fa-search"></i>'
          }


        });

        $('#contact-button').click(function() {
          $('#form-content').show();
          $('#success-message').hide();
          $('#error-message').hide();
          $("#contactModal").modal('toggle');
          
        });

        $('#send-button').click(function() {
            
            $(this).html('<i class="fa fa-refresh fa-spin"></i> Sending...');
            $(this).attr('disabled',true);
            $.post("{!! URL::asset( 'company/contact' ) !!}",
                    {
                      _token: "{{ csrf_token() }}",
                      name: $('#name').val(),
                      email: $('#email').val(),
                      message: $('#message').val()
                    },
                    (data, status) => {
                      $(this).html('Send');
                      $(this).removeAttr('disabled');
                      if (status == 'success'){
                        $('#form-content').hide();
                        $('#success-message').show()
                      }
                      else{
                        $('#form-content').hide();
                        $('#error-message').show()
                      }
                      
                    });

        });
              
      });
    </script>
</body>
</html>