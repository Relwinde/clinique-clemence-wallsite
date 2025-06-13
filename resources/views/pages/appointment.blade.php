@extends('layout')
@section('title')
    Rendez-vous
@endsection
@section('page')
    <!-- Section titre -->
 @include('partials.pages-header', [
    'title' => 'Prenez rendez-vous',
    'subtitle' => 'Rendez-vous',
 ])
    <!-- Fin section titre -->

    <!-- Formulaire de rendez-vous -->
    <div class="booking_wrapper med_toppadder100 book_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                    <div class="team_heading_wrapper med_bottompadder50">
                        <h1 class="med_bottompadder20">Prenez un rendez-vous</h1>
                        {{-- <img src="{{asset('images/Icon_team.png')}}" alt="line" class="med_bottompadder20"> --}}
                        <img src="{{ asset('images/line.png') }}" alt="ligne" class="med_bottompadder20">

                        <p>Prenez rendez-vous en ligne avec nos spécialistes. <br>
                        Notre équipe vous contactera pour confirmer votre rendez-vous.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <form class="booking_box">
                <div class="box_side_icon">
                    <img src="images/Icon_bk.png" alt="img">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1">
                                <input type="text" name="full_name" placeholder="Nom complet" class="require">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1">
                                <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="Veuillez entrer un email valide">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1">
                                <input type="text" name="contact_no" placeholder="Téléphone" class="require">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1">
                                <input type="text" name="subject" placeholder="Motif de consultation">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <input type="text" name="date" placeholder="Date" class="require">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <input type="text" name="time" placeholder="Heure" class="require">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="contect_form4">
                                <textarea rows="4" name="message" placeholder="Message supplémentaire" class="require"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="response"></div>
                            <div class="contect_btn">
                                <button type="button" class="submitForm">Envoyer</button>
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
                                <img src="{{asset('images/booking_call.png')}}" alt="img" class="img-circle">
                            </div>
                            <div class="booking_chat">
                                <h1>+226 70 75 14 04</h1>
                                <p>Pour les urgences, contactez-nous directement par téléphone.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin formulaire de rendez-vous -->

    <!-- Section disponibilités -->
    <div class="booking_wrapper avail_section med_bottompadder90">
        <div class="container">
            <div class="row">
                <div class="col--xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                    <div class="team_heading_wrapper med_bottompadder50 wow fadeInDown" data-wow-delay="0.4s">
                        <h1 class="med_bottompadder20">Disponibilités</h1>
                        <img src="images/Icon_team.png" alt="line" class="med_bottompadder20">
                        <p>Consultez nos créneaux disponibles et réservez en ligne. <br>
                        Nos horaires sont adaptés pour répondre à vos besoins.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="app">
                        <div class="app__main">
                            <div class="calendar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin section disponibilités -->

    <!-- Section newsletter -->
    <div class="newsletter_wrapper med_toppadder80 med_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="newsletter_text wow fadeOut" data-wow-delay="0.5s">
                        <h3>Votre première étape vers une meilleure santé commence ici :</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                    <div class="contect_btn_news">
                        <ul>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin section newsletter -->
@endsection

<!-- Scripts -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/jquery.inview.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>