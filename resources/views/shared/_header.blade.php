<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="header-content h-100 d-flex align-items-center justify-content-between">
                        <div class="academy-logo">
                            <a href="index.html"><img src="img/logo2.jpg" alt=""></a>
                        </div>
                        <div class="login-content">
                            <a href="{{ route('register') }}">Register </a>
                            <a href="{{ route('login') }}">login </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="academy-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="academyNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('welcome')}}">Home</a></li>
                                    @auth
                                    @if(Auth::user()->is_admin)
                                <li><a href="">Admin</a></li>
                                    @endif
                                    @endauth
                                <li><a href="">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('welcome')}}">Home</a></li>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('courses')}}">Course</a></li>
                                        
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a href="{{route('welcome')}}">Elements</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="{{route('welcome')}}">Home</a></li>
                                            <li><a href="{{route('service')}}">Services &amp; Features</a></li>
                                            
                                            <li><a href="{{route('gallery')}}">Students Gallery</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="{{route('welcome')}}">Home</a></li>
                                            <li><a href="{{route('service')}}">Services &amp; Features</a></li>
                                            
                                            <li><a href="{{route('gallery')}}">Students Gallery</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="{{route('welcome')}}">Home</a></li>
                                            <li><a href="{{route('service')}}">Services &amp; Features</a></li>
                                            
                                            <li><a href="{{route('gallery')}}">Students Gallery</a></li>
                                        </ul>
                                        <div class="single-mega cn-col-4">
                                            <img src="img/bg-img/bg-1.jpg" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('courses')}}">Course</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Calling Info -->
                    <div class="calling-info">
                        <div class="call-center">
                            <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+65) 456 332 5568 889</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>@yield('pagename')</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->
