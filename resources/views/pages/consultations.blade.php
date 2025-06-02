@extends('layout')

@section('page')

<!-- Header Section -->
<div class="consultation-header-section">
    <div class="consultation-header-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="consultation-header-content-wrapper">
                    <div class="consultation-header-content">
                        <h1>Consultations Médicales</h1>
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

<!-- Services de consultation - Carrousel -->
<div class="consultation-service-wrapper section-padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="consultation-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS SERVICES DE CONSULTATION</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>
                        Une équipe médicale pluridisciplinaire à votre écoute pour une prise en charge personnalisée.
                    </p>
                </div>
            </div>

            <!-- Carrousel des consultations -->
            <div class="col-xl-12">
                <div class="consultation-carousel owl-carousel owl-theme">
                    <!-- Consultation 1 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="{{ asset('images/consultation.jpg') }}"
                                alt="Médecine générale" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Médecine Générale</h3>
                            <p>Bilan de santé, suivi médical, prévention et traitement des pathologies courantes.</p>
                            <div class="consultation-specialties">
                                <span>Adultes</span>
                                <span>Enfants</span>
                                <span>Vaccinations</span>
                            </div>
                        </div>
                    </div>

                    <!-- Consultation 2 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="{{ asset('images/consultation1.jpg') }}"
                                alt="Cardiologie" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Cardiologie</h3>
                            <p>Prévention, diagnostic et suivi des maladies cardiovasculaires.</p>
                            <div class="consultation-specialties">
                                <span>ECG</span>
                                <span>Échocardiographie</span>
                                <span>Holter</span>
                            </div>
                        </div>
                    </div>

                    <!-- Consultation 3 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="{{ asset('images/consultation2.jpg') }}"
                                alt="Pédiatrie" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Pédiatrie</h3>
                            <p>Suivi de croissance, vaccination et soins spécialisés pour les enfants.</p>
                            <div class="consultation-specialties">
                                <span>0-18 ans</span>
                                <span>Vaccins</span>
                                <span>Dépistage</span>
                            </div>
                        </div>
                    </div>

                    <!-- Consultation 4 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="{{ asset('images/consultation3.jpg') }}"
                                alt="Dermatologie" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Dermatologie</h3>
                            <p>Diagnostic et traitement des maladies de la peau, des ongles et des cheveux.</p>
                            <div class="consultation-specialties">
                                <span>Acné</span>
                                <span>Eczéma</span>
                                <span>Psoriasis</span>
                            </div>
                        </div>
                    </div>

                    <!-- Consultation 5 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="{{ asset('images/consultation4.jpg') }}"
                                alt="Gynécologie" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Gynécologie</h3>
                            <p>Suivi gynécologique, contraception, dépistage et suivi de grossesse.</p>
                            <div class="consultation-specialties">
                                <span>Femmes</span>
                                <span>Suivi</span>
                                <span>Prévention</span>
                            </div>
                        </div>
                    </div>

                    <!-- Consultation 6 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="{{ asset('images/consultation5.jpg') }}"
                                alt="Ophtalmologie" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Ophtalmologie</h3>
                            <p>Examens de la vue, dépistage et traitement des pathologies oculaires.</p>
                            <div class="consultation-specialties">
                                <span>Myopie</span>
                                <span>Cataracte</span>
                                <span>Glaucome</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos des consultations -->
<div class="consultation-about-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="consultation-about-image">
                    <img src="{{asset('images/consultationap.jpg')}}"
                        alt="Équipe médicale" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="consultation-about-content">
                    <h3 class="consultation-about-title">Une approche humaine et professionnelle</h3>
                    <p class="padding-top-20">
                        Notre centre médical propose des consultations avec des professionnels expérimentés dans diverses 
                        spécialités. Nous accordons une importance particulière à l'écoute, au temps consacré à chaque 
                        patient et à la qualité de la prise en charge.
                    </p>
                    <ul class="consultation-about-list">
                        <li>Consultations sur rendez-vous pour un temps dédié</li>
                        <li>Délais d'attente réduits pour les rendez-vous</li>
                        <li>Médecins expérimentés et à l'écoute</li>
                        <li>Suivi personnalisé et dossier médical partagé</li>
                        <li>Conventionné avec l'Assurance Maladie</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section spécialités - Version carrousel -->
