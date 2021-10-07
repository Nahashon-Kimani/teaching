<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>ZALEGO SCHOOL</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/fav.png"') }}>
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css') }}">
        <!-- aos css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/aos.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css') }}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/off-canvas.css') }}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/fonts/linea-fonts.css') }}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/fonts/flaticon.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/rsmenu-main.css') }}">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/inc/custom-slider/css/nivo-slider.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/inc/custom-slider/css/preview.css') }}">
        <!-- rsmenu transitions css -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/rsmenu-transitions.css') }}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/rs-spacing.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}">
        {{-- Fontawesome kit --}}
        <script src="https://kit.fontawesome.com/c99e7cdcbd.js" crossorigin="anonymous'"></script>
    </head>
    <body class="defult-home">

        <!-- Preloader area start here -->
        <div id="loader" class="loader">
            <div class="spinner"></div>
        </div>
        <!--End preloader here -->

        <!--Full width header Start-->
        <div class="full-width-header">
            <!-- Toolbar Start -->
            <div class="toolbar-area hidden-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="toolbar-contact">
                                <ul>
                                    <li><i class="flaticon-email"></i><a href="mailto:info@yourwebsite.com">support@zalegoschool.com</a></li>
                                    <li><i class="flaticon-call"></i><a href="tel:+123456789">(+123) 456789</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="toolbar-sl-share">
                                <ul>
                                    <li class="opening"> <i class="flaticon-clock"></i> Mon - Fri: 8:00 am - 08.00pm / Closed on Weekends</li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Toolbar End -->
            
            <!--Header Start-->
            @include('layouts.frontend.includes.header')
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        @yield('content')
        <!-- Main content End -->

        <!-- Footer Start -->
        @include('layouts.frontend.includes.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->


        <!-- modernizr js -->
        <script src="{{ asset('frontend/assets/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('frontend/assets/js/rsmenu-main.js') }}"></script> 
        <!-- op nav js -->
        <script src="{{ asset('frontend/assets/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <!-- Slick js -->
        <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
        <!-- aos js -->
        <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('frontend/assets/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>        
         <!-- counter top js -->
        <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
        <!-- video js -->
        <script src="{{ asset('frontend/assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Nivo slider js -->
        <script src="{{ asset('frontend/assets/inc/custom-slider/js/jquery.nivo.slider.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('frontend/assets/js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    </body>
</html>