<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Magyates - Taking Corporate Access into the Digital Age">
    <link rel="shortcut icon" href="">
    <title> Magyates - Taking Corporate Access into the Digital Age</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate-custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main2.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
   <div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" style="min-height: 75px">

      <div class="container">

          <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon icon-menu" style="font-size:30px; color:#3498db;"></span>
            </button>

            <a class="navbar-brand" href="#home">
		<img src="{{ URL::asset('img/Logo.png') }}"  class="img-responsive" style="background:none;height: 50px; width: auto;">
	    </a>
          </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('/#home') }}" class="smoothScroll">Home</a></li>
            <li><a href="{{ url('/#why') }}" class="smoothScroll">Why MY</a></li>
            <li><a href="{{ url('/#whatwedo') }}" class="smoothScroll"> What we do</a></li>
            <li><a href="{{ url('/#about') }}" class="smoothScroll"> About</a></li>
            <li><a href="{{ url('/blog') }}"> MY Blog</a></li>
            <li><a href="{{ url('/#contact') }}" class="smoothScroll"> Contact</a></li>
          </ul>
          
	  
           <a href="{{ url('login')}}" class="btn btn-primary pull-right" style="margin-top:25px">Corporate Login</a>
          
        </div><!--/.nav-collapse -->

      </div>
     </div>
    </div>
      @yield('content') 
    <div id="footerwrap">
        <div class="container">
        <h4>
            <small> </small>
        </h4>
        </div>
    </div>
        
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/retina.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ URL::asset('js/smoothscroll.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-func.js') }}"></script>

    <script src="{{ URL::asset('js/modernizr.js') }}"></script>



    <script type="text/javascript">
		//FUNCION SUBIR
            
            
           
        	$(window).scroll(function() {
            		if ( $(this).scrollTop() > 755) { 
                		$('#imgLogo').removeClass('hide');
            		} 
            		else{
                		$('#imgLogo').addClass('hide');
            		}
        	});
	</script>
  </body>
</html>