<div class="section-padding-top-100 section-padding-bottom-80 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="consultation-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS SPÉCIALITÉS MÉDICALES</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>Parcourez nos différentes spécialités médicales disponibles</p>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="specialty-carousel owl-carousel owl-theme">
                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-lungs"></i>
                        </div>
                        <h3>Pneumologie</h3>
                        <p>Pathologies respiratoires, asthme, BPCO, allergies respiratoires.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>Neurologie</h3>
                        <p>Migraines, épilepsie, maladie de Parkinson, sclérose en plaques.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-bone"></i>
                        </div>
                        <h3>Rhumatologie</h3>
                        <p>Arthrose, ostéoporose, lombalgies, maladies articulaires.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3>Endocrinologie</h3>
                        <p>Diabète, thyroïde, troubles métaboliques, maladies hormonales.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-allergies"></i>
                        </div>
                        <h3>Allergologie</h3>
                        <p>Diagnostic et traitement des allergies respiratoires et alimentaires.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-stomach"></i>
                        </div>
                        <h3>Gastro-entérologie</h3>
                        <p>Pathologies digestives, endoscopies, troubles hépatiques.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-kidneys"></i>
                        </div>
                        <h3>Néphrologie</h3>
                        <p>Maladies rénales, dialyse, hypertension artérielle rénale.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-dna"></i>
                        </div>
                        <h3>Génétique</h3>
                        <p>Consultation et conseil en génétique médicale.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section préparation consultation -->
<div class="consultation-preparation-wrapper section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="consultation-preparation-card">
                    <h2><i class="fa fa-info-circle"></i> Préparer sa consultation</h2>
                    <ul class="consultation-preparation-list">
                        <li>Carte vitale et pièce d'identité</li>
                        <li>Ordonnances et résultats d'examens récents</li>
                        <li>Carnet de santé pour les enfants</li>
                        <li>Liste des médicaments en cours</li>
                        <li>Questions à poser au médecin préparées à l'avance</li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="consultation-preparation-card">
                    <h2><i class="fa fa-question-circle"></i> Questions fréquentes</h2>
                    <div class="consultation-accordion">
                        <div class="consultation-accordion-item">
                            <button class="consultation-accordion-button">Comment prendre rendez-vous ?</button>
                            <div class="consultation-accordion-content">
                                <p>Plusieurs options : par téléphone au 01 23 45 67 89, via notre plateforme en ligne, ou directement à l'accueil.</p>
                            </div>
                        </div>
                        <div class="consultation-accordion-item">
                            <button class="consultation-accordion-button">Quels documents apporter ?</button>
                            <div class="consultation-accordion-content">
                                <p>Carte vitale, pièce d'identité, ordonnances, derniers résultats d'examens et liste des médicaments.</p>
                            </div>
                        </div>
                        <div class="consultation-accordion-item">
                            <button class="consultation-accordion-button">Annulation de rendez-vous</button>
                            <div class="consultation-accordion-content">
                                <p>Merci de prévenir au moins 24h à l'avance pour permettre une réutilisation du créneau.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section urgences -->
