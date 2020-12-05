<!DOCTYPE html>
<html class="no-js" lang="zxx">
 <head>
        <!-- Meta tag -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name='copyright' content='codeglim'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        
        <!-- Title Tag -->
        <title>@yield('title')|L-DEV</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="images/favicon.png">    
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet"> 
        
        <!-- Animate CSS -->
        {!!Html::style('/designe/user/css/animate.min.css')!!}
        <!-- Font Awesome CSS -->
        {!!Html::style('/designe/user/css/font-awesome.min.css')!!}
        <!-- Fancy Box CSS -->
        {!!Html::style('/designe/user/css/jquery.fancybox.min.css')!!}
        <!-- Slick Nav CSS -->
        {!!Html::style('/designe/user/css/slicknav.min.css')!!}

        <!-- Animate Text -->
        {!!Html::style('/designe/user/css/animate-text.css')!!}
        <!-- Owl Carousel CSS -->

        {!!Html::style('/designe/user/css/css/owl.theme.default.css')!!}
        {!!Html::style('/designe/user/css/owl.carousel.min.css')!!}
        
        <!-- Bootstrap Css -->
        {!!Html::style('/designe/user/css/bootstrap.min.css')!!}
        <!-- Sufia StyleShet -->
         
        {!!Html::style('/designe/user/style.css')!!}
        {!!Html::style('/designe/user/css/reset.css')!!}
        {!!Html::style('/designe/user/css/responsive.css')!!}
        <!-- Maheraj Template Color -->
        {!!Html::style('/designe/user/css/color/color1.css')!!}
        <!--<link rel="stylesheet" href="css/color/color2.css">-->
        <!--<link rel="stylesheet" href="css/color/color3.css">-->
        <!--<link rel="stylesheet" href="css/color/color4.css">-->
        <!--<link rel="stylesheet" href="css/color/color5.css">-->
        <!--<link rel="stylesheet" href="css/color/color6.css">-->
        <!--<link rel="stylesheet" href="css/color/color7.css">-->
        <!--<link rel="stylesheet" href="css/color/color8.css">-->
        <!--<link rel="stylesheet" href="css/color/color9.css">-->
        <!--<link rel="stylesheet" href="css/color/color10.css">-->

        <!--[if lt IE 9]>
           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
              
        @yield('header')
    </head>
<body>       
            <!-- Preloader -->
       
        <!-- End Preloader -->
        
        <!-- Start Header -->
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('home')}}">{{getsetting()->site_name}}</a>
                        </div>
                        <!--/ End Logo -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12">
                        <div class="nav-area">
                            <!-- Main Menu -->
                            <nav class="mainmenu">
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav menu">
                                        <li class=""><a href="{{route('home')}}"><i class="fa fa-home"></i>Accueil</a></li>
                                        <li><a href="{{route('services')}}"><i class="fa fa-rocket"></i>Services</a></li>
                                        <li><a href="{{route('portfolio')}}"><i class="fa fa-briefcase"></i>projets</a></li>
                                        <li><a href="{{route('about')}}"><i class="fa fa-history"></i>A propos</a></li>
                                        <!--li><a href="#blog"><i class="fa fa-pencil"></i>Blog</a></li-->
                                        <li><a href="{{route('contact')}}"><i class="fa fa-address-book"></i>Contact</a></li>       
                                    </ul>
                                    <ul class="social-icon">
                                        <li><a href="#header"><i class="fa fa-plus"></i></a></li>
                                    </ul>
                                    <ul class="social">
                                        <li><a href="https://web.facebook.com/louadev"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--/ End Header -->
             <main class="py-4">
            @yield('content')
        </main>
      
        <!--/ End footer Top -->
    
        <!-- Start Footer -->
        <footer id="footer">
            <!-- Arrow -->
            <div class="arrow">
                <a href="#personal-area" class="btn"><i class="fa fa-angle-up"></i></a>
            </div>
            <!--/ End Arrow -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Copyright -->
                        <div class="copyright">
                            <p>&copy; Copyright 2020 {{getsetting()->site_name}}. Tout droits réservé</p>
                        </div>
                        <!--/ End Copyright -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="https://web.facebook.com/louadev"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/louanes-mokhfi-0937b7162/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <!--/ End Social -->
                    </div>
                </div>
            </div>
        </footer>

       
        {!!Html::script('/designe/user/js/jquery.min.js')!!}

        <!-- Modernizr JS -->
        {!!Html::script('/designe/user/js/modernizr.min.js')!!}
    
        <!-- WOW JS -->
        {!!Html::script('/designe/user/js/wow.min.js')!!}

        <!-- Fancybox js -->
        {!!Html::script('/designe/user/js/jquery.fancybox.min.js')!!}

        <!-- Animate Text JS -->
        {!!Html::script('/designe/user/js/animate-text.js')!!}

        <!-- Mobile Menu JS -->
        {!!Html::script('/designe/user/js/jquery.slicknav.min.js')!!}

        <!-- Jquery Parallax -->
        {!!Html::script('/designe/user/js/jquery.stellar.min.js')!!}

        <!-- Jquery Easing -->
        {!!Html::script('/designe/user/js/easing.js')!!}

        <!-- One Page Nav JS -->
        {!!Html::script('/designe/user/js/jquery.nav.js')!!}

        <!-- Slider Carousel JS -->
        {!!Html::script('/designe/user/js/owl.carousel.min.js')!!}

        <!-- Youtube Player JS -->
        {!!Html::script('/designe/user/js/ytplayer.min.js')!!}

        <!-- Particle JS -->
        {!!Html::script('/designe/user/js/particles.min.js')!!}

        <!-- Counter JS -->
        {!!Html::script('/designe/user/js/waypoints.min.js')!!}
        {!!Html::script('/designe/user/js/jquery.counterup.min.js')!!}

        <!-- Mixitup JS -->
        {!!Html::script('/designe/user/js/isotope.pkgd.min.js')!!}

        <!-- Bootstrap JS -->
        {!!Html::script('/designe/user/js/bootstrap.min.js')!!}

        <!-- Main JS -->
        {!!Html::script('/designe/user/js/main.js')!!}

        @yield('footer')
</body>
</html>
