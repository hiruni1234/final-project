
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>National Institute Of Business Management</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/custom-icon.css') }}">
    <link rel="stylesheet" href="{{ url('css/classy-nav.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>

<body>
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>

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
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('welcome')}}">Home</a></li>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('courses')}}">Course</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="{{route('welcome')}}">Home</a></li>
                                            <li><a href="#">Services &amp; Features</a></li>
                                           
                                            
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
                                            <img src="img/core-img/pic9.jpg" alt="">
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

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(img/pic13.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">All the Degree programms you need</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online University</h2>
                            <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(img/pic1.jpeg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>NIE University</h2>
                            <a href="{{route('about')}}" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Top Feature Area Start ##### -->
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-agenda-1"></i>
                                <h5>Online Courses</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-assistance"></i>
                                <h5>Amazing Teachers</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-telephone-3"></i>
                                <h5>Great Support</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Feature Area End ##### -->

<!-- ##### Course Area Start ##### -->
<div class="academy-courses-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <div class="course-icon">
                        <i class="icon-id-card"></i>
                    </div>
                    <div class="course-content">
                        <h4>School Of Business</h4>
                        <p>All the Business knowledge you need</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                    <div class="course-icon">
                        <i class="icon-worldwide"></i>
                    </div>
                    <div class="course-content">
                        <h4>School of Computing</h4>
                        <p>faculty with all the IT knowledge </p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <div class="course-icon">
                        <i class="icon-map"></i>
                    </div>
                    <div class="course-content">
                        <h4>Engineering</h4>
                        <p>Become a qualified engineer with us.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                    <div class="course-icon">
                        <i class="icon-like"></i>
                    </div>
                    <div class="course-content">
                        <h4>Social Media</h4>
                        <p>Be a social media graduate with us.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="course-icon">
                        <i class="icon-responsive"></i>
                    </div>
                    <div class="course-content">
                        <h4>Medicine</h4>
                        <p>Make your dream of becoming a doctor true.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                    <div class="course-icon">
                        <i class="icon-message"></i>
                    </div>
                    <div class="course-content">
                        <h4>Interior Design</h4>
                        <p>make your designing dream come true.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Course Area End ##### -->

<!-- ##### Testimonials Area Start ##### -->
<div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                    <span>our testimonials</span>
                    <h3>See what our students are saying about us</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Testimonials Area -->
            <div class="col-12 col-md-6">
                <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                    <div class="testimonial-thumb">
                        <img src="img/bg-img/t1.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h5>Great teachers</h5>
                        <p>We have great teachers . They are very kind and friendly .They help us anytime we want them .They teach us in a way that we never get bored in a lecture.Im very lucky to be a student of NIE.</p>
                        <h6><span>Anne de silva,</span> Student</h6>
                    </div>
                </div>
            </div>
            <!-- Single Testimonials Area -->
            <div class="col-12 col-md-6">
                <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                    <div class="testimonial-thumb">
                        <img src="img/bg-img/t2.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h5>Easy and user friendly courses</h5>
                        <p>The courses of our university are design in a way that we can easily understand and learn. As a software enginnering student I never got bored or tired during my whole degree period. </p>
                        <h6><span>Shanuka perera,</span> graduate</h6>
                    </div>
                </div>
            </div>
            <!-- Single Testimonials Area -->
            <div class="col-12 col-md-6">
                <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms">
                    <div class="testimonial-thumb">
                        <img src="img/bg-img/t3.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h5>I just love the Environment here</h5>
                        <p>We have very free and friendly Environment at NIE.We have so much social event and activities that help us to develop our personality.There are lots of clubs and communities that you can join with.staff is very friendy too.</p>
                        <h6><span>Ross smith</span> Student</h6>
                    </div>
                </div>
            </div>
            <!-- Single Testimonials Area -->
            <div class="col-12 col-md-6">
                <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms">
                    <div class="testimonial-thumb">
                        <img src="img/bg-img/t4.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h5>One good academy</h5>
                        <p>I can recommend NIE as a all in one package .It has everything a student want.Free and user friendly environment ,clubs , communities ,events,user friendly courses ,good teachers ,good staff,all the facilities.I'm very prod to be a student of NIE.</p>
                        <h6><span>Emma john</span> Student</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                    <a href="{{route('about')}}" class="btn academy-btn">See More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Testimonials Area End ##### -->

<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span>The Best</span>
                    <h3>Top Popular Courses</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                    <div class="popular-course-content">
                        <h5>BSC(Hons) Software Engineering </h5>
                        <span>By Simon Smith   |  March 18, 2018</span>
                        <div class="course-ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>Be a high qualified software engineer with our software engineering degree with Plymouth university.</p>
                        <a href="{{route('software')}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/pic10.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="popular-course-content">
                        <h5>BA(Hons) Business Management</h5>
                        <span>By Simon Smith   |  March 18, 2018</span>
                        <div class="course-ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>Be a high quality Management graduate with our BA(hons) Degree programm.</p>
                        <a href="{{route('business')}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pic43.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        <h5>Medicine</h5>
                        <span>By Simon Smith   |  March 18, 2018</span>
                        <div class="course-ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>Come and join with us to make your dream of becoming a doctor .We provide high quality Education for you .</p>
                        <a href="{{route('medicine')}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pic46.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="popular-course-content">
                        <h5>Interior Designing </h5>
                        <span>By Simon Smith   |  March 18, 2018</span>
                        <div class="course-ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>Come and enroll soon for our Interior design degree with Harvard university. </p>
                        <a href="{{route('interior')}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pic45.jpg);"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Popular Courses Area End ##### -->

<!-- ##### Partner Area Start ##### -->
<div class="partner-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                    <a href="#"><img src="img/clients-img/partner-1.png" alt=""></a>
                    <a href="#"><img src="img/clients-img/partner-2.png" alt=""></a>
                    <a href="#"><img src="img/clients-img/partner-3.png" alt=""></a>
                    <a href="#"><img src="img/clients-img/partner-4.png" alt=""></a>
                    <a href="#"><img src="img/clients-img/partner-5.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Partner Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<div class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                    <h3>Do you want to enrole at our Academy? Get in touch!</h3>
                    <a href="#" class="btn academy-btn">See More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### CTA Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="main-footer-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget.</p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Usefull Links</h6>
                        </div>
                        <nav>
                            <ul class="useful-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Services &amp; Features</a></li>
                                <li><a href="#">Accordions and tabs</a></li>
                                <li><a href="#">Menu ideas</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Gallery</h6>
                        </div>
                        <div class="gallery-list d-flex justify-content-between flex-wrap">
                            <a href="img/bg-img/gallery1.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/bg-img/gallery1.jpg" alt=""></a>
                            <a href="img/bg-img/gallery2.jpg" class="gallery-img" title="Gallery Image 2"><img src="img/bg-img/gallery2.jpg" alt=""></a>
                            <a href="img/bg-img/gallery3.jpg" class="gallery-img" title="Gallery Image 3"><img src="img/bg-img/gallery3.jpg" alt=""></a>
                            <a href="img/bg-img/gallery4.jpg" class="gallery-img" title="Gallery Image 4"><img src="img/bg-img/gallery4.jpg" alt=""></a>
                            <a href="img/bg-img/gallery5.jpg" class="gallery-img" title="Gallery Image 5"><img src="img/bg-img/gallery5.jpg" alt=""></a>
                            <a href="img/bg-img/gallery6.jpg" class="gallery-img" title="Gallery Image 6"><img src="img/bg-img/gallery6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Contact</h6>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-placeholder"></i>
                            <p>4127/ 5B-C Mislane Road, Gibraltar, UK</p>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-telephone-1"></i>
                            <p>Main: 203-808-8613 <br>Office: 203-808-8648</p>
                        </div>
                        <div class="single-contact d-flex">
                            <i class="icon-contract"></i>
                            <p>office@yourbusiness.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{url ('js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ url ('js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{url ('js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{url ('js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{url ('js/active.js')}}"></script>
</body>

</html>