<div class="consultation-emergency-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="emergency-alert">
                    <div class="emergency-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="emergency-content">
                        <h3>En cas d'urgence vitale</h3>
                        <p>Composez le 15 (SAMU) ou le 112 (numéro d'urgence européen) immédiatement.</p>
                        <p>Pour les urgences non vitales, notre service de garde est joignable au 01 23 45 67 89.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour la page consultations */
    .consultation-header-section {
        position: relative;
        padding: 100px 0;
        background: url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
        background-size: cover;
    }

    .consultation-header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 136, 136, 0.6);
    }

    .consultation-header-content-wrapper {
        position: relative;
        z-index: 1;
        color: white;
    }

    .consultation-service-wrapper {
        background: #fff;
    }

    .consultation-section-header {
        text-align: center;
    }

    .consultation-section-header h1 {
        color: #008888;
        font-weight: 700;
    }

    .consultation-carousel .owl-stage,
    .specialty-carousel .owl-stage {
        display: flex;
        padding: 20px 0;
    }

    .consultation-carousel .owl-item,
    .specialty-carousel .owl-item {
        padding: 0 15px;
    }

    .owl-nav {
        text-align: center;
        margin-top: 20px;
    }

    .owl-nav button {
        background: #008888 !important;
        color: white !important;
        width: 40px;
        height: 40px;
        border-radius: 50% !important;
        margin: 0 10px;
        font-size: 20px !important;
        line-height: 40px !important;
    }

    .owl-nav button:hover {
        background: #006666 !important;
    }

    .owl-dots {
        text-align: center;
        margin-top: 20px;
    }

    .owl-dots button.owl-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ccc !important;
        margin: 0 5px;
    }

    .owl-dots button.owl-dot.active {
        background: #008888 !important;
    }

    .consultation-service-card {
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.3s;
        background: white;
        height: 100%;
    }

    .consultation-service-card:hover {
        transform: translateY(-5px);
    }

    .consultation-service-image-wrapper {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .consultation-service-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .consultation-service-card:hover .consultation-service-image-wrapper img {
        transform: scale(1.05);
    }

    .consultation-service-overlay {
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

    .consultation-service-card:hover .consultation-service-overlay {
        opacity: 1;
    }

    .consultation-service-overlay-content a {
        color: white;
        font-weight: bold;
        text-decoration: none;
        padding: 10px 20px;
        border: 2px solid white;
        border-radius: 30px;
        transition: all 0.3s;
    }

    .consultation-service-overlay-content a:hover {
        background: white;
        color: #008888;
    }

    .consultation-service-text {
        padding: 20px;
    }

    .consultation-service-text h3 {
        color: #008888;
        margin-bottom: 10px;
    }

    .consultation-specialties {
        margin-top: 15px;
    }

    .consultation-specialties span {
        display: inline-block;
        background: #e0f7f7;
        color: #008888;
        padding: 3px 10px;
        border-radius: 20px;
        font-size: 12px;
        margin-right: 5px;
        margin-bottom: 5px;
    }

    .consultation-about-section {
        padding: 80px 0;
        background: #f9f9f9;
    }

    .consultation-about-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .consultation-about-content {
        padding-left: 30px;
    }

    .consultation-about-title {
        color: #008888;
        font-weight: 700;
    }

    .consultation-about-list {
        list-style-type: none;
        padding-left: 0;
        margin-top: 20px;
    }

    .consultation-about-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .consultation-about-list li:before {
        content: "✓";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .bg-light {
        background-color: #f9f9f9 !important;
    }

    .consultation-specialty-card {
        text-align: center;
        margin-bottom: 30px;
        padding: 30px 20px;
        background: white;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
        height: 100%;
    }

    .consultation-specialty-card:hover {
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

    .consultation-specialty-card h3 {
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

    .consultation-preparation-wrapper {
        background: #fff;
    }

    .consultation-preparation-card {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 5px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .consultation-preparation-card h2 {
        color: #008888;
        margin-bottom: 20px;
    }

    .consultation-preparation-list {
        list-style-type: none;
        padding-left: 0;
    }

    .consultation-preparation-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .consultation-preparation-list li:before {
        content: "•";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .consultation-accordion {
        margin-top: 20px;
    }

    .consultation-accordion-item {
        margin-bottom: 10px;
    }

    .consultation-accordion-button {
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

    .consultation-accordion-button:hover {
        background: #cceeee;
    }

    .consultation-accordion-content {
        padding: 15px;
        display: none;
        background: white;
        border-radius: 0 0 5px 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .consultation-accordion-content p {
        margin: 0;
    }

    .consultation-emergency-section {
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

    .section-padding-top-100 {
        padding-top: 100px;
    }

    .section-padding-bottom-80 {
        padding-bottom: 80px;
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    // Initialisation des carrousels
    $(document).ready(function(){
        // Carrousel des consultations principales
        $(".consultation-carousel").owlCarousel({
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

        // Carrousel des spécialités
        $(".specialty-carousel").owlCarousel({
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
        const accordionButtons = document.querySelectorAll('.consultation-accordion-button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const isOpen = content.style.display === 'block';

                // Ferme tous les autres items
                document.querySelectorAll('.consultation-accordion-content').forEach(el => {
                    el.style.display = 'none';
                });

                // Réinitialise tous les boutons
                document.querySelectorAll('.consultation-accordion-button').forEach(btn => {
                    btn.style.background = '#e6f0fa';
                });

                // Ouvre l'item actuel si ce n'était pas déjà le cas
                if (!isOpen) {
                    content.style.display = 'block';
                    this.style.background = '#d0e0f0';
                }
            });
        });
    });
</script>

@endsection