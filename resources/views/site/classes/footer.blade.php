@foreach($settings as $setting)
<!--Start footer area -->
<footer class="footer-area">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-top__content">
                        <div class="left-box">
                            <div class="footer-logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/footer/footer-logo.png') }}" alt=""></a>
                            </div>
                            <div class="title">
                                <h3>Do You Have An Emergency?</h3>
                                <p>Protecting Your Home From Damaging Leaks, Contact us.</p>
                            </div>
                        </div>
                        <div class="right-box">
                            <a class="btn-one one" href="{{ route('about') }}"><span class="txt">More
                                            Details</span></a>
                            <a class="btn-one two" href="tel:+{{ $setting->phone_2 }}"><span
                                    class="flaticon-headphone"></span><span class="txt">{{ $setting->phone_2 }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Start Footer-->
    <div class="footer">
        <div class="container">
            <div class="row text-right-rtl">

                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="single-footer-widget marbtm50">
                        <div class="title">
                            <h3>About Service</h3>
                        </div>
                        <div class="our-company-info">
                            <div class="text-box">
                                <p>Rufers Roofing & Retro-Fit is a family owned, operated business serving the
                                    greater Los Angeles area since 2000.</p>
                            </div>
                            <ul>
                                <li>
                                    <h6>We are Available</h6>
                                    <p>Mon-Sat: 09.00 am to 6.30 pm</p>
                                </li>
                            </ul>
                            <div class="btn-box">
                                <a class="btn-one" href="{{ route('about') }}">
                                    <span class="txt">More Details</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End single footer widget-->

                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget marbtm50">
                        <div class="title">
                            <h3>Useful Links</h3>
                        </div>
                        <div class="footer-widget-links">
                            <ul class="pull-left left">
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Updates</a></li>
                                <li><a href="#">Offers</a></li>
                                <li><a href="#">Estimation</a></li>
                            </ul>
                            <ul class="pull-left marleft-60">
                                <li><a href="#">FAQ’s</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Local Offices</a></li>
                                <li><a href="#">Guarantee</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->

                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget">
                        <div class="title">
                            <h3>Make Contact</h3>
                        </div>
                        <div class="footer-widget-contact-info">
                            <ul>
                                <li>
                                    <h6>General Quries</h6>
                                    <p>Phone: <a href="tel:{{ $setting->phone_2 }}">{{ $setting->phone_2 }}</a></p>
                                    <p>Email: <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                                </li>
                                <li>
                                    <h6>Office Location</h6>
                                    <p>{{ $setting->{'address_' . $locale} }}</p>
                                </li>
                            </ul>
                            <div class="footer-social-link">
                                <ul class="clearfix">
                                    <li><a href="https://facebook.com/{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://instagram.com/{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End single footer widget-->

                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget pdtop50">
                        <div class="title">
                            <h3>Popular Post</h3>
                        </div>
                        <ul class="widget-posts-box">
                            <li>
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/footer/footer-widget-post-1.jpg') }}"
                                             alt="Awesome Image">
                                        <div class="overlay-content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <p>20, Jul 2021</p>
                                        <h4><a href="#">Protecting Your Roof<br> From Storm...</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/footer/footer-widget-post-2.jpg') }}"
                                             alt="Awesome Image">
                                        <div class="overlay-content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <p>15, Jun 2021</p>
                                        <h4><a href="#">How To Weather Proof<br> Your Roof This...</a></h4>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="widget-more-post-button">
                            <a class="btn-two" href="#">More Details</a>
                        </div>


                    </div>
                </div>
                <!--End single footer widget-->

            </div>
        </div>
    </div>
    <!--End Footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-inner">
                <div class="copyright">
                    <p>Copyright &copy; 2021<a href="{{ route('index') }}"> Rufers.</a> All Rights Reserved.</p>
                </div>
                <div class="footer-menu">
                    <ul class="footer-nav">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
<!--End footer area-->

@endforeach
