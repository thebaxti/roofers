@extends('layouts.app-site')
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
                <button><img src="{{ asset('assets/images/icon/color-palette.png') }}" alt="Color Palette"></button>
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
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-2.png') }}" alt=""/></a>
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
                                    <form action="{{ route('contact.send') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="required">
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
                                            <a href="tel:+998999957665">+998 995 76 65</a>
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
            <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/images/breadcrumb/breadcrumb-1.jpg') }});">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Get In Touch</h2>
                            </div>
                            <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear"
                                 data-aos-duration="1500">
                                <ul>
                                    <li><a href="index.blade.php">Home</a></li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li class="active">Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Contact Info Area-->
        <section class="contact-info-area">
            <div class="container">
                <div class="row">
                    <!--Start Single Contact Info Box-->
                    <div class="col-xl-4 col-lg-12">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <span class="flaticon-pin-1"></span>
                            </div>
                            <div class="text-holder">
                                <div class="pattern-bg"
                                     style="background-image: url({{ asset('assets/images/pattern/thm-pattern-3.png') }});"></div>
                                <div class="top">
                                    <h3>Visit a Office</h3>
                                    <span>You are most welcome to visit office.</span>
                                </div>
                                <p>Boat House, 152/21 City Road<br> Hoxton N1 6NG, UK.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Contact Info Box-->

                    <!--Start Single Contact Info Box-->
                    <div class="col-xl-4 col-lg-12">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <span class="flaticon-phone-call-3"></span>
                            </div>
                            <div class="text-holder">
                                <div class="pattern-bg"
                                     style="background-image: url({{ asset('assets/images/pattern/thm-pattern-3.png') }});"></div>
                                <div class="top">
                                    <h3>Make a Call</h3>
                                    <span>Keeping you always better connected.</span>
                                </div>
                                <p class="text1">Sales: <a href="tel:123456789"> +233 456 789 01 & 788 02</a> <br>
                                    Service: <a href="tel:123456789">+1 555-7890-123</a>

                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Contact Info Box-->

                    <!--Start Single Contact Info Box-->
                    <div class="col-xl-4 col-lg-12">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <span class="flaticon-email-1"></span>
                            </div>
                            <div class="text-holder">
                                <div class="pattern-bg"
                                     style="background-image: url({{ asset('assets/images/pattern/thm-pattern-3.png') }});"></div>
                                <div class="top">
                                    <h3>Send Email</h3>
                                    <span>Drop us a mail we will answer you asap.</span>
                                </div>
                                <p class="text1">
                                    Sales: <a href="https://yourmail@email.com">support@mailus.com</a> <br>
                                    Service: <a href="https://yourmail@email.com">sendmail@ruferssales.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Contact Info Box-->

                </div>
            </div>
        </section>
        <!--End Contact Info Area-->


        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6">
                        <div class="contact-page-map-outer">
                            <!--Map Canvas-->
                            <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631"
                                 data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                                 data-icon-path="assets/images/icon/map-marker.png"
                                 data-content="Melbourne VIC 3000, Australia<br><a href='info@gmail.com'>info@youremail.com</a>">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="contact-style1_form">
                            <div class="top-title">
                                <h2>Drop Your Message</h2>
                                <p>Please feel free to get in touch using the form below. We'd love
                                    to hear for you.</p>
                            </div>
                            <div class="contact-form">
                                <form name="form" class="default-form2"
                                      action="{{ route('contact.send') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="input-box">
                                                <input type="text" name="name" value="" placeholder="Full Name :"
                                                       required="required">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="input-box">
                                                <input type="email" name="email" value="" placeholder="Email :"
                                                       required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="input-box">
                                                <input type="text" name="phone" value="" placeholder="Phone :">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="input-box">
                                                <input type="text" name="subject" value="" placeholder="Subject :">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 text-center">
                                            <div class="input-box">
                                                <div class="select-box">
                                                    <select name="select" class="wide">
                                                        <option data-display="Service">Service</option>
                                                        <option value="1">Single Ply Roofing</option>
                                                        <option value="2">Modified Roofing</option>
                                                        <option value="3">Built-Up Roofing</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 text-center">
                                            <div class="input-box two">
                                                <textarea name="message" placeholder="Enter your message..."
                                                          required="required"></textarea>
                                            </div>
                                            <div class="button-box">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                       type="hidden" value="">
                                                <button class="btn-one" type="submit"
                                                        data-loading-text="Please wait...">
                                                    <span class="txt">Send Message</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Main Contact Form Area-->

        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>


        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="icon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="{{ route('index') }}">
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
                        <li><a href="{{ route('index') }}">Safety Tips</a></li>
                        <li><a href="{{ route('index') }}">Filteration</a></li>
                        <li><a href="{{ route('index') }}">Accessories</a></li>
                        <li><a href="{{ route('index') }}">Tools</a></li>
                        <li><a href="{{ route('index') }}">Design</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->


    </div>
@endsection

