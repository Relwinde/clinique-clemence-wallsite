@extends('layout')

@section('title')
    Dentiste
@endsection

@section('page')

<!-- Header Section -->
 @include('partials.pages-header', [
    'title' => 'Dentiste',
    'subtitle' => 'dentiste',
 ])

<!-- Services dentaires - Carrousel -->
<div class="dentist-service-wrapper section-padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="dentist-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS SERVICES DENTAIRES</h1>
                    {{-- <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20"> --}}
                    <img src="{{ asset('images/line.png') }}" alt="ligne" class="med_bottompadder20">

                    <p>
                        Des soins dentaires complets et personnalisés pour toute la famille, dans un environnement moderne et confortable.
                    </p>
                </div>
            </div>

            <!-- Carrousel des services dentaires -->
            <div class="col-xl-12">
                <div class="dentist-carousel owl-carousel owl-theme">
                    <!-- Service 1 -->
                    <div class="dentist-service-card">
                        <div class="dentist-service-image-wrapper">
                            <img src="{{ asset('images/dentiste1.jpg') }}"
                                alt="Consultation dentaire" class="img-responsive">
                            <div class="dentist-service-overlay">
                                <div class="dentist-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="dentist-service-text">
                            <h3>Consultation & Prévention</h3>
                            <p>Bilan bucco-dentaire, détartrage, conseils personnalisés pour une hygiène optimale.</p>
                            <div class="dentist-specialties">
                                <span>Adultes</span>
                                <span>Enfants</span>
                                <span>Détartrage</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="dentist-service-card">
                        <div class="dentist-service-image-wrapper">
                            <img src="{{ asset('images/dentiste2.jpg') }}"
                                alt="Blanchiment" class="img-responsive">
                            <div class="dentist-service-overlay">
                                <div class="dentist-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="dentist-service-text">
                            <h3>Blanchiment Dentaire</h3>
                            <p>Techniques professionnelles pour un sourire éclatant et naturel.</p>
                            <div class="dentist-specialties">
                                <span>Blanchiment</span>
                                <span>Éclaircissement</span>
                                <span>Esthétique</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="dentist-service-card">
                        <div class="dentist-service-image-wrapper">
                            <img src="{{ asset('images/dentiste3.jpg') }}"
                                alt="Implantologie" class="img-responsive">
                            <div class="dentist-service-overlay">
                                <div class="dentist-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="dentist-service-text">
                            <h3>Implantologie</h3>
                            <p>Remplacement dentaire durable et esthétique avec des implants en titane.</p>
                            <div class="dentist-specialties">
                                <span>Implants</span>
                                <span>Prothèse</span>
                                <span>Reconstruction</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="dentist-service-card">
                        <div class="dentist-service-image-wrapper">
                            <img src="{{ asset('images/dentiste4.jpg') }}"
                                alt="Orthodontie" class="img-responsive">
                            <div class="dentist-service-overlay">
                                <div class="dentist-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="dentist-service-text">
                            <h3>Orthodontie</h3>
                            <p>Correction de l'alignement dentaire pour enfants et adultes.</p>
                            <div class="dentist-specialties">
                                <span>Appareils</span>
                                <span>Aligneurs</span>
                                <span>Invisalign</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div class="dentist-service-card">
                        <div class="dentist-service-image-wrapper">
                            <img src="{{ asset('images/dentiste5.jpg') }}"
                                alt="Pédodontie" class="img-responsive">
                            <div class="dentist-service-overlay">
                                <div class="dentist-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="dentist-service-text">
                            <h3>Pédodontie</h3>
                            <p>Soins dentaires spécialisés pour les enfants, dans une ambiance adaptée.</p>
                            <div class="dentist-specialties">
                                <span>Enfants</span>
                                <span>Prévention</span>
                                <span>Sédation</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 6 -->
                    <div class="dentist-service-card">
                        <div class="dentist-service-image-wrapper">
                            <img src="{{ asset('images/dentiste6.jpg') }}"
                                alt="Parodontologie" class="img-responsive">
                            <div class="dentist-service-overlay">
                                <div class="dentist-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="dentist-service-text">
                            <h3>Parodontologie</h3>
                            <p>Traitement des maladies des gencives et du tissu de soutien des dents.</p>
                            <div class="dentist-specialties">
                                <span>Gencives</span>
                                <span>Déchaussement</span>
                                <span>Soins</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos des soins dentaires -->
<div class="dentist-about-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="dentist-about-image">
                    <img src="{{asset('images/dentiste.jpg')}}"
                        alt="Cabinet dentaire" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="dentist-about-content">
                    <h3 class="dentist-about-title">Une approche douce et moderne</h3>
                    <p class="padding-top-20">
                        Notre cabinet dentaire combine technologie de pointe et approche humaine pour des soins 
                        sans stress et efficaces. Nous accordons une importance particulière à votre confort 
                        et à votre bien-être pendant les soins.
                    </p>
                    <ul class="dentist-about-list">
                        <li>Matériel dernier cri pour des soins précis et confortables</li>
                        <li>Approche individualisée et écoute attentive</li>
                        <li>Techniques de sédation pour les patients anxieux</li>
                        <li>Dossier dentaire informatisé et suivi personnalisé</li>
                        <li>Conventionné avec l'Assurance Maladie et mutuelles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section spécialités dentaires -->
<div class="section-padding-top-100 section-padding-bottom-80 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="dentist-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS SPÉCIALITÉS DENTAIRES</h1>
                    <img src="{{ asset('images/line.png') }}" alt="ligne" class="med_bottompadder20">
                    {{-- <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20"> --}}
                    <p>Découvrez l'ensemble de nos compétences et spécialités dentaires</p>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="dentist-specialty-carousel owl-carousel owl-theme">
                    <div class="dentist-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-tooth"></i>
                        </div>
                        <h3>Dentisterie Conservatrice</h3>
                        <p>Soins des caries, composites, inlays/onlays pour préserver vos dents naturelles.</p>
                        <a href="{{ url('appointment') }}" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="dentist-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-teeth"></i>
                        </div>
                        <h3>Endodontie</h3>
                        <p>Traitement des canaux radiculaires (dévitalisation) pour sauver les dents abîmées.</p>
                        <a href="{{url('appointment')}}" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="dentist-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-teeth-open"></i>
                        </div>
                        <h3>Prothèse Dentaire</h3>
                        <p>Couronnes, bridges, prothèses amovibles pour remplacer les dents manquantes.</p>
                        <a href="{{url('appointment')}}" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="dentist-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-smile"></i>
                        </div>
                        <h3>Esthétique Dentaire</h3>
                        <p>Facettes, éclaircissement, harmonisation du sourire pour un résultat naturel.</p>
                        <a href="{{url('appointment')}}" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="dentist-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h3>Dentisterie Pédiatrique</h3>
                        <p>Soins adaptés aux enfants, scellement de sillons, fluor, gestion de l'anxiété.</p>
                        <a href="{{url('appointment')}}" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="dentist-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-teeth-open"></i>
                        </div>
                        <h3>Chirurgie Dentaire</h3>
                        <p>Extractions, greffes, implants, interventions sur les dents de sagesse.</p>
                        <a href="{{url('appointment')}}" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="dentist-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-teeth"></i>
                        </div>
                        <h3>Dentisterie du Sport</h3>
                        <p>Protections buccales sur mesure pour les sportifs, gestion des traumatismes.</p>
                        <a href="{{url('appointment')}}" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="dentist-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h3>Sédation Consciente</h3>
                        <p>Techniques d'anxiolyse pour les patients phobiques ou les soins longs.</p>
                        <a href="{{url('appointment')}}" class="specialty-link">Prendre RDV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section préparation consultation dentaire -->
<div class="dentist-preparation-wrapper section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="dentist-preparation-card">
                    <h2><i class="fa fa-info-circle"></i> Préparer sa consultation</h2>
                    <ul class="dentist-preparation-list">
                        <li>Carte vitale et pièce d'identité</li>
                        <li>Carnet de santé pour les enfants</li>
                        <li>Liste des médicaments en cours</li>
                        <li>Anciennes radiographies si disponibles</li>
                        <li>Questionnaire médical pré-rempli si envoyé</li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="dentist-preparation-card">
                    <h2><i class="fa fa-question-circle"></i> Questions fréquentes</h2>
                    <div class="dentist-accordion">
                        <div class="dentist-accordion-item">
                            <button class="dentist-accordion-button">Comment prendre rendez-vous ?</button>
                            <div class="dentist-accordion-content">
                                <p>Par téléphone au +226 76730818 / 70751404 / 69880855 Directement à l'accueil de notre centre</p>
                            </div>
                        </div>
                        <div class="dentist-accordion-item">
                            <button class="dentist-accordion-button">Quelle est la durée d'une consultation ?</button>
                            <div class="dentist-accordion-content">
                                <p>Entre 30 minutes pour un contrôle et jusqu'à 1h30 pour des soins complexes.</p>
                            </div>
                        </div>
                        <div class="dentist-accordion-item">
                            <button class="dentist-accordion-button">Que faire en cas d'urgence dentaire ?</button>
                            <div class="dentist-accordion-content">
                                <p>Nous réservons des créneaux pour les urgences. Appelez-nous dès que possible.</p>
                            </div>
                        </div>
                        <div class="dentist-accordion-item">
                            <button class="dentist-accordion-button">Quels sont vos modes de paiement ?</button>
                            <div class="dentist-accordion-content">
                                <p>Carte bancaire, chèque, espèces et tiers payant avec certaines mutuelles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section urgences dentaires -->
<div class="dentist-emergency-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="emergency-alert">
                    <div class="emergency-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="emergency-content">
                        <h3>En cas d'urgence dentaire</h3>
                        <p>Douleur intense, gonflement, traumatisme dentaire : contactez-nous immédiatement au 01 23 45 67 89.</p>
                        <p>En dehors des heures d'ouverture, composez le 15 en cas d'urgence vitale (gonflement important avec difficulté respiratoire).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section équipement -->
<div class="dentist-equipment-section section-padding-top-80 section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="dentist-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOTRE ÉQUIPEMENT</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>Un cabinet équipé des dernières technologies pour des soins précis et confortables</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="equipment-card">
                    <div class="equipment-icon">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <h3>Radiologie Numérique</h3>
                    <p>Radiographies basse dose et panoramiques dentaires pour un diagnostic précis.</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="equipment-card">
                    <div class="equipment-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Microscope Opératoire</h3>
                    <p>Grossissement jusqu'à 25x pour des soins endodontiques de précision.</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="equipment-card">
                    <div class="equipment-icon">
                        <i class="fas fa-laser"></i>
                    </div>
                    <h3>Laser Dentaire</h3>
                    <p>Technologie laser pour des soins moins invasifs et plus confortables.</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="equipment-card">
                    <div class="equipment-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Caméra Intra-orale</h3>
                    <p>Visualisation en direct de votre bouche pour un diagnostic partagé.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour la page dentiste */
    .dentist-header-section {
        position: relative;
        padding: 100px 0;
        background: url('images/dentist-banner.jpg') no-repeat center center;
        background-size: cover;
    }

    .dentist-header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 136, 136, 0.6);
    }

    .dentist-header-content-wrapper {
        position: relative;
        z-index: 1;
        color: white;
    }

    .dentist-service-wrapper {
        background: #fff;
    }

    .dentist-section-header {
        text-align: center;
    }

    .dentist-section-header h1 {
        color: #008888;
        font-weight: 700;
    }

    .dentist-carousel .owl-stage,
    .dentist-specialty-carousel .owl-stage {
        display: flex;
        padding: 20px 0;
    }

    .dentist-carousel .owl-item,
    .dentist-specialty-carousel .owl-item {
        padding: 0 15px;
    }

    .dentist-service-card {
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.3s;
        background: white;
        height: 100%;
    }

    .dentist-service-card:hover {
        transform: translateY(-5px);
    }

    .dentist-service-image-wrapper {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .dentist-service-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .dentist-service-card:hover .dentist-service-image-wrapper img {
        transform: scale(1.05);
    }

    .dentist-service-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 136, 136, 0.7);
        opacity: 0;
        transition: opacity 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dentist-service-card:hover .dentist-service-overlay {
        opacity: 1;
    }

    .dentist-service-overlay-content a {
        color: white;
        font-weight: bold;
        text-decoration: none;
        padding: 10px 20px;
        border: 2px solid white;
        border-radius: 30px;
        transition: all 0.3s;
    }

    .dentist-service-overlay-content a:hover {
        background: white;
        color: #008888;
    }

    .dentist-service-text {
        padding: 20px;
    }

    .dentist-service-text h3 {
        color: #008888;
        margin-bottom: 10px;
    }

    .dentist-specialties {
        margin-top: 15px;
    }

    .dentist-specialties span {
        display: inline-block;
        background: #e0f7f7;
        color: #008888;
        padding: 3px 10px;
        border-radius: 20px;
        font-size: 12px;
        margin-right: 5px;
        margin-bottom: 5px;
    }

    .dentist-about-section {
        padding: 80px 0;
        background: #f9f9f9;
    }

    .dentist-about-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .dentist-about-content {
        padding-left: 30px;
    }

    .dentist-about-title {
        color: #008888;
        font-weight: 700;
    }

    .dentist-about-list {
        list-style-type: none;
        padding-left: 0;
        margin-top: 20px;
    }

    .dentist-about-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .dentist-about-list li:before {
        content: "✓";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .dentist-specialty-card {
        text-align: center;
        margin-bottom: 30px;
        padding: 30px 20px;
        background: white;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
        height: 100%;
    }

    .dentist-specialty-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .specialty-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        background: #e0f7f7;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #008888;
        font-size: 30px;
    }

    .dentist-specialty-card h3 {
        color: #008888;
        margin-bottom: 15px;
    }

    .specialty-link {
        display: inline-block;
        margin-top: 15px;
        color: #008888;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 2px solid #008888;
        padding-bottom: 3px;
    }

    .dentist-preparation-wrapper {
        background: #fff;
    }

    .dentist-preparation-card {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 5px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .dentist-preparation-card h2 {
        color: #008888;
        margin-bottom: 20px;
    }

    .dentist-preparation-list {
        list-style-type: none;
        padding-left: 0;
    }

    .dentist-preparation-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .dentist-preparation-list li:before {
        content: "•";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .dentist-accordion {
        margin-top: 20px;
    }

    .dentist-accordion-item {
        margin-bottom: 10px;
    }

    .dentist-accordion-button {
        width: 100%;
        text-align: left;
        padding: 15px;
        background: #e0f7f7;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        color: #008888;
        transition: all 0.3s;
    }

    .dentist-accordion-button:hover {
        background: #cceeee;
    }

    .dentist-accordion-content {
        padding: 15px;
        display: none;
        background: white;
        border-radius: 0 0 5px 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .dentist-accordion-content p {
        margin: 0;
    }

    .dentist-emergency-section {
        padding: 40px 0;
        background: #fff8f8;
    }

    .emergency-alert {
        display: flex;
        align-items: center;
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-left: 5px solid #ff6b6b;
    }

    .emergency-icon {
        margin-right: 20px;
        color: #ff6b6b;
        font-size: 30px;
    }

    .emergency-content h3 {
        color: #ff6b6b;
        margin-bottom: 10px;
    }

    .dentist-equipment-section {
        background: #f9f9f9;
    }

    .equipment-card {
        text-align: center;
        padding: 30px 20px;
        background: white;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        height: 100%;
    }

    .equipment-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        background: #e0f7f7;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #008888;
        font-size: 30px;
    }

    .equipment-card h3 {
        color: #008888;
        margin-bottom: 15px;
    }

    .section-padding-top-100 {
        padding-top: 100px;
    }

    .section-padding-bottom-80 {
        padding-bottom: 80px;
    }

    .section-padding-top-80 {
        padding-top: 80px;
    }

    .padding-top-20 {
        padding-top: 20px;
    }

    .padding-bottom-20 {
        padding-bottom: 20px;
    }

    .padding-bottom-40 {
        padding-bottom: 40px;
    }
</style>

<!-- Ajout des scripts pour Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    // Initialisation des carrousels
    $(document).ready(function(){
        // Carrousel des services dentaires
        $(".dentist-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });

        // Carrousel des spécialités dentaires
        $(".dentist-specialty-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 4 }
            }
        });

        // Script pour l'accordéon FAQ
        const accordionButtons = document.querySelectorAll('.dentist-accordion-button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const isOpen = content.style.display === 'block';

                // Ferme tous les autres items
                document.querySelectorAll('.dentist-accordion-content').forEach(el => {
                    el.style.display = 'none';
                });

                // Réinitialise tous les boutons
                document.querySelectorAll('.dentist-accordion-button').forEach(btn => {
                    btn.style.background = '#e0f7f7';
                });

                // Ouvre l'item actuel si ce n'était pas déjà le cas
                if (!isOpen) {
                    content.style.display = 'block';
                    this.style.background = '#cceeee';
                }
            });
        });
    });
</script>

@endsection