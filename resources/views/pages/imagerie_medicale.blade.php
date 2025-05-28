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
                        <h1>Imagerie Médicale</h1>
                        <ol class="breadcrumb">
                            <li><a href="">Accueil</a></li>
                            <li>Imagerie Médicale</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section imagerie médicale -->
<div class="team_wrapper med_toppadder100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">NOS SERVICES D'IMAGERIE MÉDICALE</h1>
                    <img src="" alt="ligne" class="med_bottompadder20">
                    <p>
                        Des équipements de pointe et un personnel qualifié pour des diagnostics précis et fiables.
                    </p>
                </div>
            </div>

            <!-- Carousel des types d'imagerie -->
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
                                            <img src="" alt="Radiologie" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Radiologie Numérique</h1>
                                            <p>Examens radiographiques standards avec une qualité d'image optimale et une faible irradiation.</p>
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
                                            <img src="" alt="Echographie" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Échographie</h1>
                                            <p>Examens indolores et sans radiation pour visualiser les organes internes en temps réel.</p>
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
                                            <img src="" alt="IRM" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>IRM</h1>
                                            <p>Imagerie par Résonance Magnétique pour une exploration détaillée sans rayons X.</p>
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
                                            <img src="" alt="Scanner" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Scanner (TDM)</h1>
                                            <p>Tomodensitométrie multi-barrettes pour des images précises en coupes.</p>
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
                                            <img src="" alt="Mammographie" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Mammographie</h1>
                                            <p>Dépistage et diagnostic des pathologies mammaires avec appareil numérique.</p>
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
                                            <img src="" alt="Ostéodensitométrie" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Ostéodensitométrie</h1>
                                            <p>Mesure de la densité osseuse pour le diagnostic de l'ostéoporose.</p>
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

<!-- À propos de l'imagerie médicale -->
<div class="ser_abt">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="ser_abt_img_resp">
                    <img src="" alt="équipement d'imagerie médicale" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7 abt_section">
                <div class="abt_txt abt_txt_resp">
                    <h3 style="color: #008888;">Une technologie de pointe pour votre santé</h3>
                    <p class="med_toppadder20">
                        Notre service d'imagerie médicale dispose des dernières technologies pour des examens précis 
                        et confortables. Nos radiologues expérimentés analysent vos résultats avec rigueur pour 
                        un diagnostic fiable.
                    </p>
                    <ul>
                        <li>Appareils haut de gamme et régulièrement entretenus</li>
                        <li>Résultats rapides et interprétés par des spécialistes</li>
                        <li>Respect des normes de sécurité et de radioprotection</li>
                        <li>Accueil et prise en charge personnalisés</li>
                    </ul>
                    <div class="med_toppadder30">
                        <a href="#" class="med_btn">Prendre rendez-vous <i class="fa fa-calendar"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section préparation aux examens -->
<div class="med_toppadder100 med_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">PRÉPARATION AUX EXAMENS</h1>
                    <img src="" alt="ligne" class="med_bottompadder20">
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="preparation_box">
                    <h3>IRM</h3>
                    <ul>
                        <li>Venir à jeun depuis 4 heures</li>
                        <li>Pas de métal sur vous (bijoux, montre, etc.)</li>
                        <li>Apporter vos anciens examens d'imagerie</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="preparation_box">
                    <h3>Scanner avec injection</h3>
                    <ul>
                        <li>Être à jeun depuis 6 heures</li>
                        <li>Prévoir 2 heures pour l'examen complet</li>
                        <li>Signaler toute allergie ou problème rénal</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection