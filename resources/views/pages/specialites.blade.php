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
                        <h1>Nos Spécialités</h1>
                        <ol class="breadcrumb">
                            <li><a href="">Accueil</a></li>
                            <li>Spécialités</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section des spécialités -->
<div class="team_wrapper med_toppadder100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">NOS SPÉCIALITÉS MÉDICALES</h1>
                    <img src="" alt="ligne" class="med_bottompadder20">
                    <p>
                        Découvrez l'expertise de nos médecins spécialistes dédiés à votre santé et bien-être.
                    </p>
                </div>
            </div>

            <!-- Carousel des spécialités -->
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
                                            <h1>Cardiologie</h1>
                                            <p>Diagnostic et traitement des maladies du cœur et des vaisseaux sanguins.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 d-none d-md-block">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Dermatologie</h1>
                                            <p>Soins de la peau, des cheveux, des ongles et des muqueuses.</p>
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
                                            <h1>Orthopédie</h1>
                                            <p>Prise en charge des troubles du système musculo-squelettique.</p>
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
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Ophtalmologie</h1>
                                            <p>Soins des yeux et traitement des troubles de la vision.</p>
                                            <a href="#">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 d-none d-md-block">
                                    <div class="cat_about ser_section">
                                        <div class="icon_wrapper">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_img">
                                            <img src="" alt="img" class="img-responsive">
                                        </div>
                                        <div class="cat_txt">
                                            <h1>Pneumologie</h1>
                                            <p>Diagnostic et traitement des maladies respiratoires.</p>
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
                                            <h1>Gastro-entérologie</h1>
                                            <p>Prise en charge des maladies du tube digestif et du foie.</p>
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

<!-- À propos des spécialités -->
<div class="ser_abt">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="ser_abt_img_resp">
                    <img src="" alt="spécialités médicales" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7 abt_section">
                <div class="abt_txt abt_txt_resp">
                    <h3 style="color: #008888;">Une expertise médicale de pointe</h3>
                    <p class="med_toppadder20">
                        Notre centre médical regroupe les meilleurs spécialistes dans chaque domaine de la médecine.
                        Grâce à des équipements modernes et des techniques innovantes, nous offrons des diagnostics
                        précis et des traitements adaptés à chaque pathologie.
                    </p>
                    <ul>
                        <li>Des spécialistes reconnus dans leur domaine</li>
                        <li>Des plateaux techniques performants</li>
                        <li>Une approche multidisciplinaire</li>
                        <li>Un suivi personnalisé</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection