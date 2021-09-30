<!-- This is the main file to be extended -->
@extends('layouts.frontend.master')

<!-- Section where the code will be slotted: in the section content -->
@section('content')


<!-- Main content Start -->
        <div class="main-content">
            <!-- Slider Start -->
            <div id="rs-slider" class="rs-slider slider1">
                <div class="bend niceties">
                    <div id="nivoSlider" class="slides">
                        <img src="assets/images/slider/h1-sl1.jpg" alt="" title="#slide-1" />
                        <img src="assets/images/slider/h1-sl2.jpg" alt="" title="#slide-2" />
                    </div>
                    <!-- Slide 1 -->
                    <div id="slide-1" class="slider-direction">
                        <div class="container">
                            <div class="content-part">
                                <div class="slider-des">
                                    <h1 class="sl-title white-color">Need Better Plan To Start Business </h1>
                                    <div class="sl-desc">
                                        Lorem Ipsum is simply dummy text of the printing and type setting has been the industry's standard dummy text.
                                    </div>
                                </div>
                                <div class="slider-bottom">
                                    <ul>
                                        <li><a href="#" class="readon banner-style">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div id="slide-2" class="slider-direction">
                        <div class="container">
                            <div class="content-part">
                                <div class="slider-des">
                                    <h1 class="sl-title white-color">Need Better Plan To Start Business </h1>
                                    <div class="sl-desc">
                                        Lorem Ipsum is simply dummy text of the printing and type setting has been the industry's standard dummy text.
                                    </div>
                                </div>
                                <div class="slider-bottom">
                                    <ul>
                                        <li><a href="#" class="readon banner-style">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider End -->

            <!-- Services Mini Section Start -->
            <div class="rs-services style1 pt-100 pb-84 md-pt-80 md-pb-64">
                <div class="container">
                    <div class="row gutter-16">
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/1.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Solution Focused</a></h5>
                                    <div class="desc"> We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/2.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Customer Oriented</a></h5>
                                    <div class="desc"> We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/3.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">99.99% Success</a></h5>
                                    <div class="desc"> We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/4.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Decision Maker</a></h5>
                                    <div class="desc"> We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Mini Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 bg1 md-pt-80">
                <div class="container">
                    <div class="row y-bottom">
                        <div class="col-lg-6 padding-0">
                            <img src="assets/images/about/about1.png" alt="">
                        </div>
                        <div class="col-lg-6 pl-66 pt-75 pb-75 md-pt-42 md-pb-72">
                            <div class="sec-title mb-47 md-mb-42">
                                <div class="sub-title primary">About Us</div>
                                <h2 class="title mb-0">Welcome to World Best Business Company</h2>
                            </div>
                            <div class="services-part mb-30">
                                <div class="services-icon">
                                    <img src="assets/images/about/icons/1.png" alt="image">
                                </div>
                                <div class="services-text">
                                    <h4 class="title">The ability to identify market-entry</h4>
                                    <div class="desc">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet  eius modi tempora data.</div>
                                </div>
                            </div>
                            <div class="services-part">
                                <div class="services-icon">
                                    <img src="assets/images/about/icons/2.png" alt="image">
                                </div>
                                <div class="services-text">
                                    <h4 class="title">Ensure to increase of expected sales</h4>
                                    <div class="desc">Find remarkable ideas is that this text has been the industry's standard ever in business.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Services Section Start -->
            <div id="rs-services" class="rs-services style1 modify pt-92 pb-84 md-pt-72 md-pb-64">
                <div class="container">
                    <div class="sec-title text-center mb-47 md-mb-42">
                        <div class="sub-title primary">Services</div>
                        <h2 class="title mb-0">Our Best Services</h2>
                    </div>
                    <div class="row gutter-16">
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/1.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Business Analysis</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/2.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Reports Analysis</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/3.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Profit Planning</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/4.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Project Reporting</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/5.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Estate Planning</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/6.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Security Enhanced</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/7.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Cloud Computing</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part size-mod">
                                    <img src="assets/images/services/icons/modify/8.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="#">Cryptocurrency</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- Portfolio Section Start -->
            <div id="rs-portfolio" class="rs-portfolio style1">
                <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="4" data-margin="22" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="4" data-md-device-nav="false" data-md-device-dots="true">
                    <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/1.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="#">Marketing</a>
                            <h4 class="title"><a href="#">Stock Investments</a></h4>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/2.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="#">Business</a>
                            <h4 class="title"><a href="#">Big Data Services</a></h4>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/3.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="#">Consulting</a>
                            <h4 class="title"><a href="#">HR Recruiting</a></h4>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/4.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="#">Strategy</a>
                            <h4 class="title"><a href="#">Security Services</a></h4>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/5.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="#">Finance</a>
                            <h4 class="title"><a href="#">Sales Enablement</a></h4>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/6.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="#">Business</a>
                            <h4 class="title"><a href="#">Advertising Technology</a></h4>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/7.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="#">Consulting</a>
                            <h4 class="title"><a href="#">Support Technology</a></h4>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/8.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="#">Marketing</a>
                            <h4 class="title"><a href="#">Stock Market Analysis</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Section End -->

            <!-- Skillbar Section Start -->
            <div class="rs-skillbar style1 pt-92 pb-100 md-pt-72 md-pb-80 sm-pt-80">
                <div class="container">
                    <div class="gray-bg">
                        <div class="row">
                            <div class="col-lg-6 content-part">
                                <div class="sec-title mb-35 md-mb-30">
                                    <div class="sub-title primary">LET'S START</div>
                                    <h2 class="title mb-0">Start Your Business with brainstorming</h2>
                                </div>
                                <div class="cl-skill-bar">
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Business</span>
                                    <div class="skillbar" data-percent="80">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span> 
                                    </div>
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Consulting</span>
                                    <div class="skillbar" data-percent="70">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span> 
                                    </div>
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Strategy</span>
                                    <div class="skillbar" data-percent="88">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span> 
                                    </div>
                                    <div class="btn-part mt-60">
                                        <a class="readon" href="#">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-0 md-order-first md-pl-pr-15"><div class="bg-part md-pt-200 md-pb-200"></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skillbar Section End -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial style1 gray-bg pt-92 md-pt-72">
                <div class="container">
                    <div class="sec-title text-center mb-54 md-mb-39">
                        <div class="sub-title primary">Testimonials</div>
                        <h2 class="title mb-0">Customers Reviews</h2>
                    </div>
                    <div class="white-bg">
                        <div class="row">
                            <div class="col-lg-6 pr-0 md-pl-pr-15"><div class="bg-part md-pt-200 md-pb-200"></div></div>
                            <div class="col-lg-6 slider-part">
                                <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-lg-device="1" data-md-device-nav="false" data-md-device-dots="true">
                                    <div class="testi-item">
                                        <div class="content-part text-center">
                                            <div class="icon-part">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                        </div>
                                        <div class="posted-by text-center">
                                            <div class="avatar">
                                                <img src="assets/images/testimonial/avatar/1.jpg" alt="">
                                            </div>
                                            <h5 class="name">Lisa Fedro</h5>
                                            <span class="designation">CEO, Keen IT Solution</span>
                                        </div>
                                    </div>
                                    <div class="testi-item">
                                        <div class="content-part text-center">
                                            <div class="icon-part">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                        </div>
                                        <div class="posted-by text-center">
                                            <div class="avatar">
                                                <img src="assets/images/testimonial/avatar/2.jpg" alt="">
                                            </div>
                                            <h5 class="name">Mike Hotten</h5>
                                            <span class="designation">CEO, Brick Consulting</span>
                                        </div>
                                    </div>
                                    <div class="testi-item">
                                        <div class="content-part text-center">
                                            <div class="icon-part">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                        </div>
                                        <div class="posted-by text-center">
                                            <div class="avatar">
                                                <img src="assets/images/testimonial/avatar/3.jpg" alt="">
                                            </div>
                                            <h5 class="name">Israt Jahan</h5>
                                            <span class="designation">CEO, Brick Consulting</span>
                                        </div>
                                    </div>
                                    <div class="testi-item">
                                        <div class="content-part text-center">
                                            <div class="icon-part">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                        </div>
                                        <div class="posted-by text-center">
                                            <div class="avatar">
                                                <img src="assets/images/testimonial/avatar/4.jpg" alt="">
                                            </div>
                                            <h5 class="name">Jorina Bibi</h5>
                                            <span class="designation">CEO, Brick Consulting</span>
                                        </div>
                                    </div>
                                    <div class="testi-item">
                                        <div class="content-part text-center">
                                            <div class="icon-part">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                        </div>
                                        <div class="posted-by text-center">
                                            <div class="avatar">
                                                <img src="assets/images/testimonial/avatar/5.jpg" alt="">
                                            </div>
                                            <h5 class="name">Rafian Sagar</h5>
                                            <span class="designation">CEO, Brick Consulting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Partner Section Start -->
            <div class="rs-partner gray-bg pt-70 pb-98 md-pb-80">
                <div class="container">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/1.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/2.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/3.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/4.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner Section End -->

            <!-- Team Section Start -->
            <div id="rs-team" class="rs-team slider1 pt-92 pb-92 md-pt-72 md-pb-50">
                <div class="container">
                    <div class="sec-title text-center mb-60 md-mb-42">
                        <div class="sub-title primary">Expert People</div>
                        <h2 class="title mb-14">Our Team Members</h2>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> data tempor incididunt ut labore et dolore magna.</div>
                    </div>
                    <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="4" data-md-device-nav="false" data-md-device-dots="true">
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/1.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Mike Jason</a></h4>
                                <span class="designation">Business Advisor</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/2.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Francis Ibikunle</a></h4>
                                <span class="designation">Senior Consultant</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/3.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Ara Gates</a></h4>
                                <span class="designation">Finance Consultant</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/4.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Claire Divas</a></h4>
                                <span class="designation">Business Advisor</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/5.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Isabella Croline</a></h4>
                                <span class="designation">IT Consultant</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/6.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">John Masud</a></h4>
                                <span class="designation">Senior Consultant</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/7.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Corey Anderson</a></h4>
                                <span class="designation">Assistant Director</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/8.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">John Freight</a></h4>
                                <span class="designation">Business Manager</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/9.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">John Maliha</a></h4>
                                <span class="designation">Business Advisor</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/1.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Mike Jason</a></h4>
                                <span class="designation">Business Advisor</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/2.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Francis Ibikunle</a></h4>
                                <span class="designation">Senior Consultant</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/3.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Ara Gates</a></h4>
                                <span class="designation">Finance Consultant</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/4.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Claire Divas</a></h4>
                                <span class="designation">Business Advisor</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/5.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Isabella Croline</a></h4>
                                <span class="designation">IT Consultant</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/6.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">John Masud</a></h4>
                                <span class="designation">Senior Consultant</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/7.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">Corey Anderson</a></h4>
                                <span class="designation">Assistant Director</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-wrap">
                            <div class="team-image">
                                <img src="assets/images/team/8.jpg" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a href="#">John Freight</a></h4>
                                <span class="designation">Business Manager</span>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Section End -->

            <!-- Contact Section Start -->
            <div id="rs-contact" class="rs-contact style1 gray-bg pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="white-bg">
                        <div class="row">
                            <div class="col-lg-8 form-part">
                                <div class="sec-title mb-35 md-mb-30">
                                    <div class="sub-title primary">CONTACT US</div>
                                    <h2 class="title mb-0">Get In Touch</h2>
                                </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" class="contact-form" method="post" action="mailer.php">
                                    <div class="row">
                                        <div class="col-md-6 mb-30">
                                            <div class="common-control">
                                                <input type="text" name="name" placeholder="Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-30">
                                            <div class="common-control">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-30">
                                            <div class="common-control">
                                                <input type="text" name="phone" placeholder="Phone Number" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-30">
                                            <div class="common-control">
                                                <input type="text" name="website" placeholder="Your Website" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-30">
                                            <div class="common-control">
                                                <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="submit-btn">
                                                <button type="submit" class="readon">Submit Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 pl-0 md-pl-pr-15 md-order-first">
                                <div class="contact-info">
                                    <h3 class="title">Contact Info</h3>
                                    <div class="info-wrap mb-20">
                                        <div class="icon-part">
                                            <i class="flaticon-location"></i>
                                        </div>
                                        <div class="content-part">
                                            <h4>USA Office</h4>
                                            127 Double Street, Dublin, United Kingdom.
                                        </div>
                                    </div>
                                    <div class="info-wrap mb-20">
                                        <div class="icon-part">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="content-part">
                                            <h4>Telephone</h4>
                                            <p>P: <a href="tel:+1235558888">(+123) 555 8888</a></p>
                                            <p>P: <a href="tel:+1235558899">(+123) 555 8899</a></p>
                                        </div>
                                    </div>
                                    <div class="info-wrap mb-20">
                                        <div class="icon-part">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="content-part">
                                            <h4>Mail Us</h4>
                                            <p>E: <a href="mailto:support@rstheme.com">support@rstheme.com</a></p>
                                            <p>E: <a href="mailto:info@codesless.com">info@codesless.com</a></p>
                                        </div>
                                    </div>
                                    <div class="info-wrap">
                                        <div class="icon-part">
                                            <i class="flaticon-clock"></i>
                                        </div>
                                        <div class="content-part">
                                            <h4>Opening Hours</h4>
                                            <p>Mon-Fri: 10:00-18:00</p>
                                            <p>Sat-Sun: 10:00-14:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->

            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog style1 pt-91 pb-92 md-pt-71 md-pb-72 sm-pb-75">
                <div class="container">
                    <div class="row y-middle mb-53 md-mb-40 sm-mb-50">
                        <div class="col-md-6 sm-mb-22">
                            <div class="sec-title">
                                <span class="sub-title primary right-line">LATEST NEWS</span>
                                <h2 class="title mb-0">Read Latest Updates</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-part text-right sm-text-left">
                                <a class="readon" href="#">View Updates</a>
                            </div>
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/1.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Strategy</a>
                                <h3 class="title"><a href="#">Covid-19 threatens the next generation of smartphones</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/2.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Management</a>
                                <h3 class="title"><a href="#">Soundtrack filma Lady Exclusive Music</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/3.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Consulting</a>
                                <h3 class="title"><a href="#">Winged moved stars, fruit creature seed night.</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/4.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Development</a>
                                <h3 class="title"><a href="#">Given void great you’re good appear have i also fifth</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/5.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Creative</a>
                                <h3 class="title"><a href="#">Lights winged seasons abundantly evening.</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/6.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Finance</a>
                                <h3 class="title"><a href="#">Team You Want to Work With mistakes runners</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/3.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Consulting</a>
                                <h3 class="title"><a href="#">Winged moved stars, fruit creature seed night.</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->
        </div> 
        <!-- Main content End -->

@endsection