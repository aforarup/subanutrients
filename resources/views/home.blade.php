@extends('layouts.index')

@section('home')
    class='active'
@endsection

@section('content')
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="images/demo/slider/chicks.jpg" data-thumb="images/demo/news/1.jpg" alt="" title="#caption1" />
            <img src="images/demo/slider/cows.jpg" data-thumb="images/demo/news/2.jpg" alt="" title="#caption2"  />
            <img src="images/demo/slider/horses.jpg" data-thumb="images/demo/news/3.jpg" alt="" title="#caption3" />
        </div>
        {{--<div id="caption1" class="nivo-html-caption">--}}
            {{--<p class="nivotitle v1">Medicine definition</p>--}}
        {{--</div>--}}
        {{--<div id="caption2" class="nivo-html-caption">--}}
            {{--<p class="nivotitle v2">Dynamic contact form</p>--}}
        {{--</div>--}}
        {{--<div id="caption3" class="nivo-html-caption">--}}
            {{--<p class="nivotitle v3">Fully responsive</p>--}}
        {{--</div>--}}

        <div class="main-wrapper app-wrapper">

            <div class="appointment-block translucent-bg">
                <div class="row">
                    <div class="large-3 columns red">
                        <p class="appointment-block-decorated">Say Hello!</p>
                        <p class="appointment-block-small">We would love to listen from you. Drop a line!</p>
                        &nbsp;<!-- Put appointemnt label here -->
                    </div>
                    <div class="large-9 columns">
                        <form method="POST" action="#" id="appointment-contact-form">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="large-3 columns">
                                    <input type="text" placeholder="Full Name *" name="name" />
                                    <input type="text" placeholder="Phone Number *" name="phone" />
                                </div>
                                <div class="large-3 columns">
                                    <input type="text" placeholder="E-mail Address *" name="email" />
                                    <input type="text" placeholder="Interest"  name="interest" />
                                </div>
                                <div class="large-3 columns">
                                    <textarea cols="10" rows="15"  name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="large-3 columns">
                                    <input type="submit" class="blue button radius" value="Send Message" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Slider -->

    <!-- Main Content -->
    <div class="main-wrapper">
        <div class="row main-content">
            <div class="large-4 columns service-block">
                <i class="fa fa-university"></i>
                <div class="mod_con_text">
                    <h5>Who are we?</h5>
                    <div class="divider"><span></span></div>
                    <p><strong>Suba Nutrients</strong>, Multi National Animal Health organization is engaged in innovation, R & D,
                        manufacturing & marketing of nutraceuticals and animal health products. Our objective is to
                        make our customers’ business more sustainable and profitable.
                        Building on many years of experience, we deliver quality products and services.
                        <a href="{!! url('/about') !!}">Read More »</a></p>
                </div>
            </div>
            <div class="large-4 columns service-block">
                <i class="fa fa-shopping-cart"></i>
                <div class="mod_con_text">
                    <h5>Our Products</h5>
                    <div class="divider"><span></span></div>
                    <p>We always aspire to develop sustainable competitive advantages
                        &amp; leverage our core strength to
                        develop new innovative products as per customers’ need. </p>

                    <br>
                    <p>
                        <img src="{!! url('/images/icons/chicken.png') !!}" class="large-2">
                        <img src="{!! url('/images/icons/cow.png') !!}" class="large-2">
                        <img src="{!! url('/images/icons/swine.png') !!}" class="large-2">
                        <img src="{!! url('/images/icons/dog.png') !!}" class="large-2">
                        <img src="{!! url('/images/icons/fish.png') !!}" class="large-2">
                    </p>
                    <br>
                    <p><a href="{!! url('/products') !!}">See Our Products »</a></p>
                </div>
            </div>
            <div class="large-4 columns service-block">
                <i class="fa fa-bolt"></i>
                <div class="mod_con_text">
                    <h5>Core Strength</h5>
                    <div class="divider"><span></span></div>
                    <p>Our business backbone  is research & development and continuous investment is key strategy
                        to keep pace with global competition.</p>
                    <p>Suba Nutrients specialized in development, manufacturing and providing solution in animal
                        nutrition. Our R & D and cutting edge technology are to serve more effectively & efficiently.
                        <a href="{!! url('/core-strength') !!}">Read More »</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns service-block">
                <div class="row">
                    <div class="large-6 columns">
                        <h5>Our Values</h5>
                        <div class="divider"><span></span></div>
                        <ul id="example1" class="accordion">
                            <li>
                                <div class="handle"><span><i></i></span>Dedication</div>
                                <div class="panel loading">
                                    <p>Suba nutrients is working to improve animal health.
                                        We are dedicated to animal health and nutrition.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="handle"><span><i></i></span><a href="#">Concern</a></div>
                                <div class="panel loading">
                                    <p>Your animals are our concern.</p>
                                </div>
                            </li>

                            <li>
                                <div class="handle"><span><i></i></span>Missions</div>
                                <ul class="panel loading">
                                    <li>Care for animal health for healthy world.</li>
                                    <li>Towards safe feed to safe food.</li>
                                </ul>
                            </li>
                            <li>
                                <div class="handle"><span><i></i></span>Goals</div>
                                <div class="panel loading">
                                    <p>Customer satisfaction is our ultimate goal.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="large-6 columns">
                        <div class="title-block">
                            <h5>Client Testimonials</h5>
                            <div class="divider"><span></span></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="module_content testimonial-block">
                            <ul id="testimonial_slide">
                                <li>
                                    <div class="testimonial-content">
                                        <p>
                                            Text normalization is an important aspect of successful information retrieval from medical documents such as clinical
                                            notes, radiology reports and discharge summaries. In the medical domain, a significant part of the general problem of
                                            text normalization is abbreviation and acronym disambiguation. Numerous abbreviations are used routinely throughout
                                            such texts and knowing their meaning is critical to data retrieval from the document.
                                        </p>
                                    </div>
                                    <span class="testimonial-divider"></span>
                                    <div class="testimonial-meta"><cite>John Smith</cite> - Head of marketing</div>

                                </li>
                                <li>
                                    <div class="testimonial-content">
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>
                                    </div>
                                    <span class="testimonial-divider"></span>
                                    <div class="testimonial-meta"><cite>Faton Avdiu</cite> - Web Designer</div>

                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <a class="prev" id="slide_prev1" href="#"><img src="images/arrow_left.png" alt="Previous" /></a>
                            <a class="next" id="slide_next1" href="#"><img src="images/arrow_right.png" alt="Next" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                <div class="title-block">
                    <h5>Slideshow</h5>
                    <div class="divider"><span></span></div>
                    <div class="clearfix"></div>
                </div>
                <div class="partners-block">
                    <ul id="logo_slide">
                        <li><img src="images/demo/logos/1.png" alt="Envato" /></li>
                        <li><img src="images/demo/logos/2.png" alt="Home Energy" /></li>
                        <li><img src="images/demo/logos/3.png" alt="Goodwawes" /></li>
                        <li><img src="images/demo/logos/4.png" alt="Graphicriver" /></li>
                        <li><img src="images/demo/logos/5.png" alt="DiagBlock" /></li>
                        <li><img src="images/demo/logos/6.png" alt="Google" /></li>
                        <li><img src="images/demo/logos/3.png" alt="Goodwawes" /></li>
                        <li><img src="images/demo/logos/1.png" alt="Envato" /></li>
                        <li><img src="images/demo/logos/4.png" alt="Graphicriver" /></li>
                        <li><img src="images/demo/logos/5.png" alt="DiagBlock" /></li>
                    </ul>
                    <div class="clearfix"></div>
                    <a class="prev" id="slide_prev2" href="#"><img src="images/arrow_left.png" alt="Previous" /></a>
                    <a class="next" id="slide_next2" href="#"><img src="images/arrow_right.png" alt="Next" /></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

    <!-- carouFredSel plugin -->
    <script src="{!! url('/plugins/carouFredSel/jquery.carouFredSel-6.2.0-packed.js') !!}"></script>
    <script src="{!! url('/plugins/carouFredSel/helper-plugins/jquery.touchSwipe.min.js') !!}"></script>

    <script type="text/javascript" src="{!! url('/js/jquery.nivo.slider.pack.js') !!}"></script>
    <script type="text/javascript" src="{!! url('/js/datepicker.js') !!}"></script>
    <script type="text/javascript" src="{!! url('/js/jquery.accordion.js') !!}"></script>

    <script>
        jQuery.noConflict();

        jQuery(window).load(function() {
            jQuery('#slider').nivoSlider({ controlNav: false});
        });
        jQuery(document).ready(function() {

            jQuery('#example1').accordion({
                handle: ".handle", // Default: "h3"
                panel: ".panel", // Default: ".panel"
                speed: 500, // Default: 200
                easing: "easeInOutQuad", // Default "swing"
                canOpenMultiple: false, // Default: false
                canToggle: false, // Default: false
                activeClassPanel: "open", // Default: "open"
                activeClassLi: "active", // Default: "active"
                lockedClass: "locked", // Default: "locked"
                loadingClass: "loading" // Default: "loading"
            });

            jQuery('input.datepicker').Zebra_DatePicker();
            // Carousel
            jQuery("#logo_slide").carouFredSel({
                responsive: true,
                width: '100%',
                circular: false,
                infinite: true,
                auto: false,
                scroll:{items:1},
                items: {visible: {min: 5}},
                prev: {	button: "#slide_prev2", key: "left"},
                next: { button: "#slide_next2",key: "right"}
            });

            jQuery(".work_slide ul").carouFredSel({
                circular: false,
                infinite: true,
                auto: false,
                scroll:{items:1},
                items: {visible: {min: 3,max: 3}},
                prev: {	button: "#slide_prev", key: "left"},
                next: { button: "#slide_next",key: "right"}
            });
            jQuery("#testimonial_slide").carouFredSel({
                circular: false,
                infinite: true,
                auto: true,
                scroll:{items:1},
                prev: {	button: "#slide_prev1", key: "left"},
                next: { button: "#slide_next1",key: "right"}
            });


        });

    </script>
@endsection