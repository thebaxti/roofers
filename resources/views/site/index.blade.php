@extends('layouts.app')
@section('content')
<div class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">Preloader Close</div>
        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <!-- page-direction -->
    <div class="page_direction">
        <div class="demo-rtl direction_switch">
            <button class="rtl">RTL</button>
        </div>
        <div class="demo-ltr direction_switch">
            <button class="ltr">LTR</button>
        </div>
    </div>
    <!-- page-direction end -->


    <!-- switcher menu -->
    <div class="switcher">
        <div class="switch_btn">
            <button><img src="assets/images/icon/color-palette.png" alt="Color Palette"></button>
        </div>
        <div class="switch_menu">
            <!-- color changer -->
            <div class="switcher_container">
                <ul id="styleOptions" title="switch styling">
                    <li>
                        <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end switcher menu -->

    <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/resources/logo-2.png" alt=""/></a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <div class="inner-text">
                                    <p>With more than four decades of proven success in quality Rufers services,
                                        Shelder Roofing and Retro-Fit group is a family-owned &operated business
                                        serving.
                                    </p>
                                </div>
                            </div>

                            <div class="form-inner">
                                <h4>Get a free quote</h4>
                                <form action="index.html" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="btn-one">
                                            <span class="txt">Submit Now</span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="sidebar-contact-info">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                        <span class="flaticon-pin-1"></span> Chicago 12, Melborne City, USA
                                    </li>
                                    <li>
                                        <span class="flaticon-telephone"></span>
                                        <a href="tel:+8801682648101">+88 01682648101</a>
                                    </li>
                                    <li>
                                        <span class="flaticon-mail"></span>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="thm-social-link1">
                                <ul class="social-box">
                                    <li class="facebook">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="gplus">
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->


    <!-- Start Main Slider -->
    <section class="main-slider style1">
        <div class="slider-box">
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-1.jpg)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>Protect Your<br> Home With Durable<br> Roofing.</h2>
                            </div>
                            <div class="text">
                                <p>With More than four decades of proven success in roofing<br> services, Reliable
                                    Roofing & Retro-Fit.</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.blade.php">
                                    <span class="txt">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-2.jpg)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>Best Team<br> To Provide You The<br> Best Service.</h2>
                            </div>
                            <div class="text">
                                <p>With More than four decades of proven success in roofing<br> services, Reliable
                                    Roofing & Retro-Fit.</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.blade.php">
                                    <span class="txt">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-3.jpg)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>Your Roofing<br> Needs For a Great<br> Repair Job.</h2>
                            </div>
                            <div class="text">
                                <p>With More than four decades of proven success in roofing<br> services, Reliable
                                    Roofing & Retro-Fit.</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.blade.php">
                                    <span class="txt">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Main Slider -->


    <!--Start Service Style1 Area-->
    <section class="service-style1-area">
        <div class="pattern-bg" style="background-image: url(assets/images/pattern/thm-pattern-2.png);"></div>
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-left"></span> Our Services <span class="border-right"></span></h6>
                </div>
                <h2>Superior Roofing Services</h2>
            </div>
            <div class="row">
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-12 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="single-service-style1">
                        <div class="inner-box">
                            <div class="img-holder">
                                <img src="assets/images/services/service-v1-1.jpg" alt="">
                            </div>
                            <div class="title-holder">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-1.png);"></div>
                                <div class="inner-text">
                                    <h6>Service 01</h6>
                                    <h3><a href="services-details.html">Single Ply Roofing</a></h3>
                                    <div class="text">
                                        <p>Except too obtains some of advantages us ever...</p>
                                    </div>
                                </div>
                                <div class="button-box">
                                    <a href="services-details.html">More Details</a>
                                </div>
                                <div class="icon">
                                    <span class="flaticon-roof"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-service-style1">
                        <div class="inner-box">
                            <div class="img-holder">
                                <img src="assets/images/services/service-v1-2.jpg" alt="">
                            </div>
                            <div class="title-holder">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-1.png);"></div>
                                <div class="inner-text">
                                    <h6>Service 02</h6>
                                    <h3><a href="services-details.html">Modified Roofing</a></h3>
                                    <div class="text">
                                        <p>Except too obtains some of advantages us ever...</p>
                                    </div>
                                </div>
                                <div class="button-box">
                                    <a href="services-details.html">More Details</a>
                                </div>
                                <div class="icon">
                                    <span class="flaticon-roof-1"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-service-style1">
                        <div class="inner-box">
                            <div class="img-holder">
                                <img src="assets/images/services/service-v1-3.jpg" alt="">
                            </div>
                            <div class="title-holder">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-1.png);"></div>
                                <div class="inner-text">
                                    <h6>Service 03</h6>
                                    <h3><a href="services-details.html">Built-Up Roofing</a></h3>
                                    <div class="text">
                                        <p>Except too obtains some of advantages us ever...</p>
                                    </div>
                                </div>
                                <div class="button-box">
                                    <a href="services-details.html">More Details</a>
                                </div>
                                <div class="icon">
                                    <span class="flaticon-roof-2"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
            </div>

            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="service-style1__bottom-text">
                        <h3>Providing Roofing & Weather proofing Peace Of Mind, Start Here.</h3>
                        <div class="btns-box">
                            <a class="btn-one style2" href="contact.blade.php">
                                <span class="txt">All Services</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Service Style1 Area-->

    <!--Start About Style1 Area-->
    <section class="about-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-style1__image1 martop0">
                        <div class="inner">
                            <img src="assets/images/about/about-style1.jpg" alt="">
                        </div>
                        <div class="overlay-box">
                            <div class="bg-image"
                                 style="background-image: url(assets/images/about/about-style1.jpg);"></div>
                            <div class="left">
                                <h2>12</h2>
                            </div>
                            <div class="right">
                                <h2>Years<br> Of Experience</h2>
                            </div>
                        </div>
                        <div class="round-box">
                            <div class="image-bg"
                                 style="background-image: url(assets/images/about/about-style1.jpg);"></div>
                        </div>
                        <div class="arrow-box">
                            <div class="dot-top"></div>
                            <div class="top-angle-line"></div>
                            <div class="line"></div>
                            <div class="dot-bottom"></div>
                        </div>


                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style1__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6><span class="border-left"></span>About Company</h6>
                            </div>
                            <h2>Roofing Is Our<br> Heritage & Quality Is<br> Our Tradition</h2>
                        </div>
                        <div class="inner-content">
                            <ul>
                                <li><span class="flaticon-quality"></span> Certified</li>
                                <li><span class="flaticon-settings"></span> Innovative Work</li>
                                <li><span class="flaticon-home-repair"></span> Experienced</li>
                            </ul>
                            <div class="text-box">
                                <p>These cases are perfectly simple and easy too distinguish. In a freek hours when
                                    our power of choice is untrammelled and when nothing prevent our being able to
                                    do what we like bestevery pleasures is to be welcomed every certain
                                    circumstances claims of duty.</p>
                                <p>Perfectly simple and easy to distinguish a free hour whenour power choice is
                                    untrammelled and when nothing prevents our being.</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.blade.php">
                                    <span class="txt">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--End About Style1 Area-->

    <!--Start Features Style1 Area-->
    <section class="features-style1-area">
        <div class="pattern-bg" style="background-image: url(assets/images/pattern/thm-pattern-4.png);"></div>
        <div class="container features-box">
            <div class="row">
                <!--Start Single Features Style1-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="100ms"
                     data-wow-duration="1500ms">
                    <div class="single-features-style1 first-child text-center">
                        <div class="single-features-style1__bg"
                             style="background-image: url(assets/images/resources/features-1.jpg);"></div>
                        <div class="counting-box"></div>
                        <div class="inner">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="flaticon-protection"></span>
                                </div>
                                <h3>Safety<br> & Reliability</h3>
                            </div>
                            <div class="overlay-content">
                                <h3>Safety<br> & Reliability</h3>
                                <p>Simple easy to distinguish in a free hours when our power all of your choice.</p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a href="services-details.html"><span class="fa fa-angle-right"></span>Details</a>
                        </div>
                    </div>
                </div>
                <!--End Single Features Style1-->
                <!--Start Single Features Style1-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="200ms"
                     data-wow-duration="1500ms">
                    <div class="single-features-style1 text-center">
                        <div class="single-features-style1__bg"
                             style="background-image: url(assets/images/resources/features-1.jpg);"></div>
                        <div class="counting-box"></div>
                        <div class="inner">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="flaticon-quality"></span>
                                </div>
                                <h3>High Quality<br> Materials</h3>
                            </div>
                            <div class="overlay-content">
                                <h3>High Quality<br> Materials</h3>
                                <p>Simple easy to distinguish in a free hours when our power all of your choice.</p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a href="services-details.html"><span class="fa fa-angle-right"></span>Details</a>
                        </div>
                    </div>
                </div>
                <!--End Single Features Style1-->
                <!--Start Single Features Style1-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms"
                     data-wow-duration="1500ms">
                    <div class="single-features-style1 bordernone text-center">
                        <div class="single-features-style1__bg"
                             style="background-image: url(assets/images/resources/features-1.jpg);"></div>
                        <div class="counting-box"></div>
                        <div class="inner">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="flaticon-construction-and-tools"></span>
                                </div>
                                <h3>Professional<br> Team</h3>
                            </div>
                            <div class="overlay-content">
                                <h3>Professional<br> Team</h3>
                                <p>Simple easy to distinguish in a free hours when our power all of your choice.</p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a href="services-details.html"><span class="fa fa-angle-right"></span>Details</a>
                        </div>
                    </div>
                </div>
                <!--End Single Features Style1-->
                <!--Start Single Features Style1-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="400ms"
                     data-wow-duration="1500ms">
                    <div class="single-features-style1 text-center">
                        <div class="single-features-style1__bg"
                             style="background-image: url(assets/images/resources/features-1.jpg);"></div>
                        <div class="counting-box"></div>
                        <div class="inner">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="flaticon-certificate"></span>
                                </div>
                                <h3>Accredited<br> Service</h3>
                            </div>
                            <div class="overlay-content">
                                <h3>Accredited<br> Service</h3>
                                <p>Simple easy to distinguish in a free hours when our power all of your choice.</p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a href="services-details.html"><span class="fa fa-angle-right"></span>Details</a>
                        </div>
                    </div>
                </div>
                <!--End Single Features Style1-->

            </div>
        </div>

        <div class="fact-counter-box">
            <div class="container">
                <div class="sec-title center text-center">
                    <div class="sub-title">
                        <h6><span class="border-left"></span> Interesting Numbers <span class="border-right"></span>
                        </h6>
                    </div>
                    <h2>Fun Facts By The Numbers</h2>
                </div>
                <div class="row">
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="icon">
                                    <span class="flaticon-roof-3"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="2.5">0</span>
                                    <span class="k">k</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>Projects Completed</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="icon">
                                    <span class="flaticon-worker"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="84">0</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>Expert Workers</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="200ms"
                             data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="icon">
                                    <span class="flaticon-award"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="06">0</span>
                                    <span class="k">k</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>Awards Recieved</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="300ms"
                             data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="icon">
                                    <span class="flaticon-happy"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="99">0</span>
                                    <span class="k">%</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>Happy Customers</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                </div>
            </div>
        </div>

    </section>
    <!--End Features Style1 Area-->


    <!--Start Project Style1 Area-->
    <section class="project-style1-area">
        <div class="container">
            <div class="project-top-title">
                <div class="sec-title">
                    <div class="sub-title">
                        <h6><span class="border-left"></span>Work Gallery</h6>
                    </div>
                    <h2>Recently Completed Works</h2>
                </div>
                <div class="project-style1__button">
                    <a class="btn-one" href="projects.html">
                        <span class="txt">All Projects</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="auto-container">
            <div class="row text-right-rtl">
                <!--Start Single project Item-->
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v1-1.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v1-1.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
                <!--Start Single project Item-->
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v1-2.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v1-2.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
                <!--Start Single project Item-->
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="single-project-item min_height300">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v1-3.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v1-3.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->

                <!--Start Single project Item-->
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="single-project-item min_height300">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v1-4.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v1-4.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
                <!--Start Single project Item-->
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v1-5.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v1-5.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
                <!--Start Single project Item-->
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v1-6.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v1-6.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->

            </div>
        </div>
    </section>
    <!--End Project Style1 Area-->

    <!--Start Video Gallery Style1 Area-->
    <section class="video-gallery-style1-area">
        <div class="video-gallery-style1-area__bg"
             style="background-image: url(assets/images/resources/video-gallery-bg.jpg);"></div>
        <div class="pattern-bg" style="background-image: url(assets/images/pattern/thm-pattern-5.png);"></div>
        <div class="pattern-bg-2" style="background-image: url(assets/images/pattern/thm-pattern-5.png);"></div>
        <div class="pattern-bg-3" style="background-image: url(assets/images/pattern/thm-pattern-5.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-gallery-style1_content">
                        <div class="inner-box">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6><span class="border-left"></span>Video Proof</h6>
                                </div>
                                <h2>Best of the<br> Best Award in Service</h2>
                            </div>
                            <div class="inner-content">
                                <div class="text">
                                    <p>Indignation and dislike men who are so beguiled demoralized by the charms of
                                        pleasure of the moment.</p>
                                </div>
                                <ul>
                                    <li>Roof of the Year</li>
                                    <li>Fully supported metal</li>
                                    <li>Reliable & Trustworthy</li>
                                    <li>Dependable</li>
                                </ul>
                            </div>
                        </div>
                        <div class="video-gallery-style1__video-holder">
                            <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <a class="video-popup" title="Video Gallery"
                                   href="https://www.youtube.com/watch?v=p25gICT63ek">
                                    <span class="flaticon-play-button"></span>
                                </a>
                            </div>
                            <h4>Flat Roof Installation</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Video Gallery Style1 Area-->

    <!--Start Working process area -->
    <section class="working-process-area">
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-left"></span> How it’s Work <span class="border-right"></span></h6>
                </div>
                <h2>Standard Working Process</h2>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <ul class="working-process-box">
                        <!--Start Working process Single-->
                        <li class="single-working-process wow fadeInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/resources/working-process-1.jpg" alt="">
                                    <div class="counting-box">
                                        <div class="count"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Consultation</h3>
                                <p>Except to obtain some advantage from it but who has any right to find.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="services-details.html">More Details</a>
                                </div>
                            </div>
                            <div class="arrow-icon"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </div>
                        </li>
                        <!--End Working process Single-->
                        <!--Start Working process Single-->
                        <li class="single-working-process wow fadeInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/resources/working-process-2.jpg" alt="">
                                    <div class="counting-box">
                                        <div class="count"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Detailed Proposal</h3>
                                <p>Advantages from it who has any right too man who chooses to enjoy.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="services-details.html">More Details</a>
                                </div>
                            </div>
                            <div class="arrow-icon"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </div>
                        </li>
                        <!--End Working process Single-->
                        <!--Start Working process Single-->
                        <li class="single-working-process wow fadeInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/resources/working-process-3.jpg" alt="">
                                    <div class="counting-box">
                                        <div class="count"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Project Installation</h3>
                                <p>Obtains some advantage from it’s who has any right to find fault with.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="services-details.html">More Details</a>
                                </div>
                            </div>
                        </li>
                        <!--End Working process Single-->
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!--End Working process area -->

    <!--Start Team Style1 Area-->
    <section class="team-style1-area">
        <div class="pattern-bg" style="background-image: url(assets/images/pattern/thm-pattern-4.png);"></div>
        <div class="container">
            <div class="sec-title">
                <div class="sub-title">
                    <h6><span class="border-left"></span>Team Members</h6>
                </div>
                <h2>Meet Our Expert Team</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme team-carousel owl-nav-style-one">
                        <!--Start Single Team Style1-->
                        <div class="single-team-style1 wow fadeInLeft animated" data-wow-delay="300ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/team/team-v1-1.jpg" alt=""/>
                                    <div class="overlay-bg"></div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3><a href="team-single.html">Max Benjamin</a></h3>
                                <p>Founder</p>
                                <div class="social-link-box">
                                    <ul class="team-social-link">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Single Team Style1-->
                        <!--Start Single Team Style1-->
                        <div class="single-team-style1 wow fadeInLeft animated" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/team/team-v1-2.jpg" alt=""/>
                                    <div class="overlay-bg"></div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3><a href="team-single.html">Harley Reuban</a></h3>
                                <p>Manager</p>
                                <div class="social-link-box">
                                    <ul class="team-social-link">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Single Team Style1-->
                        <!--Start Single Team Style1-->
                        <div class="single-team-style1 wow fadeInRight animated" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/team/team-v1-3.jpg" alt=""/>
                                    <div class="overlay-bg"></div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3><a href="team-single.html">Luke Stanley</a></h3>
                                <p>Executive</p>
                                <div class="social-link-box">
                                    <ul class="team-social-link">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Single Team Style1-->
                        <!--Start Single Team Style1-->
                        <div class="single-team-style1 wow fadeInRight animated" data-wow-delay="300ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/team/team-v1-4.jpg" alt=""/>
                                    <div class="overlay-bg"></div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3><a href="team-single.html">Ariana Melody</a></h3>
                                <p>Executive</p>
                                <div class="social-link-box">
                                    <ul class="team-social-link">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Single Team Style1-->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Team Style1 Area-->


    <!--Start Testimonials Style1 area -->
    <section class="testimonials-style1-area">
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-left"></span> Testimonials <span class="border-right"></span></h6>
                </div>
                <h2>Words From Our Customer</h2>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonials-style1__content wow fadeInUp" data-wow-delay="200ms"
                         data-wow-duration="1500ms">
                        <div class="theme_carousel testimonials-carousel_1 owl-dot-style1 owl-theme owl-carousel"
                             data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "2" }}}'>

                            <!--Start Single Testimonials Style1-->
                            <div class="single-testimonials-style1">
                                <div class="img-holder">
                                    <div class="top-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-4.png);">
                                    </div>
                                    <div class="bottom-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-5.png);">
                                    </div>
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v1-1.jpg" alt=""/>
                                    </div>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-quote-3"></span>
                                        </div>
                                        <div class="name">
                                            <h3>Silvester Scott</h3>
                                            <span>Liverpool</span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Thank you for all of your support. All of you love & forse being you. I
                                            cried tears been a blessing in my life for all of your you love & forse.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials Style1-->
                            <!--Start Single Testimonials Style1-->
                            <div class="single-testimonials-style1">
                                <div class="img-holder">
                                    <div class="top-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-4.png);">
                                    </div>
                                    <div class="bottom-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-5.png);">
                                    </div>
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v1-2.jpg" alt=""/>
                                    </div>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-quote-3"></span>
                                        </div>
                                        <div class="name">
                                            <h3>Penelope Hazel</h3>
                                            <span>Los Angeles</span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>I have pleasure of dealing with your experts for past one plus years.
                                            rufers team has been very knowledgeable, efficient & Professional.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials Style1-->

                            <!--Start Single Testimonials Style1-->
                            <div class="single-testimonials-style1">
                                <div class="img-holder">
                                    <div class="top-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-4.png);">
                                    </div>
                                    <div class="bottom-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-5.png);">
                                    </div>
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v1-1.jpg" alt=""/>
                                    </div>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-quote-3"></span>
                                        </div>
                                        <div class="name">
                                            <h3>Silvester Scott</h3>
                                            <span>Liverpool</span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Thank you for all of your support. All of you love & forse being you. I
                                            cried tears been a blessing in my life for all of your you love & forse.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials Style1-->
                            <!--Start Single Testimonials Style1-->
                            <div class="single-testimonials-style1">
                                <div class="img-holder">
                                    <div class="top-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-4.png);">
                                    </div>
                                    <div class="bottom-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-5.png);">
                                    </div>
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v1-2.jpg" alt=""/>
                                    </div>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-quote-3"></span>
                                        </div>
                                        <div class="name">
                                            <h3>Penelope Hazel</h3>
                                            <span>Los Angeles</span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>I have pleasure of dealing with your experts for past one plus years.
                                            rufers team has been very knowledgeable, efficient & Professional.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials Style1-->

                            <!--Start Single Testimonials Style1-->
                            <div class="single-testimonials-style1">
                                <div class="img-holder">
                                    <div class="top-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-4.png);">
                                    </div>
                                    <div class="bottom-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-5.png);">
                                    </div>
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v1-1.jpg" alt=""/>
                                    </div>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-quote-3"></span>
                                        </div>
                                        <div class="name">
                                            <h3>Silvester Scott</h3>
                                            <span>Liverpool</span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Thank you for all of your support. All of you love & forse being you. I
                                            cried tears been a blessing in my life for all of your you love & forse.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials Style1-->
                            <!--Start Single Testimonials Style1-->
                            <div class="single-testimonials-style1">
                                <div class="img-holder">
                                    <div class="top-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-4.png);">
                                    </div>
                                    <div class="bottom-pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-5.png);">
                                    </div>
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v1-2.jpg" alt=""/>
                                    </div>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-quote-3"></span>
                                        </div>
                                        <div class="name">
                                            <h3>Penelope Hazel</h3>
                                            <span>Los Angeles</span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>I have pleasure of dealing with your experts for past one plus years.
                                            rufers team has been very knowledgeable, efficient & Professional.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials Style1-->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Testimonials Style1 area -->

    <!--Start Contact Info Style1 Area-->
    <section class="contact-info-style1-area">
        <div class="contact-info-area__bg"
             style="background-image: url(assets/images/parallax-background/contact-info-area__bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-info__box paroller-2">
                        <div class="sec-title center text-center wow slideInDown" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="sub-title">
                                <h6><span class="border-left"></span> Testimonials <span
                                        class="border-right"></span></h6>
                            </div>
                        </div>
                        <h2><a href="tel:123456789">+51 (0) 888 455 369</a></h2>
                        <p>Perfectly simple & easy to distinguish free hour when power of choice is nothing prevents
                            our being.</p>
                        <div class="btn-box wow slideInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <a class="btn-one" href="#">
                                <span class="txt">Get Call Back</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Info Style1 Area-->

    <!--Start Blog Style1 Area-->
    <section class="blog-style1-area">
        <div class="container">
            <div class="blog-top-title">
                <div class="sec-title">
                    <div class="sub-title">
                        <h6><span class="border-left"></span>News & Updates</h6>
                    </div>
                    <h2>Latest From Blog Post</h2>
                </div>
                <div class="blog-style1__button">
                    <a class="btn-one" href="blog.html">
                        <span class="txt">All Post</span>
                    </a>
                </div>
            </div>

            <div class="row text-right-rtl">
                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/blog/blog-v1-1.jpg" alt="">
                            </div>
                            <div class="categories-date-box">
                                <div class="categories-box">
                                    <h6><span class="flaticon-open-archive"></span>Maintenance</h6>
                                </div>
                                <div class="date-box">
                                    <h3>20<br><span>Jul</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">Protecting Your Roof From Storm Damage</a>
                            </h3>
                            <div class="text">
                                <p>Prevents our being able do what we like best every pleasure avoided...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-7.png);"></div>
                                <div class="left">
                                    <a class="btn-two" href="blog-single.html">More Details</a>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single blog Style1-->
                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/blog/blog-v1-2.jpg" alt="">
                            </div>
                            <div class="categories-date-box">
                                <div class="categories-box">
                                    <h6><span class="flaticon-open-archive"></span>Tips & Tricks</h6>
                                </div>
                                <div class="date-box">
                                    <h3>10<br><span>Jul</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">How To Weather Proof Your Roof This Winter?</a>
                            </h3>
                            <div class="text">
                                <p>Mistaken idea denouncing pleasure and praising pain was complete...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-7.png);"></div>
                                <div class="left">
                                    <a class="btn-two" href="blog-single.html">More Details</a>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single blog Style1-->
                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/blog/blog-v1-3.jpg" alt="">
                            </div>
                            <div class="categories-date-box">
                                <div class="categories-box">
                                    <h6><span class="flaticon-open-archive"></span>Roof Leaks</h6>
                                </div>
                                <div class="date-box">
                                    <h3>30<br><span>Jun</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">The 5 Most Common Causes Of Roof Leaks</a>
                            </h3>
                            <div class="text">
                                <p>No one rejects dislikes or avoids pleasure itself because it is pleasure...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-7.png);"></div>
                                <div class="left">
                                    <a class="btn-two" href="blog-single.html">More Details</a>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single blog Style1-->


            </div>
        </div>
    </section>
    <!--End Blog Style1 Area-->

    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="flaticon-up-arrow"></span>
    </button>


    <!-- search-popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><i class="icon-close"></i></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                   placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn style-four">
                        </fieldset>
                    </div>
                </form>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="index.html">Safety Tips</a></li>
                    <li><a href="index.html">Filteration</a></li>
                    <li><a href="index.html">Accessories</a></li>
                    <li><a href="index.html">Tools</a></li>
                    <li><a href="index.html">Design</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- search-popup end -->


</div>
@endsection
