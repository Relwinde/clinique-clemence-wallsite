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
                        <h1>Laboratoire d'Analyses</h1>
                        <ol class="breadcrumb">
                            <li><a href="">Accueil</a></li>
                            <li>Laboratoire</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section laboratoire -->
<div class="team_wrapper med_toppadder100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">LABORATOIRE D'ANALYSES MÉDICALES</h1>
                    <img src="" alt="ligne" class="med_bottompadder20">
                    <p>
                        Des analyses biologiques précises et rapides pour un diagnostic fiable.
                    </p>
                </div>
            </div>

            <!-- Carousel des types d'analyses -->
            <div class="col-xl-12">
                <div class="ser_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <!-- Item 1 -->
                        <div class="item">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="icon" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="Biologie" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Biologie Clinique</h1>
                                            <p>Analyses sanguines, urinaires et biochimiques complètes.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 d-none d-md-block">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="icon" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="Microbiologie" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Microbiologie</h1>
                                            <p>Examens bactériologiques, parasitologiques et virologiques.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 d-none d-lg-block">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="icon" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="Hématologie" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Hématologie</h1>
                                            <p>Étude des cellules sanguines et des troubles de la coagulation.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="item">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="icon" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="Sérologie" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Sérologie</h1>
                                            <p>Détection des anticorps pour le diagnostic des maladies infectieuses.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 d-none d-md-block">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="icon" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="Hormonologie" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Hormonologie</h1>
                                            <p>Dosages hormonaux pour explorer les fonctions endocriniennes.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 d-none d-lg-block">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="icon" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="Génétique" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Biologie Moléculaire</h1>
                                            <p>Analyses génétiques et tests spécialisés (PCR, séquençage...).</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
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

<!-- À propos du laboratoire -->
<div class="ser_abt">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="ser_abt_img_resp">
                    <img src="" alt="laboratoire d'analyses" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7 abt_section">
                <div class="abt_txt abt_txt_resp">
                    <h3 style="color: #008888;">Excellence et fiabilité analytique</h3>
                    <p class="med_toppadder20">
                        Notre laboratoire dispose d'une technologie de pointe et suit des procédures qualité strictes 
                        pour garantir des résultats précis et rapides. Nos biologistes médicaux assurent une interprétation 
                        experte de vos analyses.
                    </p>
                    <ul>
                        <li>Accréditation selon les normes en vigueur</li>
                        <li>Automates haut de gamme pour des résultats précis</li>
                        <li>Délais d'exécution optimisés</li>
                        <li>Résultats disponibles en ligne sécurisé</li>
                    </ul>
                    <div class="med_toppadder30">
                        <a href="#" class="med_btn">Demander une ordonnance <i class="fa fa-file-text"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section informations pratiques -->
<div class="med_toppadder100 med_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">INFORMATIONS PRATIQUES</h1>
                    <img src="" alt="ligne" class="med_bottompadder20">
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="info_box">
                    <h3><i class="fa fa-clock-o"></i> Horaires</h3>
                    <p>Lundi au Vendredi : 7h-19h<br>
                    Samedi : 8h-12h<br>
                    Urgences : 24h/24</p>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="info_box">
                    <h3><i class="fa fa-flask"></i> Prélèvements</h3>
                    <ul>
                        <li>Sang : à jeun pour certains examens</li>
                        <li>Urines : premier jet ou recueil 24h</li>
                        <li>Prélèvements spécifiques sur demande</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="info_box">
                    <h3><i class="fa fa-file-text"></i> Résultats</h3>
                    <ul>
                        <li>Délais variables selon les analyses</li>
                        <li>Consultation sécurisée en ligne</li>
                        <li>Transmission automatique au médecin</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection