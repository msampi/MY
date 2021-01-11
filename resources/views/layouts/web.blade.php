<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Magellan Yates - Taking investor access into the digital age</title>

    <meta name="keywords" content="investment, wall street" />
    <meta name="description" content="Taking investor access into the digital age">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme-elements.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ URL::asset('vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/rs-plugin/css/navigation.css') }}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css?v=4') }}">

    <!-- Head Libs -->
    <script src="{{ URL::asset('vendor/modernizr/modernizr.min.js') }}"></script>
</head>
<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">
<div class="body">
    <header id="header" class="" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 100}">
        <div class="header-body border-top-0 box-shadow-none">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="Magellan Yates" src="{{ URL::asset('img/logo.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="dropdown access-menu-link">
                                <a class="main-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-sign-in-alt access-menu-icon"></i> Login
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ url('are-you-a-institutional-investor')}}">Investor login</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url('login') }}">Corporate login</a>
                                </div>
                            </div>
                            <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li>
                                                @if (url()->current() === 'https://www.magyates.com')
                                                <a data-hash class="dropdown-item active" href="{{ url('#home') }}">Home</a>
                                                @else
                                                <a data-hash class="dropdown-item active" href="{{ url('/#home') }}">Home</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if (url()->current() === 'https://www.magyates.com')
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('#about') }}">About</a>
                                                @else
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('/#about') }}">About</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if (url()->current() === 'https://www.magyates.com')
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('#services') }}">Services</a>
                                                @else
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('/#services') }}">Services</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if (url()->current() === 'https://www.magyates.com')
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('#tech') }}">Tech</a>
                                                @else
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('/#tech') }}">Tech</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if (url()->current() === 'https://www.magyates.com')
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('#projects') }}">Projects</a>
                                                @else
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('/#projects') }}">Projects</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if (url()->current() === 'https://www.magyates.com')
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('#clients') }}">Clients</a>
                                                @else
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('/#clients') }}">Projects</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if (url()->current() === 'https://www.magyates.com')
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('#pricing') }}">Pricing</a>
                                                @else
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('/#pricing') }}">Pricing</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if (url()->current() === 'https://www.magyates.com')
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('#team') }}">Staff</a>
                                                @else
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('/#team') }}">Staff</a>
                                                @endif
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="https://www.magyates.com/blog" target="_BLANK">MY Blog</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="https://www.magyates.com/blog/videos" target="_BLANK">MY Videos</a>
                                            </li>
                                            <li>
                                                @if (url()->current() === 'https://www.magyates.com')
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('#contact') }}">Contact</a>
                                                @else
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ url('/#contact') }}">Contact</a>
                                                @endif
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    @yield('content')
    <footer id="footer" class="mt-0">
        <div class="footer-copyright">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col d-flex align-items-center justify-content-center">
                        <p><strong>MAGELLAN YATES</strong> - © Copyright 2020. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<!-- Vendor -->
<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
<script src="{{ URL::asset('vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('vendor/common/common.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ URL::asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ URL::asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('vendor/vide/jquery.vide.min.js') }}"></script>
<script src="{{ URL::asset('vendor/vivus/vivus.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ URL::asset('js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ URL::asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ URL::asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ URL::asset('js/views/view.contact.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ URL::asset('js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ URL::asset('js/theme.init.js') }}"></script>

<script>
	$("#video-modal").on('hidden.bs.modal', function (e) {
		var div = document.getElementById("video-modal");
		var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
		iframe.postMessage('{"method":"pause"}', '*');
	});

	function showServiceImage(number) {
		switch (number) {
			case 1: $('#services').css('background', 'url("./img/services/services-1.png")'); break;
			case 2: $('#services').css('background', 'url("./img/services/services-2.png")'); break;
			case 3: $('#services').css('background', 'url("./img/services/services-3.png")'); break;
			default: $('#services').css('background', 'url("./img/services/services-4.png")'); break;
		}
		$('#services').css('transition', 'background 1s ease');
		$('#services').css('background-size', 'contain');
		$('#services').css('background-repeat', 'no-repeat');
		$('#services').css('background-position', 'center');
		$('#services').css('background-color', '#222222');
		$('.services-back-button').show();
		$('#services-content').hide();
	}

	function showServices() {
		$('#services').css('background', 'linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("./img/slides/china.jpeg")');
		$('#services').css('background-size', 'cover');
		$('#services-content').show();
		$('.services-back-button').hide();
	}

</script>
</body>
</html>
