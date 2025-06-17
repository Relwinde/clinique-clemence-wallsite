@extends('layout')

@section('title')
    Dépôt Pharmaceutique
@endsection

@section('page')

<!-- Header Section -->
 @include('partials.pages-header', [
    'title' => 'Dépôt Pharmaceutique',
    'subtitle' => 'Pharmacie',
 ])

<!-- Services pharmaceutiques - Carrousel -->
<div class="pharmacy-service-wrapper section-padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="pharmacy-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS SERVICES PHARMACEUTIQUES</h1>
                    {{-- <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20"> --}}
                    <img src="{{ asset('images/line.png') }}" alt="ligne" class="med_bottompadder20">
                    <p>
                        Une équipe de pharmaciens qualifiés à votre service pour vos besoins en médicaments et conseils santé.
                    </p>
                </div>
            </div>

            <!-- Carrousel des services -->
            <div class="col-xl-12">
                <div class="pharmacy-carousel owl-carousel owl-theme">
                    <!-- Service 1 -->
                    <div class="pharmacy-service-card">
                        <div class="pharmacy-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                                alt="Dispensation" class="img-responsive">
                            <div class="pharmacy-service-overlay">
                                <div class="pharmacy-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="pharmacy-service-text">
                            <h3>Dispensation</h3>
                            <p>Livraison sécurisée et professionnelle de vos médicaments sur ordonnance.</p>
                            <div class="pharmacy-specialties">
                                <span>Ordonnances</span>
                                <span>Médicaments</span>
                                <span>Livraison</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="pharmacy-service-card">
                        <div class="pharmacy-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                                alt="Conseil" class="img-responsive">
                            <div class="pharmacy-service-overlay">
                                <div class="pharmacy-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="pharmacy-service-text">
                            <h3>Conseil Pharmaceutique</h3>
                            <p>Expertise et recommandations personnalisées pour votre santé.</p>
                            <div class="pharmacy-specialties">
                                <span>Posologie</span>
                                <span>Interactions</span>
                                <span>Effets secondaires</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="pharmacy-service-card">
                        <div class="pharmacy-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                                alt="Préparation" class="img-responsive">
                            <div class="pharmacy-service-overlay">
                                <div class="pharmacy-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="pharmacy-service-text">
                            <h3>Préparation Magistrale</h3>
                            <p>Formulations personnalisées selon les prescriptions médicales.</p>
                            <div class="pharmacy-specialties">
                                <span>Crèmes</span>
                                <span>Gélules</span>
                                <span>Solutions</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="pharmacy-service-card">
                        <div class="pharmacy-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1579165466741-378c9d5b50e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                                alt="Vaccination" class="img-responsive">
                            <div class="pharmacy-service-overlay">
                                <div class="pharmacy-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="pharmacy-service-text">
                            <h3>Vaccination</h3>
                            <p>Service de vaccination pour divers besoins de santé publique.</p>
                            <div class="pharmacy-specialties">
                                <span>Grippe</span>
                                <span>Voyage</span>
                                <span>COVID-19</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div class="pharmacy-service-card">
                        <div class="pharmacy-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                                alt="Dépistage" class="img-responsive">
                            <div class="pharmacy-service-overlay">
                                <div class="pharmacy-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="pharmacy-service-text">
                            <h3>Dépistage</h3>
                            <p>Tests rapides pour diverses conditions de santé.</p>
                            <div class="pharmacy-specialties">
                                <span>Glycémie</span>
                                <span>Cholestérol</span>
                                <span>Tension</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 6 -->
                    <div class="pharmacy-service-card">
                        <div class="pharmacy-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                                alt="Parapharmacie" class="img-responsive">
                            <div class="pharmacy-service-overlay">
                                <div class="pharmacy-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="pharmacy-service-text">
                            <h3>Parapharmacie</h3>
                            <p>Produits de santé et bien-être sans ordonnance.</p>
                            <div class="pharmacy-specialties">
                                <span>Soins</span>
                                <span>Nutrition</span>
                                <span>Hygiène</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos du dépôt -->
<div class="pharmacy-about-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="pharmacy-about-image">
                    <img src="https://images.unsplash.com/photo-1579684453423-f84349ef60b0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                        alt="Pharmacie" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="pharmacy-about-content">
                    <h3 class="pharmacy-about-title">Un service pharmaceutique complet et professionnel</h3>
                    <p class="padding-top-20">
                        Notre dépôt pharmaceutique offre des services complets de dispensation de médicaments, 
                        conseils pharmaceutiques et préparation magistrale. Nos pharmaciens diplômés sont à 
                        votre disposition pour répondre à toutes vos questions sur vos traitements médicamenteux.
                    </p>
                    <ul class="pharmacy-about-list">
                        <li>Dispensation sécurisée des médicaments sur ordonnance</li>
                        <li>Conseils personnalisés sur la prise des médicaments</li>
                        <li>Service de préparation magistrale sur mesure</li>
                        <li>Vaccinations et dépistages rapides</li>
                        <li>Livraison à domicile pour les patients à mobilité réduite</li>
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
                <div class="pharmacy-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS DOMAINES D'EXPERTISE</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>Découvrez nos domaines de spécialisation pharmaceutique</p>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="expertise-carousel owl-carousel owl-theme">
                    <div class="pharmacy-expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3>Cardiologie</h3>
                        <p>Médicaments pour l'hypertension, les troubles du rythme cardiaque et l'insuffisance cardiaque.</p>
                        <a href="#" class="expertise-link">En savoir plus</a>
                    </div>

                    <div class="pharmacy-expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-lungs"></i>
                        </div>
                        <h3>Pneumologie</h3>
                        <p>Traitements pour l'asthme, la BPCO et autres pathologies respiratoires.</p>
                        <a href="#" class="expertise-link">En savoir plus</a>
                    </div>

                    <div class="pharmacy-expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>Neurologie</h3>
                        <p>Médicaments pour l'épilepsie, la maladie de Parkinson et la sclérose en plaques.</p>
                        <a href="#" class="expertise-link">En savoir plus</a>
                    </div>

                    <div class="pharmacy-expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-allergies"></i>
                        </div>
                        <h3>Allergologie</h3>
                        <p>Antihistaminiques, traitements de désensibilisation et médicaments d'urgence.</p>
                        <a href="#" class="expertise-link">En savoir plus</a>
                    </div>

                    <div class="pharmacy-expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-bone"></i>
                        </div>
                        <h3>Rhumatologie</h3>
                        <p>Traitements contre l'arthrose, l'ostéoporose et les douleurs articulaires.</p>
                        <a href="#" class="expertise-link">En savoir plus</a>
                    </div>

                    <div class="pharmacy-expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-dna"></i>
                        </div>
                        <h3>Oncologie</h3>
                        <p>Médicaments anticancéreux et traitements de support en cancérologie.</p>
                        <a href="#" class="expertise-link">En savoir plus</a>
                    </div>

                    <div class="pharmacy-expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-stomach"></i>
                        </div>
                        <h3>Gastro-entérologie</h3>
                        <p>Traitements pour les troubles digestifs, les maladies inflammatoires intestinales.</p>
                        <a href="#" class="expertise-link">En savoir plus</a>
                    </div>

                    <div class="pharmacy-expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-kidneys"></i>
                        </div>
                        <h3>Néphrologie</h3>
                        <p>Médicaments pour les maladies rénales et les troubles métaboliques associés.</p>
                        <a href="#" class="expertise-link">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section préparation commande -->
<div class="pharmacy-preparation-wrapper section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="pharmacy-preparation-card">
                    <h2><i class="fa fa-info-circle"></i> Préparer sa commande</h2>
                    <ul class="pharmacy-preparation-list">
                        <li>Ordonnance médicale valide</li>
                        <li>Carte vitale et mutuelle</li>
                        <li>Liste des médicaments en cours</li>
                        <li>Coordonnées complètes pour la livraison</li>
                        <li>Questions préparées pour le pharmacien</li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="pharmacy-preparation-card">
                    <h2><i class="fa fa-question-circle"></i> Questions fréquentes</h2>
                    <div class="pharmacy-accordion">
                        <div class="pharmacy-accordion-item">
                            <button class="pharmacy-accordion-button">Comment commander mes médicaments ?</button>
                            <div class="pharmacy-accordion-content">
                                <p>Vous pouvez déposer votre ordonnance directement à la pharmacie</p>
                            </div>
                        </div>
                        <div class="pharmacy-accordion-item">
                            <button class="pharmacy-accordion-button">Quels documents fournir ?</button>
                            <div class="pharmacy-accordion-content">
                                <p>Une ordonnance valide. Pour les nouveaux patients, une pièce d'identité peut être demandée.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    /* Styles spécifiques pour la page pharmacie */
    .pharmacy-header-section {
        position: relative;
        padding: 100px 0;
        background: url('https://images.unsplash.com/photo-1587854692152-cbe660dbde88?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
        background-size: cover;
    }

    .pharmacy-header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 136, 136, 0.6);
    }

    .pharmacy-header-content-wrapper {
        position: relative;
        z-index: 1;
        color: white;
    }

    .pharmacy-service-wrapper {
        background: #fff;
    }

    .pharmacy-section-header {
        text-align: center;
    }

    .pharmacy-section-header h1 {
        color: #008888;
        font-weight: 700;
    }

    .pharmacy-carousel .owl-stage,
    .expertise-carousel .owl-stage {
        display: flex;
        padding: 20px 0;
    }

    .pharmacy-carousel .owl-item,
    .expertise-carousel .owl-item {
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

    .pharmacy-service-card {
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.3s;
        background: white;
        height: 100%;
    }

    .pharmacy-service-card:hover {
        transform: translateY(-5px);
    }

    .pharmacy-service-image-wrapper {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .pharmacy-service-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .pharmacy-service-card:hover .pharmacy-service-image-wrapper img {
        transform: scale(1.05);
    }

    .pharmacy-service-overlay {
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

    .pharmacy-service-card:hover .pharmacy-service-overlay {
        opacity: 1;
    }

    .pharmacy-service-overlay-content a {
        color: white;
        font-weight: bold;
        text-decoration: none;
        padding: 10px 20px;
        border: 2px solid white;
        border-radius: 30px;
        transition: all 0.3s;
    }

    .pharmacy-service-overlay-content a:hover {
        background: white;
        color: #008888;
    }

    .pharmacy-service-text {
        padding: 20px;
    }

    .pharmacy-service-text h3 {
        color: #008888;
        margin-bottom: 10px;
    }

    .pharmacy-specialties {
        margin-top: 15px;
    }

    .pharmacy-specialties span {
        display: inline-block;
        background: #e0f7f7;
        color: #008888;
        padding: 3px 10px;
        border-radius: 20px;
        font-size: 12px;
        margin-right: 5px;
        margin-bottom: 5px;
    }

    .pharmacy-about-section {
        padding: 80px 0;
        background: #f9f9f9;
    }

    .pharmacy-about-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .pharmacy-about-content {
        padding-left: 30px;
    }

    .pharmacy-about-title {
        color: #008888;
        font-weight: 700;
    }

    .pharmacy-about-list {
        list-style-type: none;
        padding-left: 0;
        margin-top: 20px;
    }

    .pharmacy-about-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .pharmacy-about-list li:before {
        content: "✓";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .bg-light {
        background-color: #f9f9f9 !important;
    }

    .pharmacy-expertise-card {
        text-align: center;
        margin-bottom: 30px;
        padding: 30px 20px;
        background: white;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
        height: 100%;
    }

    .pharmacy-expertise-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .expertise-icon {
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

    .pharmacy-expertise-card h3 {
        color: #008888;
        margin-bottom: 15px;
    }

    .expertise-link {
        display: inline-block;
        margin-top: 15px;
        color: #008888;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 2px solid #008888;
        padding-bottom: 3px;
    }

    .pharmacy-preparation-wrapper {
        background: #fff;
    }

    .pharmacy-preparation-card {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 5px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .pharmacy-preparation-card h2 {
        color: #008888;
        margin-bottom: 20px;
    }

    .pharmacy-preparation-list {
        list-style-type: none;
        padding-left: 0;
    }

    .pharmacy-preparation-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .pharmacy-preparation-list li:before {
        content: "•";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .pharmacy-accordion {
        margin-top: 20px;
    }

    .pharmacy-accordion-item {
        margin-bottom: 10px;
    }

    .pharmacy-accordion-button {
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

    .pharmacy-accordion-button:hover {
        background: #cceeee;
    }

    .pharmacy-accordion-content {
        padding: 15px;
        display: none;
        background: white;
        border-radius: 0 0 5px 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .pharmacy-accordion-content p {
        margin: 0;
    }

    .pharmacy-emergency-section {
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
        // Carrousel des services principaux
        $(".pharmacy-carousel").owlCarousel({
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

        // Carrousel des expertises
        $(".expertise-carousel").owlCarousel({
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
        const accordionButtons = document.querySelectorAll('.pharmacy-accordion-button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const isOpen = content.style.display === 'block';

                // Ferme tous les autres items
                document.querySelectorAll('.pharmacy-accordion-content').forEach(el => {
                    el.style.display = 'none';
                });

                // Réinitialise tous les boutons
                document.querySelectorAll('.pharmacy-accordion-button').forEach(btn => {
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