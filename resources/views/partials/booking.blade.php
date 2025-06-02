<div class="booking_wrapper med_toppadder100 med_bottompadder90">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                <div class="team_heading_wrapper med_bottompadder50 wow fadeInDown" data-wow-delay="0.5s">
                    <h1 class="med_bottompadder20">Prendre un rendez-vous</h1>
                    <img src="{{asset('images/Icon_team.png')}}" alt="ligne" class="med_bottompadder20">
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
                            <input type="text" name="full_name" placeholder="Nom complet" class="require">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                        <div class="contect_form1">
                            <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="L'email doit être valide.">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                        <div class="contect_form1">
                            <input type="text" name="contact_no" placeholder="Téléphone" class="require">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                        <div class="contect_form1">
                            <input type="text" name="subject" placeholder="Sujet">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                        <div class="contect_form3">
                            <input type="text" name="date" placeholder="Date" class="require">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                        <div class="contect_form3">
                            <input type="text" name="time" placeholder="Heure" class="require">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
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
                            <button type="button" class="submitForm">Envoyer le message</button>
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
                            <p>En cas d'urgence. Votre gestionnaire de dossier personnel veillera à ce que vous receviez les meilleurs soins possibles.</p>
                        </div>
                        <div class="booking_btn">
                            <ul>
                                <li><a href="#">DISCUSSION EN DIRECT</a></li>
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
