@extends('layout')

@section('page')

    <!--header wrapper end-->
    <!-- med_tittle_section-->
    <div class="med_tittle_section">
        <div class="med_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="med_tittle_cont_wrapper">
                        <div class="med_tittle_cont">
                            <h1>Contact Us</h1>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a>
                                </li>
                                <li>Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- med_tittle_section End-->
    <!--contact us section start -->
    <div class="contact_us_section med_toppadder100 med_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="choose_heading_wrapper med_bottompadder30">
                        <h1 class="med_bottompadder20">Contact us</h1>
                        <img src="images/line.png" alt="title" class="med_bottompadder20">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                    </div>

                    <form>
                        <div class="cont_main_section">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <input type="text" name="full_name" placeholder="Full Name" class="require">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <input type="text" name="contact_no" placeholder="Phone" class="require">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form4 dc_cont_div">
                                        <textarea rows="5" name="message" placeholder="Message" class="require"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="response"></div>
                                    <div class="contact_btn_wrapper med_toppadder30">
                                        <button type="button" class="submitForm">submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <!--contact us section end-->
    <!-- dc category section start-->
    <div class="category_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="cat_about cont_cat_abt">
                        <div class="icon_wrapper dc_icon_section">
                            <img src="images/icon_map.png" alt="img" class="img-responsive">
                        </div>

                        <div class="cat_txt cont_cat_txt">
                            <h1>22, margatnet. 2020</h1>
                            <p>Marylebone,London</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="cat_about cont_cat_abt">
                        <div class="icon_wrapper dc_icon_section">
                            <img src="images/icon_call.png" alt="img" class="img-responsive">
                        </div>

                        <div class="cat_txt cont_cat_txt">
                            <h1>+1800 1256-12365</h1>
                            <p>Mon-Fri 8:30am - 9:30pm</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="cat_about cont_cat_abt">
                        <div class="icon_wrapper dc_icon_section">
                            <img src="images/icon_envelope.png" alt="img" class="img-responsive">
                        </div>

                        <div class="cat_txt cont_cat_txt cont_last_child">
                            <a href="#">
                                <h1>dummy@exmaple.com</h1>
                            </a>
                            <p>24 / 7online help support</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map_main_wrapper cont_dc_map">
            <div id="map" style="width:100%; float:left; height:600px;"></div>
        </div>
    </div>
    <!-- dc category section end-->
    <!--news section start-->
    <div class="news_section_dc">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="news_dc_txt">
                        <h3>directions to hospital :</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="edu_news_form edu_txt">
                        <input type="text" placeholder="Choose Directions">
                        <button type="button">get directions</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--news section end-->
    <!--partner wrapper start-->
    <div class="partner_wrapper med_bottompadder70 med_toppadder80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="partner_slider_img">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="images/partner_1.png" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="images/partner_2.png" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="images/partner_3.png" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="images/partner_4.png" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="images/partner_5.png" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="images/partner_6.png" class="img-responsive" alt="story_img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--partner wrapper end-->
    <!--news wrapper start-->
    <div class="newsletter_wrapper med_toppadder80 med_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="newsletter_text wow fadeOut" data-wow-delay="0.5s">
                        <h3>Your First Step Towards Oral Health For Life Starts Here :</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                    <div class="contect_btn_news">
                        <ul>
                            <li><a href="#">Enquiry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--news wrapper end-->
    @endsection
    <!--footer wrapper end-->
    <!--main js files-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom.js"></script>
    <!--js code-->
    <script>
        function initMap() {
            var uluru = {
                lat: -36.742775,
                lng: 174.731559
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                scrollwheel: false,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBctr8WYTfFDi_oGbPEolSDzn4VZaAKVK0&callback=initMap">
    </script>

    <!-- map Script-->