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
                        <h1>Gynécologie</h1>
                        <ol class="breadcrumb">
                            <li><a href="">Accueil</a></li>
                            <li>Gynécologie</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services de gynécologie - Carrousel -->
<div class="consultation-service-wrapper section-padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="consultation-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS SERVICES DE GYNÉCOLOGIE</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>
                        Une prise en charge complète et personnalisée pour la santé féminine à toutes les étapes de la vie.
                    </p>
                </div>
            </div>

            <!-- Carrousel des services -->
            <div class="col-xl-12">
                <div class="consultation-carousel owl-carousel owl-theme">
                    <!-- Service 1 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="https://img.freepik.com/photos-premium/femme-enceinte-consultation-medecin_23-2148843444.jpg"
                                alt="Suivi gynécologique" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Suivi Gynécologique</h3>
                            <p>Examens réguliers pour préserver la santé féminine et prévenir les pathologies.</p>
                            <div class="consultation-specialties">
                                <span>Frottis</span>
                                <span>Palpation</span>
                                <span>Échographie</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="https://img.freepik.com/photos-premium/medecin-discutant-avec-patiente-au-sujet-contraception_23-2148843446.jpg"
                                alt="Contraception" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Contraception</h3>
                            <p>Conseil et prescription des méthodes contraceptives adaptées à chaque situation.</p>
                            <div class="consultation-specialties">
                                <span>Pilule</span>
                                <span>DIU</span>
                                <span>Implant</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="https://img.freepik.com/photos-premium/medecin-realisation-echographie-femme-enceinte_23-2148843443.jpg"
                                alt="Suivi de grossesse" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Suivi de Grossesse</h3>
                            <p>Accompagnement personnalisé tout au long de la grossesse avec bilans réguliers.</p>
                            <div class="consultation-specialties">
                                <span>Échographies</span>
                                <span>Dépistages</span>
                                <span>Préparation</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="https://img.freepik.com/photos-premium/medecin-parlant-femme-menopause_23-2148843445.jpg"
                                alt="Ménopause" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Ménopause</h3>
                            <p>Prise en charge des symptômes et prévention des complications liées à la ménopause.</p>
                            <div class="consultation-specialties">
                                <span>Traitements</span>
                                <span>Bilan osseux</span>
                                <span>Suivi</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="https://img.freepik.com/photos-premium/medecin-faisant-examen-sein-femme_23-2148843447.jpg"
                                alt="Dépistage" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Dépistage & Prévention</h3>
                            <p>Dépistage des cancers gynécologiques et prévention des maladies féminines.</p>
                            <div class="consultation-specialties">
                                <span>Sein</span>
                                <span>Col utérin</span>
                                <span>Ovaires</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 6 -->
                    <div class="consultation-service-card">
                        <div class="consultation-service-image-wrapper">
                            <img src="https://img.freepik.com/photos-premium/consultation-gynecologique-femme-parlant-medecin_23-2148843448.jpg"
                                alt="Problèmes gynécologiques" class="img-responsive">
                            <div class="consultation-service-overlay">
                                <div class="consultation-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-service-text">
                            <h3>Problèmes Gynécologiques</h3>
                            <p>Diagnostic et traitement des infections, douleurs et troubles menstruels.</p>
                            <div class="consultation-specialties">
                                <span>Infections</span>
                                <span>Douleurs</span>
                                <span>Cycle</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos de la gynécologie -->
<div class="consultation-about-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="consultation-about-image">
                    <img src="https://img.freepik.com/photos-premium/gynecologue-parlant-patiente-consultation_23-2148843449.jpg"
                        alt="Consultation gynécologique" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="consultation-about-content">
                    <h3 class="consultation-about-title">Une approche bienveillante et professionnelle</h3>
                    <p class="padding-top-20">
                        Notre service de gynécologie offre des consultations avec des professionnelles expérimentées,
                        dans un environnement respectueux et discret. Nous accordons une importance particulière
                        à l'écoute, au confort et à la qualité de la prise en charge.
                    </p>
                    <ul class="consultation-about-list">
                        <li>Consultations avec des gynécologues femmes si souhaité</li>
                        <li>Matériel moderne et techniques actualisées</li>
                        <li>Délais d'attente réduits pour les rendez-vous</li>
                        <li>Discrétion et confidentialité absolues</li>
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
                    <h1 class="padding-bottom-20">NOS SPÉCIALITÉS EN GYNÉCOLOGIE</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>Découvrez nos domaines d'expertise en santé féminine</p>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="specialty-carousel owl-carousel owl-theme">
                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h3>Gynécologie Obstétrique</h3>
                        <p>Suivi de grossesse, accouchement et post-partum.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h3>Contraception</h3>
                        <p>Choix et adaptation des méthodes contraceptives.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-dna"></i>
                        </div>
                        <h3>Fertilité</h3>
                        <p>Bilan de fertilité et accompagnement PMA.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3>Dépistages</h3>
                        <p>Dépistage des cancers et infections gynécologiques.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3>Ménopause</h3>
                        <p>Prise en charge des symptômes et complications.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h3>Chirurgie Gynécologique</h3>
                        <p>Interventions pour pathologies gynécologiques.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-allergies"></i>
                        </div>
                        <h3>Endométriose</h3>
                        <p>Diagnostic et prise en charge de l'endométriose.</p>
                        <a href="#" class="specialty-link">Prendre RDV</a>
                    </div>

                    <div class="consultation-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-venus"></i>
                        </div>
                        <h3>Santé Sexuelle</h3>
                        <p>Consultations pour troubles et éducation sexuelle.</p>
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
                        <li>Carnet de santé si première consultation</li>
                        <li>Dates des dernières règles</li>
                        <li>Liste des médicaments et contraceptifs utilisés</li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="consultation-preparation-card">
                    <h2><i class="fa fa-question-circle"></i> Questions fréquentes</h2>
                    <div class="consultation-accordion">
                        <div class="consultation-accordion-item">
                            <button class="consultation-accordion-button">Quand faire sa première consultation ?</button>
                            <div class="consultation-accordion-content">
                                <p>Dès les premiers rapports sexuels ou à partir de 15 ans, même sans symptôme particulier.</p>
                            </div>
                        </div>
                        <div class="consultation-accordion-item">
                            <button class="consultation-accordion-button">Faut-il être à jeun pour une consultation ?</button>
                            <div class="consultation-accordion-content">
                                <p>Non, sauf indication particulière pour certains examens complémentaires.</p>
                            </div>
                        </div>
                        <div class="consultation-accordion-item">
                            <button class="consultation-accordion-button">Puis-je venir accompagnée ?</button>
                            <div class="consultation-accordion-content">
                                <p>Oui, vous pouvez être accompagnée si vous le souhaitez, mais vous pouvez aussi consulter seule.</p>
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
                        <h3>Urgences gynécologiques</h3>
                        <p>En cas de douleurs pelviennes intenses, saignements abondants ou fièvre, composez le 15 (SAMU) immédiatement.</p>
                        <p>Pour les urgences non vitales, notre service est joignable au 01 23 45 67 89.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour la page gynécologie */
    .consultation-header-section {
        position: relative;
        padding: 100px 0;
        background: url('https://img.freepik.com/photos-premium/salle-consultation-gynecologue-moderne-equipement-medical_23-2148843450.jpg') no-repeat center center;
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