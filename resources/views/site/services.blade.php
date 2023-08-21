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
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->


        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><img src="assets/images/icon/color-palette.png" alt="Color Palette"> </button>
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
                                    <a href="index.blade.php"><img src="assets/images/resources/logo-2.png" alt="" /></a>
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
                                <h2>Our Services</h2>
                            </div>
                            <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <ul>
                                    <li><a href="index.blade.php">Home</a></li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li class="active">Our Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Service Style1 Area-->
        <section class="service-style1-area pdb80">
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

                    <!--Start Single Service Style1-->
                    <div class="col-xl-4 col-lg-12 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="single-service-style1">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-4.jpg" alt="">
                                </div>
                                <div class="title-holder">
                                    <div class="pattern-bg"
                                        style="background-image: url(assets/images/pattern/thm-pattern-1.png);"></div>
                                    <div class="inner-text">
                                        <h6>Service 04</h6>
                                        <h3><a href="services-details.html">Metal Roofing</a></h3>
                                        <div class="text">
                                            <p>Except too obtains some of advantages us ever...</p>
                                        </div>
                                    </div>
                                    <div class="button-box">
                                        <a href="services-details.html">More Details</a>
                                    </div>
                                    <div class="icon">
                                        <span class="flaticon-roof-3"></span>
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
                                    <img src="assets/images/services/service-v1-5.jpg" alt="">
                                </div>
                                <div class="title-holder">
                                    <div class="pattern-bg"
                                        style="background-image: url(assets/images/pattern/thm-pattern-1.png);"></div>
                                    <div class="inner-text">
                                        <h6>Service 05</h6>
                                        <h3><a href="services-details.html">Vegetative Roofing</a></h3>
                                        <div class="text">
                                            <p>Except too obtains some of advantages us ever...</p>
                                        </div>
                                    </div>
                                    <div class="button-box">
                                        <a href="services-details.html">More Details</a>
                                    </div>
                                    <div class="icon">
                                        <span class="flaticon-store"></span>
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
                                    <img src="assets/images/services/service-v1-6.jpg" alt="">
                                </div>
                                <div class="title-holder">
                                    <div class="pattern-bg"
                                        style="background-image: url(assets/images/pattern/thm-pattern-1.png);"></div>
                                    <div class="inner-text">
                                        <h6>Service 06</h6>
                                        <h3><a href="services-details.html">Speciality Roofing</a></h3>
                                        <div class="text">
                                            <p>Except too obtains some of advantages us ever...</p>
                                        </div>
                                    </div>
                                    <div class="button-box">
                                        <a href="services-details.html">More Details</a>
                                    </div>
                                    <div class="icon">
                                        <span class="flaticon-roof-4"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Service Style1-->


                </div>
            </div>
        </section>
        <!--End Service Style1 Area-->

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
