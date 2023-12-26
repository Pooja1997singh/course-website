
@include('frontend.app-layout.header')
<body>

<!--Preloader-->

<!--Preloader-end -->

<!-- Scroll-top -->
<button class="scroll__top scroll-to-target" data-target="html">
    <i class="tg-flaticon-arrowhead-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header>
    <div class="tg-header__top" style="background: #353945">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="tg-header__top-info list-wrap " style="display: block;">
                        <li style="display: block; font-weight: 400;    font-family: 'gordita';"> <span>It’s a corporate training center.</span></li>
                       
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
    <div id="header-fixed-height"></div>
  <div id="sticky-header" class="tg-header__area tg-header__style-two" style="border-bottom: 1px solid #d1d0d0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo" style="width: 130px;"></a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('courses')}}">Course</a></li>
                                   <!--  <li><a href="#">Portfolio</a></li> -->
                                    <li><a href="{{route('placement')}}">Placement</a></li>
                                    <li class="active"><a href="{{route('hire')}}">Hire From Us </a></li>
                                    
                                   
                                  
                                    
                                </ul>
                            </div>

                            <div class="tgmenu__action tgmenu__action-two">
                                <ul class="list-wrap">
                                   <li style="line-height: 76px; padding-top: 21px;">
                            <h6 style=" float: left;"><span style="font-size: 22px;float: left;">  <i class="bx bx-phone"></i></span> +91 96676 63113</h6>
                        </li>
                                    <li class="header-btn login-btn">
                                        <a href="{{route('course.enroll')}}" class="btn">Get Started</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="tgmobile__menu">
                        <nav class="tgmobile__menu-box">
                            <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                            <div class="nav-logo">
                             <a href="{{route('home')}}"><img src="assets/img/logo/logo.png" alt="Logo" style="width: 130px"></a>
                            </div>
                            <div class="tgmobile__search">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="tgmobile__menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="tgmobile__menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->



<!-- main-area -->
<main class="main-area fix">
    @yield('main-content')
</main>
</main>
    <!-- main-area-end -->


@include('frontend.app-layout.footer')
@stack('script')
</body>



</html>
   