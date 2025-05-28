@extends('layout')

@section('page')

<!-- Titre Section -->
<div class="med_tittle_section">
    <div class="med_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="med_tittle_cont_wrapper">
                    <div class="med_tittle_cont">
                        <h1>Consultations</h1>
                        <ol class="breadcrumb">
                            <li><a href="">Accueil</a></li>
                            <li>Consultations</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section de consultations -->
<div class="team_wrapper med_toppadder100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">NOS CONSULTATIONS</h1>
                    <img src="" alt="ligne" class="med_bottompadder20">
                    <p>
                        Découvrez nos différents types de consultations assurées par des professionnels compétents
                        et dévoués à votre bien-être.
                    </p>
                </div>
            </div>

            <!-- Carousel des types de consultations -->
            <div class="col-xl-12">
                <div class="ser_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <!-- Item 1 -->
                        <div class="item">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Consultation Générale</h1>
                                            <p>Évaluation de votre état de santé général par un médecin qualifié.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 d-none d-md-block">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src=" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Consultation Pédiatrique</h1>
                                            <p>Soins dédiés aux enfants pour assurer leur croissance en bonne santé.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 d-none d-lg-block">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Consultation Gynécologique</h1>
                                            <p>Suivi de la santé reproductive et dépistages pour les femmes.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tu peux dupliquer <div class="item"> pour ajouter d'autres types -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos des consultations -->
<div class="ser_abt">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="ser_abt_img_resp">
                    <img src="" alt="consultation" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7 abt_section">
                <div class="abt_txt abt_txt_resp">
                    <h3 style="color: #008888;">Des soins personnalisés pour chaque patient</h3>
                    <p class="med_toppadder20">
                        Nos consultations sont assurées par une équipe de professionnels de santé expérimentés.
                        Chaque patient bénéficie d’un accompagnement personnalisé pour un diagnostic précis et
                        un traitement adapté.
                    </p>
                    <ul>
                        <li>Prise de rendez-vous simplifiée</li>
                        <li>Consultations spécialisées</li>
                        <li>Suivi post-consultation assuré</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
