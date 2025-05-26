 @extends('layout')

 @section('page')
 
    @include('partials.slider')
    <!--slider wrapper end-->
    <!--category wrapper start-->
    <div class="category_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cat_about">
                        <div class="icon_wrapper">
                            <img src="images/icon1.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_img">
                            <img src="images/icon_11.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_txt">
                            <h1>Heart Surgery</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin at the good health for you.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cat_about">
                        <div class="icon_wrapper">
                            <img src="images/icon2.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_img">
                            <img src="images/icon_2.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_txt">
                            <h1>Emergency Care</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin at the good health for you.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cat_about">
                        <div class="icon_wrapper">
                            <img src="images/icon3.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_img cat_img_3">
                            <img src="images/icon_3.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_txt">
                            <h1>Dental Care</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin at the good health for you.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--category wrapper end-->
    <!--about us wrapper start-->
    <div class="about_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="abt_img abt_box">
                        <img src="images/abt_img.jpg" alt="img">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 abt_section">
                    <div class="abt_heading_wrapper">
                        <h1 class="med_bottompadder20">about medical</h1>
                        <img src="images/line.png" alt="title" class="med_bottompadder20">
                    </div>
                    <div class="abt_txt">
                        <h3>Specialty Medicine with Compassion and Car Proin gravida nibh vel velit</h3>
                        <p class="med_toppadder20">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate..</p>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit.</p>
                    </div>
                    <div class="abt_chk med_toppadder30">
                        <div class="content">
                            <ul>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Health Care For All Types</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Emergency Services</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Dental Care Dentist.</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>24/7 Services</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about us wrapper end-->
    <!--appoint wrapper start-->
    <div class="container">
        <div class="appoint_wrapper">
            <div class="appoint_overlay"></div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 resp_apoint">
                    <div class="appoint_icon">
                        <img src="images/Icon_clock.png" alt="img" class="img-responsive">
                    </div>
                    <div class="appoint_box">
                        <h1 class="med_bottompadder30">Opening Hours</h1>
                        <p>Monday – Friday ---------------------------<span>09:00-17:00</span></p>
                        <p>Saturday --------------------------------------<span>09:30-17:00</span></p>
                        <p>Sunday ----------------------------------------<span>10:30-18:00</span></p>
                    </div>
                </div>
                <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 resp_apoint_1 d-none d-sm-none d-md-block">
                    <div class="appoint_box box_2">
                        <h1 class="med_bottompadder30 ">BOOK AN APPOINTMENT</h1>
                        <div class="appoint_form">
                            <ul>
                                <li><a href="#">Email : hospital@example.com</a></li>
                                <li> Fax : 1800 1245 1253</li>
                            </ul>
                        </div>
                        <h2><i class="flaticon-24-hours-phone-service"></i>
												Emergency Call +1 800-123-132</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--appoint wrapper end-->
    <!--choose wrapper start-->
    <div class="choose_wrapper med_toppadder100">
        <div class="choose_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="choose_heading_wrapper">
                        <h1 class="med_bottompadder20">Why Choose Us</h1>
                        <img src="images/line.png" alt="title" class="med_bottompadder30">
                    </div>
                    <div class="sidebar_wrapper">
                        <div class="accordionFifteen">
                            <div class="panel-group" id="accordionFifteenLeft" role="tablist">
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading desktop">
                                        <h4 class="panel-title">
													<a class="collapsed active" data-toggle="collapse" href="#collapseEightLeftone" aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseEightLeftone" class="panel-collapse collapse show" data-parent="#accordionFifteenLeft" aria-expanded="true" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading horn">
                                        <h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" href="#collapseEightLefttwo" aria-expanded="false">- Who has access to my Health Records</a>
												</h4>
                                    </div>
                                    <div id="collapseEightLefttwo" class="panel-collapse collapse " data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" href="#collapseEightLeftThree" aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseEightLeftthree" class="panel-collapse collapse " data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" href="#collapseEightLeftfour" aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseEightLeftfour" class="panel-collapse collapse" data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" href="#collapseEightLeftfive" aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseEightLeftfive" class="panel-collapse collapse " data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" href="#collapseEightLeftsix"        aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseEightLeftsix" class="panel-collapse collapse" data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                            </div>
                            <!--end of /.panel-group-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="owl_box">
                        <div class="med_slider_img">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="images/chs_slider_img.jpg" class="img-responsive" alt="story_img" />
                                </div>
                                <div class="item">
                                    <img src="images/chs_slider_img.jpg" class="img-responsive" alt="story_img" />
                                </div>
                                <div class="item">
                                    <img src="images/chs_slider_img.jpg" class="img-responsive" alt="story_img" />
                                </div>
                                <div class="item">
                                    <img src="images/chs_slider_img.jpg" class="img-responsive" alt="story_img" />
                                </div>
                                <div class="item">
                                    <img src="images/chs_slider_img.jpg" class="img-responsive" alt="story_img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--choose wrapper end-->
    <!--team wrapper start-->
    <div class="team_wrapper med_toppadder100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                    <div class="team_heading_wrapper med_bottompadder40 wow fadeInDown" data-wow-delay="0.5s">
                        <h1 class="med_bottompadder20">MEET OUR SPECIALISTS</h1>
                        <img src="images/Icon_team.png" alt="line" class="med_bottompadder20">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                            <br> nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="team_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_1.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer1" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_2.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-block">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer2" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_3.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer3" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_4.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-block">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer4" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_1.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer5" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_2.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer6" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_3.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer7" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_4.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-block">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer17" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_1.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer8" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_2.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer9" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_3.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 ">
                                        <div class="team_about">
                                            <div class="team_icon_wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer0" x="0px" y="0px" viewBox="0 0 300.346 300.346" style="enable-background:new 0 0 300.346 300.346;" xml:space="preserve" width="40px" height="40px">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M296.724,157.793c-3.611-5.821-9.552-9.841-16.299-11.03c-6.746-1.188-13.703,0.559-19.139,4.836l-21.379,17.126     c-3.533-3.749-8.209-6.31-13.359-7.218c-6.749-1.189-13.704,0.559-19.1,4.805l-12.552,9.921H162.66     c-5.152,0-10.301-1.238-14.891-3.579l-11.486-5.861c-9.678-4.938-20.532-7.328-31.385-6.908     c-15.046,0.579-29.448,6.497-40.554,16.666l-61.89,56.667c-2.901,2.656-3.28,7.093-0.873,10.203l32.406,41.867     c1.481,1.913,3.714,2.933,5.983,2.933c1.374,0,2.762-0.374,4.003-1.151L82.944,262.7c2.777-1.736,5.975-2.654,9.25-2.654h90.428     c12.842,0,25.446-4.407,35.489-12.409l73.145-58.281C300.815,181.745,303.166,168.176,296.724,157.793z M216.81,178.183     c2.037-1.601,4.564-2.236,7.114-1.787c1.536,0.271,2.924,0.913,4.087,1.856l-12.645,10.129c-1.126-2.111-2.581-4.019-4.283-5.672     L216.81,178.183z M281.837,177.528L208.69,235.81c-7.377,5.878-16.635,9.116-26.068,9.116H92.194     c-6.113,0-12.083,1.714-17.267,4.954l-33.169,20.743l-23.959-30.954L74.554,187.7c8.469-7.753,19.451-12.267,30.924-12.708     c8.279-0.323,16.554,1.504,23.933,5.268l11.486,5.861c6.707,3.422,14.233,5.231,21.763,5.231h32.504     c4.278,0,7.758,3.48,7.758,7.758c0,4.105-3.211,7.507-7.309,7.745l-90.45,5.252c-4.168,0.242-7.351,3.817-7.109,7.985     s3.822,7.346,7.985,7.109l90.45-5.252c9.461-0.549,17.317-6.817,20.282-15.32l53.916-43.189c2.036-1.602,4.561-2.237,7.114-1.787     c2.552,0.449,4.709,1.909,6.075,4.111C286.277,169.634,285.401,174.691,281.837,177.528z" fill="#FFFFFF" />
                                                                <path d="M161.7,132.383c13.183,0,25.302-6.625,32.418-17.722c7.117-11.097,8.082-24.875,2.581-36.855L168.57,16.531     c-1.232-2.685-3.916-4.406-6.87-4.406s-5.638,1.721-6.87,4.406l-28.129,61.274c-5.5,11.981-4.535,25.759,2.581,36.855     C136.398,125.757,148.517,132.383,161.7,132.383z M140.441,84.114L161.7,37.807l21.258,46.307     c3.341,7.277,2.754,15.645-1.568,22.385c-4.323,6.74-11.683,10.764-19.69,10.764c-8.007,0-15.368-4.024-19.69-10.765     C137.687,99.759,137.101,91.391,140.441,84.114z" fill="#FFFFFF" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="team_img">
                                                <img src="images/team_4.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="team_txt">
                                                <h1><a href="#">Dr. Johan Doe</a></h1>
                                                <p>(Hepatologist)</p>
                                            </div>
                                            <div class="team_icon_hover our_doc_icn_hovr">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--team wrapper end-->
    <!--vedio wrapper start-->
    <div class="vedio_wrapper">
        <div class="vedio_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="vedio_heading_wrapper wow fadeInDown" data-wow-delay="0.5s">
                        <h1 class="med_bottompadder20">Welcome to Hospital</h1>
                        <img src="images/Icon_team.png" alt="line" class="med_bottompadder20">
                        <p>We Care about everything what you want</p>
                        <h4><a class="popup-youtube" href="https://www.youtube.com/embed/xImpyYRVGOc"><img src="images/Play-Icon.png" alt="Play"> play video</a></h4>
                        <div class="video_btn_wrapper right">
                            <ul>
                                <li><a class="btn" href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--vedio wrapper end-->
    <!--event wrapper start-->
    <div class="event_wrapper med_toppadder100 med_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="choose_heading_wrapper">
                        <h1 class="med_bottompadder20">Upcoming Events</h1>
                        <img src="images/line.png" alt="title" class="med_bottompadder60">
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="event_slider_wrapper event_response_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section d-none d-sm-none d-md-none d-lg-block">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">

                                                <img src="images/event_1.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Together we can do so much</a></h2>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
													,UK</a></li>
                                                    <li><i class="fa fa-calendar-o" aria-hidden="true"></i>24 Nov, 2020</li>
                                                </ul>
                                                <p>Proin gravida nibh vel velit auctor aliuet. Aenean sollicitudin, aks lorem quis aks bibendum auctor.</p>
                                            </div>
                                        </div>
                                        <div class="img_section d-none d-sm-none d-md-none d-lg-block">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="images/event_2.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Together we can do so much</a></h2>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>California,UK</a></li>
                                                    <li><i class="fa fa-calendar-o" aria-hidden="true"></i>24 Nov, 2020</li>

                                                </ul>
                                                <p>Proin gravida nibh vel velit auctor aliuet. Aenean sollicitudin, aks lorem quis aks bibendum auctor.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="images/event_3.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Together we can do so much</a></h2>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>California,UK</a></li>
                                                    <li><i class="fa fa-calendar-o" aria-hidden="true"></i>24 Nov, 2020</li>
                                                </ul>
                                                <p>Proin gravida nibh vel velit auctor aliuet. Aenean sollicitudin, aks lorem quis aks bibendum auctor.</p>
                                            </div>
                                        </div>
                                        <div class="img_section d-none d-sm-none d-md-none d-lg-block">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="images/event_4.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Together we can do so much</a></h2>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>California,UK</a></li>
                                                    <li><i class="fa fa-calendar-o" aria-hidden="true"></i>24 Nov, 2020</li>
                                                </ul>
                                                <p>Proin gravida nibh vel velit auctor aliuet. Aenean sollicitudin, aks lorem quis aks bibendum auctor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="images/event_1.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Together we can do so much</a></h2>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>California,UK</a></li>
                                                    <li><i class="fa fa-calendar-o" aria-hidden="true"></i>24 Nov, 2020</li>
                                                </ul>
                                                <p>Proin gravida nibh vel velit auctor aliuet. Aenean sollicitudin, aks lorem quis aks bibendum auctor.</p>
                                            </div>
                                        </div>
                                        <div class="img_section d-none d-sm-none d-md-none d-lg-block">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="images/event_2.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Together we can do so much</a></h2>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>California,UK</a></li>
                                                    <li><i class="fa fa-calendar-o" aria-hidden="true"></i>24 Nov, 2020</li>
                                                </ul>
                                                <p>Proin gravida nibh vel velit auctor aliuet. Aenean sollicitudin, aks lorem quis aks bibendum auctor.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section d-none d-sm-none d-md-none d-lg-block">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="images/event_3.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Together we can do so much</a></h2>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>California,UK</a></li>
                                                    <li><i class="fa fa-calendar-o" aria-hidden="true"></i>24 Nov, 2017</li>
                                                </ul>
                                                <p>Proin gravida nibh vel velit auctor aliuet. Aenean sollicitudin, aks lorem quis aks bibendum auctor.</p>
                                            </div>
                                        </div>
                                        <div class="img_section d-none d-sm-none d-md-none d-lg-block">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="images/event_4.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Together we can do so much</a></h2>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>California,UK</a></li>
                                                    <li><i class="fa fa-calendar-o" aria-hidden="true"></i>24 Nov, 2020</li>
                                                </ul>
                                                <p>Proin gravida nibh vel velit auctor aliuet. Aenean sollicitudin, aks lorem quis aks bibendum auctor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- event wrapper end-->
    <!-- counter wrapper start-->
    <div class="counter_section">
        <div class="counter_overlay">
            <section class="counter-section section-padding" data-stellar-background-ratio="0.5">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="icon">
                                <a href=""><img src="images/png/patient.png" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="count-description">
                                <span class="timer">2340</span>
                                <h5 class="con1">Satisfied Patients</h5>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="icon">
                                <a href=""><img src="images/png/doctor.png" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="count-description">
                                <span class="timer">335</span>
                                <h5 class="con2">doctor's team</h5>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="icon">
                                <a href=""><img src="images/png/success.png" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="count-description">
                                <span class="timer">1305</span>
                                <h5 class="con2">success mission</h5>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="icon">
                                <a href=""><img src="images/png/heart.png" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="count-description">
                                <span class="timer">1540</span>
                                <h5 class="con4">Successfull Surgeries</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- counter wrapper end-->
    <!-- blog wrapper start-->
    <div class="blog_wrapper med_toppadder100 med_bottompadder90">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                    <div class="team_heading_wrapper med_bottompadder50 wow fadeInDown" data-wow-delay="0.5s">
                        <h1 class="med_bottompadder20">our News & blog</h1>
                        <img src="images/Icon_team.png" alt="line" class="med_bottompadder20">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                            <br> nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="blog_about">
                        <div class="blog_img">
                            <figure>
                                <img src="images/blog_img_1.jpg" alt="img" class="img-responsive">
                            </figure>
                        </div>
                        <div class="blog_comment">
                            <ul>
                                <li><a href=""><i class="fa fa-comment" aria-hidden="true"></i>50</a></li>
                                <li><a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i>98</a></li>
                            </ul>
                        </div>
                        <div class="blog_txt">
                            <h1><a href="#">Blog Image Post</a></h1>
                            <div class="blog_txt_info">
                                <ul>
                                    <li>BY ADMIN</li>
                                    <li>SEPT.29,2020</li>
                                </ul>
                            </div>
                            <p>Sollicitudin, lorem quis bibe u auctor, nisi elit conat ipsu, nec sagittis sem ni id elit. Duis sed odio sit amet nibh vulpute cursus.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="blog_about">
                        <div class="blog_img">
                            <figure>
                                <img src="images/blog_img_2.jpg" alt="img" class="img-responsive">
                            </figure>
                        </div>
                        <div class="blog_comment">
                            <ul>
                                <li><a href=""><i class="fa fa-comment" aria-hidden="true"></i>50</a></li>
                                <li><a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i>98</a></li>
                            </ul>
                        </div>
                        <div class="blog_txt">
                            <h1><a href="#">Blog Image Post</a></h1>
                            <div class="blog_txt_info">
                                <ul>
                                    <li>BY ADMIN</li>
                                    <li>SEPT.29,2020</li>
                                </ul>
                            </div>
                            <p>Sollicitudin, lorem quis bibe u auctor, nisi elit conat ipsu, nec sagittis sem ni id elit. Duis sed odio sit amet nibh vulpute cursus.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="blog_about">
                        <div class="blog_img">
                            <figure>
                                <img src="images/blog_img_3.jpg" alt="img" class="img-responsive">
                            </figure>
                        </div>
                        <div class="blog_comment">
                            <ul>
                                <li><a href=""><i class="fa fa-comment" aria-hidden="true"></i>50</a></li>
                                <li><a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i>98</a></li>
                            </ul>
                        </div>
                        <div class="blog_txt">
                            <h1><a href="#">Blog Image Post</a></h1>
                            <div class="blog_txt_info">
                                <ul>
                                    <li>BY ADMIN</li>
                                    <li>SEPT.29,2020</li>
                                </ul>
                            </div>
                            <p>Sollicitudin, lorem quis bibe u auctor, nisi elit conat ipsu, nec sagittis sem ni id elit. Duis sed odio sit amet nibh vulpute cursus.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog wrapper end-->
    <!--testimonial wrapper start-->
    <div class="testimonial_wrapper med_toppadder100">
        <div class="test_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="test_heading_wrapper">
                        <h1 class="med_bottompadder20">What Patients Are Saying</h1>
                        <img src="images/line.png" alt="title" class="med_bottompadder60">
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="test_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="t_icon_wrapper">
                                    <div class="t_client_cont_wrapper2">
                                        <p>“ Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat. ”</p>
                                        <div class="client_img_abt">
                                            <img class="img-circle" src="images/test_img_1.png" alt="img" style="width:90px;height:90px;">
                                            <h5>- Aditi Suryavanshi</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="t_icon_wrapper">
                                    <div class="t_client_cont_wrapper2">
                                        <p>“ Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat. ”</p>
                                        <div class="client_img_abt">
                                            <img class="img-circle" src="{{asset('images/test_img_1.png')}}" alt="img" style="width:90px;height:90px;">
                                            <h5>- Aditi Suryavanshi</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="t_icon_wrapper">
                                    <div class="t_client_cont_wrapper2">
                                        <p>“ Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat. ”</p>
                                        <div class="client_img_abt">
                                            <img class="img-circle" src="images/test_img_1.png" alt="img" style="width:90px;height:90px;">
                                            <h5>- Aditi Suryavanshi</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial wrapper end-->
    <!-- booking wrapper start -->
    <div class="booking_wrapper med_toppadder100 med_bottompadder90">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                    <div class="team_heading_wrapper med_bottompadder50 wow fadeInDown" data-wow-delay="0.5s">
                        <h1 class="med_bottompadder20">Book appointment</h1>
                        <img src="images/Icon_team.png" alt="line" class="med_bottompadder20">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                            <br>nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <form class="booking_box">
                <div class="box_side_icon">
                    <img src="images/Icon_bk.png" alt="img">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                            <div class="contect_form1">
                                <input type="text" name="full_name" placeholder="Full Name" class="require">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                            <div class="contect_form1">
                                <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                            <div class="contect_form1">
                                <input type="text" name="contact_no" placeholder="Phone" class="require">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                            <div class="contect_form1">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                            <div class="contect_form3">
                                <input type="text" name="date" placeholder="Date" class="require"><i class="fa fa-calendar-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                            <div class="contect_form3">
                                <input type="text" name="time" placeholder="Time" class="require"><i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  col-12">
                            <div class="contect_form4">
                                <textarea rows="4" name="message" placeholder="Message" class="require"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                            <div class="response"></div>
                            <div class="contect_btn">
                                <button type="button" class="submitForm">Send a Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="chat_box">
                <div class="booking_box_2">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="booking_box_img">
                                <img src="images/booking_call.png" alt="img" class="img-circle">
                            </div>
                            <div class="booking_chat">
                                <h1>+1 800 383 88 90</h1>
                                <p>if urgent. Your personal case manager will ensure that you receive the best possible care.</p>
                            </div>
                            <div class="booking_btn">
                                <ul>
                                    <li><a href="#">LIVE CHAT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map_main_wrapper">
            <div id="map" style="width:100%; float:left; height:600px;"></div>
        </div>
    </div>
    <!--booking wrapper end-->
    <!--partner wrapper start-->
    <div class="partner_wrapper med_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="partner_slider_img">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{asset('images/partner_1.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('images/partner_2.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('images/partner_3.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('images/partner_4.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('images/partner_5.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('images/partner_6.png')}}" class="img-responsive" alt="story_img" />
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

@endsection