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

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="{{ URL::asset('plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/iCheck/flat/blue.css') }}">

    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/datepicker/datepicker3.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables/dataTables.bootstrap.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>MY</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img class="admin-logo" src="{{ URL::asset('img/Logo500.png') }}"> <b>Magyates</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navigation</span>
          </a>
          <div class="navbar-custom-menu" style="float:right;">
            <ul class="nav navbar-nav">


              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ URL::asset('uploads/'.Auth::user()->image) }}" class="user-image" alt="User Image">
                   @if (Auth::user())
                  <span class="hidden-xs">{{ Auth::user()->name }} {{ Auth::user()->last_name }}  </span>
                  @endif
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ URL::asset('uploads/'.Auth::user()->image) }}" class="img-circle" alt="User Image">
                    <p>
                    @if (Auth::user())
                      {{ Auth::user()->name }} {{ Auth::user()->last_name }}

                    </p>
                    @endif
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">

                      <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Logout</a>

                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!--<li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>-->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ URL::asset('uploads/'.Auth::user()->image) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              Welcome:
               @if (Auth::user())<p>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>@endif
            </div>
          </div>


          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            @if (Auth::user()->isAdmin())
            <li>
              <a href="{!! URL::asset( '/admin' ) !!}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="{!! URL::asset( 'admin/companies' ) !!}">
                <i class="fa fa-building-o"></i> <span>Companies</span>
                <small class="label pull-right bg-red">{{ $companyCount }}</small>
              </a>
            </li>
            <li>
              <a href="{!! URL::asset( 'admin/investors' ) !!}">
                <i class="fa fa-user-plus"></i> <span>Investors</span>
                <small class="label pull-right bg-green">{{ $investorCount }}</small>
              </a>
            </li>

            <li>
              <a href="{!! URL::asset( 'admin/videos' ) !!}">
                <i class="fa fa-file-video-o"></i> <span>Videos</span>
                <small class="label pull-right bg-blue">{{ $videoCount }}</small>
              </a>
            </li>
            <li>
              <a target="_BLANK" href="https://www.magyates.tv/admin">
                <i class="fa fa-wifi"></i> <span>Live stream</span>

              </a>
            </li>
            <li>
              <a href="{!! URL::asset( 'admin/settings' ) !!}">
                <i class="fa fa-cog"></i> <span>Settings</span>

              </a>
            </li>
            @endif

            @if (Auth::user()->isInvestor())
                @foreach ($continents as $continent)
                        <li class="treeview">
                          <a href="#">
                            <i class="fa fa fa-globe"></i> <span>{{ $continent->name}}</span> <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu" style="display: block;">
                              @foreach ($continent->interestCountries() as $country)
                                <li class=""><a href="{{ url('investor/company/'.$country->id) }}"><i class="fa fa-map-marker"></i> {{ $country->name }}</a></li>
                              @endforeach
                          </ul>
                        </li>

                @endforeach
            <li>
                @if (isset(Auth::user()->investor->company))
                    <a target="_BLANK" href="https://www.magyates.tv/meeting/{{ $settings->meeting_room }}?userName={{Auth::user()->name}}&lastName={{Auth::user()->last_name}}&company={{Auth::user()->investor->company}}">
                @else
                    <a target="_BLANK" href="https://www.magyates.tv/meeting/{{ $settings->meeting_room }}">
                @endif

                <i class="fa fa-wifi"></i> <span>Live stream</span>




              </a>
            </li>
            @endif

            </ul>
        </section>
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @yield('content')
            </div>
        </section>
    </div>

    </div>






    <!-- JavaScripts -->


    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!--<script src="{{ URL::asset('plugins/morris/morris.min.js') }}"></script>-->
    <!-- Sparkline -->
    <script src="{{ URL::asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ URL::asset('plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment-with-locales.min.js"></script>
    <script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ URL::asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('plugins/datepicker/locales/bootstrap-datepicker.es.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::asset('plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('js/app.min.js') }}"></script>

    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap.js') }}"></script>

    <script src="{{ URL::asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ URL::asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ URL::asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ URL::asset('plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/uploadPreview/jquery.uploadPreview.min.js') }}"></script>


    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->



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

        $(".colorpicker").colorpicker();
        $(".datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $(".hourmask").inputmask("hh:mm", {"placeholder": "hh:mm"});



      });
    </script>
</body>
</html>
