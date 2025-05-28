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
                        <h1>Soins Infirmiers</h1>
                        <ol class="breadcrumb">
                            <li><a href="">Accueil</a></li>
                            <li>Soins Infirmiers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section soins infirmiers -->
<div class="team_wrapper med_toppadder100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">NOS SERVICES DE SOINS INFIRMIERS</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="med_bottompadder20">
                    <p>
                        Des soins personnalisés dispensés par une équipe d'infirmiers diplômés et expérimentés.
                    </p>
                </div>
            </div>

            <!-- Types de soins -->
            <div class="col-xl-12">
                <div class="row">
                    <!-- Soin 1 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="nursing_service">
                            <div class="nursing_icon">
                                <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Pansements" class="img-responsive">
                            </div>
                            <div class="nursing_content">
                                <h3>Pansements complexes</h3>
                                <p>Soins de plaies, ulcères, brûlures selon les protocoles les plus récents.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Soin 2 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="nursing_service">
                            <div class="nursing_icon">
                                <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Injections" class="img-responsive">
                            </div>
                            <div class="nursing_content">
                                <h3>Injections & perfusions</h3>
                                <p>Administration de traitements par voie intraveineuse, intramusculaire ou sous-cutanée.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Soin 3 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="nursing_service">
                            <div class="nursing_icon">
                                <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Prélèvements" class="img-responsive">
                            </div>
                            <div class="nursing_content">
                                <h3>Prélèvements sanguins</h3>
                                <p>Techniques adaptées pour tous les âges dans le respect des protocoles d'hygiène.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Soin 4 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="nursing_service">
                            <div class="nursing_icon">
                                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Surveillance" class="img-responsive">
                            </div>
                            <div class="nursing_content">
                                <h3>Surveillance clinique</h3>
                                <p>Contrôle des constantes, évaluation de la douleur et suivi thérapeutique.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos des soins -->
<div class="ser_abt">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="ser_abt_img_resp">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Infirmière en consultation" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7 abt_section">
                <div class="abt_txt abt_txt_resp">
                    <h3 style="color: #008888;">Une équipe infirmière dévouée</h3>
                    <p class="med_toppadder20">
                        Nos infirmiers et infirmières diplômés d'État assurent des soins techniques et relationnels 
                        de haute qualité. Formés aux dernières techniques, ils accompagnent chaque patient avec 
                        professionnalisme et humanité.
                    </p>
                    <ul>
                        <li>Écoute active et conseils personnalisés</li>
                        <li>Respect strict des protocoles d'asepsie</li>
                        <li>Coordination avec l'équipe médicale</li>
                        <li>Éducation thérapeutique pour l'autonomie du patient</li>
                    </ul>
                    <div class="med_toppadder30">
                        <a href="#" class="med_btn">Prendre rendez-vous <i class="fa fa-calendar"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section soins à domicile -->
<div class="med_toppadder100 med_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">SOINS INFIRMIERS À DOMICILE</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="med_bottompadder20">
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="home_care_box">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Infirmière à domicile" class="img-responsive">
                    <div class="home_care_content">
                        <h3>Services proposés à domicile</h3>
                        <ul>
                            <li>Pansements et soins de plaies</li>
                            <li>Injections et perfusions</li>
                            <li>Surveillance post-opératoire</li>
                            <li>Prélèvements biologiques</li>
                            <li>Aide à la prise des médicaments</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="home_care_box">
                    <img src="https://images.unsplash.com/photo-1581595219315-a187dd40c322?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Coordination des soins" class="img-responsive">
                    <div class="home_care_content">
                        <h3>Organisation des visites</h3>
                        <p>Nos infirmiers interviennent sur prescription médicale selon un planning adapté à vos besoins :</p>
                        <ul>
                            <li>Prise de rendez-vous par téléphone</li>
                            <li>Créneaux horaires matin et après-midi</li>
                            <li>Urgences sur appel</li>
                            <li>Transmission au médecin traitant</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section formation/info -->
<div class="med_toppadder80 med_bottompadder80 bg_light">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">INFORMATIONS UTILES</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="med_bottompadder20">
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="info_card">
                    <div class="info_icon">
                        <i class="fa fa-file-text-o"></i>
                    </div>
                    <h3>Prescription requise</h3>
                    <p>La plupart des soins infirmiers nécessitent une ordonnance médicale pour être réalisés.</p>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="info_card">
                    <div class="info_icon">
                        <i class="fa fa-euro"></i>
                    </div>
                    <h3>Tarifs & remboursements</h3>
                    <p>Soins pris en charge par la Sécurité Sociale et mutuelles selon les conditions habituelles.</p>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="info_card">
                    <div class="info_icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>Contactez-nous</h3>
                    <p>Service infirmier disponible du lundi au samedi de 7h à 20h.</p>
                    <a href="tel:+33123456789" class="med_btn_small">Appeler</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour les soins infirmiers */
    .nursing_service {
        background: white;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s;
        height: 100%;
    }
    
    .nursing_service:hover {
        transform: translateY(-5px);
    }
    
    .nursing_icon {
        height: 150px;
        overflow: hidden;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    
    .nursing_icon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .nursing_content h3 {
        color: #008888;
        font-size: 18px;
        margin-bottom: 10px;
    }
    
    .home_care_box {
        background: white;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        margin-bottom: 30px;
        height: 100%;
    }
    
    .home_care_box img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    .home_care_content {
        padding: 20px;
    }
    
    .home_care_content h3 {
        color: #008888;
        margin-bottom: 15px;
    }
    
    .info_card {
        background: white;
        padding: 25px;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 30px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .info_icon {
        font-size: 40px;
        color: #008888;
        margin-bottom: 15px;
    }
    
    .info_card h3 {
        margin-bottom: 15px;
    }
    
    .bg_light {
        background: #f9f9f9;
    }
    
    .med_btn_small {
        display: inline-block;
        background: #008888;
        color: white;
        padding: 8px 20px;
        border-radius: 30px;
        text-decoration: none;
        margin-top: 15px;
        font-size: 14px;
    }
</style>

@endsection