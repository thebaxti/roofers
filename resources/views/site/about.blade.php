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
                                    <a href="index.blade.php"><img src="assets/images/resources/logo-2.png" alt=""/></a>
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
                                    <form action="index.blade.php" method="post">
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

        <!--Start breadcrumb area paroller-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>About Us</h2>
                            </div>
                            <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear"
                                 data-aos-duration="1500">
                                <ul>
                                    <li><a href="index.blade.php">Home</a></li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li class="active">About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start About Style2 Area-->
        <section class="about-style2-area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6">
                        <div class="about-style2__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6><span class="border-left"></span>About Company</h6>
                                </div>
                                <h2>Professional<br> Roofing Contractor</h2>
                            </div>
                            <div class="inner-content">
                                <div class="text">
                                    <p>Simple and easy too distinguish in a freek hours when our power choice is
                                        untrammelled and when nothing prevent our being.</p>
                                </div>
                                <h5>Put The Best Roof Over Your Head.</h5>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-quality"></span>
                                        </div>
                                        <div class="inner-text">
                                            <h3>Certified</h3>
                                            <p>Protecting Your Home From Damaging Leaks.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-settings"></span>
                                        </div>
                                        <div class="inner-text">
                                            <h3>Innovative Work</h3>
                                            <p>The Roofing Company By Which All Others Are Measured.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-home-repair"></span>
                                        </div>
                                        <div class="inner-text">
                                            <h3>Experienced</h3>
                                            <p>Roofing Is Our Heritage, Quality Is Our Tradition.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="authorised-person-info">
                                    <div class="signature">
                                        <img src="assets/images/resources/signature.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Benjamin Everett.</h3>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-style2__image-box">
                            <div class="big-title paroller">rufers</div>
                            <div class="img-box1 js-tilt">
                                <img src="assets/images/about/about-style2-img-1.jpg" alt="">
                            </div>
                            <div class="img-box2">
                                <div class="inner">
                                    <img src="assets/images/about/about-style2-img-2.jpg" alt="">
                                </div>
                            </div>

                            <div class="overlay-box">
                                <h2>12<span class="flaticon-plus-1"></span></h2>
                                <h3>Years of<br> Experienced</h3>
                            </div>

                            <div class="icon-box">
                                <span class="flaticon-house-with-wooden-roof"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End About Style2 Area-->

        <!--Start Statements Area-->
        <section class="statements-area">
            <div class="statements-area-bg"
                 style="background-image: url(assets/images/parallax-background/statements-area-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="video-holder-box-style2"
                             style="background-image: url(assets/images/resources/video-gallery-bg-2.jpg);">
                            <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <a class="video-popup" title="Video Gallery"
                                   href="https://www.youtube.com/watch?v=p25gICT63ek">
                                    <span class="flaticon-play-button"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="statements__content-box">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6><span class="border-left"></span> Our Statments</h6>
                                </div>
                                <h2>Simple & Impactful<br> Statements</h2>
                            </div>
                            <div class="inner-content">
                                <div class="top-text">
                                    <p>Nothing prevent our being able to do what like bestevery pleasures
                                        is to be welcomed every certain of duty.</p>
                                </div>
                                <div class="statements-main-content">
                                    <div class="statements-carousel owl-carousel owl-theme owl-nav-style-one">
                                        <!--Start Single Box-->
                                        <div class="single-box">
                                            <div class="icon-box">
                                                <span class="flaticon-target"></span>
                                            </div>
                                            <div class="text-box">
                                                <h3>Mission Statement</h3>
                                                <p>Our mission is to serve commercially and residentially with the most
                                                    qualified and professional service.</p>
                                                <ul>
                                                    <li><span class="flaticon-arrow-pointing-left"></span>Dedication and
                                                        integrity
                                                    </li>
                                                    <li><span class="flaticon-arrow-pointing-left"></span>Strive for a
                                                        position of leadership
                                                    </li>
                                                    <li><span class="flaticon-arrow-pointing-left"></span> Build lasting
                                                        relationships
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--End Single Box-->
                                        <!--Start Single Box-->
                                        <div class="single-box">
                                            <div class="icon-box">
                                                <span class="flaticon-target"></span>
                                            </div>
                                            <div class="text-box">
                                                <h3>Mission Statement</h3>
                                                <p>Our mission is to serve commercially and residentially with the most
                                                    qualified and professional service.</p>
                                                <ul>
                                                    <li><span class="flaticon-arrow-pointing-left"></span>Dedication and
                                                        integrity
                                                    </li>
                                                    <li><span class="flaticon-arrow-pointing-left"></span>Strive for a
                                                        position of leadership
                                                    </li>
                                                    <li><span class="flaticon-arrow-pointing-left"></span> Build lasting
                                                        relationships
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--End Single Box-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Statements Area-->


        <!--Start history area -->
        <section class="our-history">
            <div class="our-history-area-bg"
                 style="background-image: url(assets/images/parallax-background/our-history-area-bg.jpg);"></div>
            <div class="container">
                <div class="sec-title">
                    <div class="sub-title">
                        <h6><span class="border-left"></span> Our History</h6>
                    </div>
                    <h2>Explore Company History</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="history-content-box">
                            <div class="history-tabs-carousel owl-carousel owl-theme owl-nav-style-one">
                                <!--Start Single History Box-->
                                <div class="single-history-box">
                                    <div class="date-box">2009</div>
                                    <div class="text-holder">
                                        <div class="inner">
                                            <h3><span class="fa fa-angle-double-right"></span>Journey Started</h3>
                                            <p>Expound the actual teachings of the great explorer of the truth the
                                                master builder human happiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single History Box-->
                                <!--Start Single History Box-->
                                <div class="single-history-box">
                                    <div class="date-box">2010</div>
                                    <div class="text-holder">
                                        <div class="inner">
                                            <h3><span class="fa fa-angle-double-right"></span>Reach New Milestone</h3>
                                            <p>They cannot foresee the pain trouble that are bounds too ensue and equaly
                                                blame belongs their duty.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single History Box-->
                                <!--Start Single History Box-->
                                <div class="single-history-box">
                                    <div class="date-box">2013</div>
                                    <div class="text-holder">
                                        <div class="inner">
                                            <h3><span class="fa fa-angle-double-right"></span>10 New Branches</h3>
                                            <p>Owing to the claims of the obligations business it will frequently occurs
                                                that to be repudiated.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single History Box-->
                                <!--Start Single History Box-->
                                <div class="single-history-box">
                                    <div class="date-box">2015</div>
                                    <div class="text-holder">
                                        <div class="inner">
                                            <h3><span class="fa fa-angle-double-right"></span>Best Employee Award</h3>
                                            <p>Expound the actual teachings of the great explorer of the truth the
                                                master builder human happiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single History Box-->
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End history area-->


        <!--Start Choose Style2 Area-->
        <section class="choose-style2-area about-page pd120-0-90">
            <div class="container">
                <div class="sec-title center text-center">
                    <div class="sub-title">
                        <h6><span class="border-left"></span> Why Choose Us <span class="border-right"></span></h6>
                    </div>
                    <h2>Reason For Choosing Us</h2>
                </div>
                <div class="row">
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-protection"></span></div>
                                <div class="counting-box">01</div>
                                <div class="text">
                                    <h3>Safety & Reliability</h3>
                                    <p>Except to obtain some advantage it but who has any right to find.</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="services-details.html">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-quality"></span></div>
                                <div class="counting-box">02</div>
                                <div class="text">
                                    <h3>Quality Materials</h3>
                                    <p>Except to obtain some advantage it but who has any right to find.</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="services-details.html">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-construction-and-tools"></span></div>
                                <div class="counting-box">03</div>
                                <div class="text">
                                    <h3>Professional Team</h3>
                                    <p>Foresee the pain trouble that bounds ensue and equaly blame.</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="services-details.html">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->

                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-fast-delivery"></span></div>
                                <div class="counting-box">04</div>
                                <div class="text">
                                    <h3>Quick Response</h3>
                                    <p>Foresee the pain trouble that bounds ensue and equaly blame.</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="services-details.html">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-insurance"></span></div>
                                <div class="counting-box">05</div>
                                <div class="text">
                                    <h3>Fully Insured</h3>
                                    <p>Except to obtain some advantage it but who has any right to find.</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="services-details.html">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-diploma"></span></div>
                                <div class="counting-box">06</div>
                                <div class="text">
                                    <h3>Guarantee Service</h3>
                                    <p>Except to obtain some advantage it but who has any right to find.</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="services-details.html">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->

                </div>
            </div>
        </section>
        <!--End Choose Style2 Area-->

        <!--Start Team Style1 Area-->
        <section class="team-style1-area team-style1-area--style2 about-page">
            <div class="pattern-bg" style="background-image: url(assets/images/pattern/thm-pattern-4.png);"></div>
            <div class="container">
                <div class="team-style1__top-title-box">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h6><span class="border-left"></span>Team Members</h6>
                        </div>
                        <h2>Meet Our Expert Team</h2>
                    </div>
                    <div class="team-style1__button-box">
                        <a class="btn-one" href="team.html">
                            <span class="txt">All Experts</span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <!--Start Single Team Style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div>
                    <!--End Single Team Style1-->
                    <!--Start Single Team Style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div>
                    <!--End Single Team Style1-->
                    <!--Start Single Team Style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div>
                    <!--End Single Team Style1-->
                    <!--Start Single Team Style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div>
                    <!--End Single Team Style1-->

                </div>
            </div>
        </section>
        <!--End Team Style1 Area-->


        <!--Start Certificates Area-->
        <section class="certificates-area">
            <div class="container">
                <div class="sec-title center text-center">
                    <div class="sub-title">
                        <h6><span class="border-left"></span> Our Recognition <span class="border-right"></span></h6>
                    </div>
                    <h2>Awards & Certifications</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="theme_carousel certificates-carousel_1 owl-dot-style1 owl-theme owl-carousel"
                             data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": false, "dots": false, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "4" }}}'>

                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">Installation<br> Excellence Award</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">Consumer<br> Protection Award</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">Training<br> Excellence Award</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">National Roofing<br> Contractors</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->

                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">Installation<br> Excellence Award</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">Consumer<br> Protection Award</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">Training<br> Excellence Award</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">National Roofing<br> Contractors</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->

                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">Installation<br> Excellence Award</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">Consumer<br> Protection Award</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">Training<br> Excellence Award</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                            <!--Start Single Certificates Box-->
                            <div class="single-certificates-box text-center">
                                <div class="pattern-bg"
                                     style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                                <div class="img-box">
                                    <div class="inner">
                                        <img src="assets/images/resources/certificates-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="#">National Roofing<br> Contractors</a></h3>
                                </div>
                            </div>
                            <!--End Single Certificates Box-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Certificates Area-->

        <!--Start Partner Area-->
        <section class="partner-area partner-area--style2">
            <div class="auto-container">
                <ul class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1">
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-v2-1.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-v2-2.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-v2-3.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-v2-4.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-v2-5.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                </ul>
            </div>
        </section>
        <!--End Partner Area-->

        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>


        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="icon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.blade.php">
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
                        <li><a href="index.blade.php">Safety Tips</a></li>
                        <li><a href="index.blade.php">Filteration</a></li>
                        <li><a href="index.blade.php">Accessories</a></li>
                        <li><a href="index.blade.php">Tools</a></li>
                        <li><a href="index.blade.php">Design</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->


    </div>
@endsection
