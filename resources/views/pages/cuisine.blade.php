@extends('layout')

@section('page')

<!-- Header Section -->
 @include('partials.pages-header', [
    'title' => 'Cuisine',
    'subtitle' => 'Cuisine',
 ])

<!-- Services de cuisine - Carrousel -->
<div class="kitchen-service-wrapper section-padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="kitchen-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS SERVICES CULINAIRES</h1>
                    {{-- <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20"> --}}
                    <img src="{{ asset('images/line.png') }}" alt="ligne" class="med_bottompadder20">

                    <p>
                        Une cuisine adaptée aux besoins nutritionnels spécifiques des patients, avec des repas sains et équilibrés.
                    </p>
                </div>
            </div>

            <!-- Carrousel des services -->
            <div class="col-xl-12">
                <div class="kitchen-carousel owl-carousel owl-theme">
                    <!-- Service 1 -->
                    <div class="kitchen-service-card">
                        <div class="kitchen-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1547592180-85f173990554"
                                alt="Repas thérapeutiques" class="img-responsive">
                            <div class="kitchen-service-overlay">
                                <div class="kitchen-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="kitchen-service-text">
                            <h3>Repas Thérapeutiques</h3>
                            <p>Menus adaptés aux régimes spécifiques (sans sel, diabétique, hypoallergénique...).</p>
                            <div class="kitchen-specialties">
                                <span>Sur prescription</span>
                                <span>Équilibrés</span>
                                <span>Contrôlés</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="kitchen-service-card">
                        <div class="kitchen-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd"
                                alt="Nutrition entérale" class="img-responsive">
                            <div class="kitchen-service-overlay">
                                <div class="kitchen-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="kitchen-service-text">
                            <h3>Nutrition Entérale</h3>
                            <p>Préparation de repas liquides pour patients sous alimentation artificielle.</p>
                            <div class="kitchen-specialties">
                                <span>Stériles</span>
                                <span>Sur mesure</span>
                                <span>Hygiène maximale</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="kitchen-service-card">
                        <div class="kitchen-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061"
                                alt="Repas pédiatriques" class="img-responsive">
                            <div class="kitchen-service-overlay">
                                <div class="kitchen-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="kitchen-service-text">
                            <h3>Nutrition Pédiatrique</h3>
                            <p>Menus adaptés aux besoins nutritionnels des enfants hospitalisés.</p>
                            <div class="kitchen-specialties">
                                <span>0-18 ans</span>
                                <span>Éducatif</span>
                                <span>Attrayant</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="kitchen-service-card">
                        <div class="kitchen-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1505576399279-565b52d4ac71"
                                alt="Ateliers cuisine" class="img-responsive">
                            <div class="kitchen-service-overlay">
                                <div class="kitchen-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="kitchen-service-text">
                            <h3>Ateliers Nutrition</h3>
                            <p>Ateliers éducatifs pour apprendre à cuisiner sain selon sa pathologie.</p>
                            <div class="kitchen-specialties">
                                <span>Diabète</span>
                                <span>Cardiaque</span>
                                <span>Obésité</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div class="kitchen-service-card">
                        <div class="kitchen-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1490641815614-b45106d6dd04"
                                alt="Service traiteur" class="img-responsive">
                            <div class="kitchen-service-overlay">
                                <div class="kitchen-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="kitchen-service-text">
                            <h3>Service Traiteur</h3>
                            <p>Repas pour les événements et réunions dans l'établissement.</p>
                            <div class="kitchen-specialties">
                                <span>Événements</span>
                                <span>Réunions</span>
                                <span>Formations</span>
                            </div>
                        </div>
                    </div>

                    <!-- Service 6 -->
                    <div class="kitchen-service-card">
                        <div class="kitchen-service-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1543362906-acfc16c67564"
                                alt="Vente à emporter" class="img-responsive">
                            <div class="kitchen-service-overlay">
                                <div class="kitchen-service-overlay-content">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="kitchen-service-text">
                            <h3>Vente à Emporter</h3>
                            <p>Plats préparés pour les patients en sortie d'hospitalisation.</p>
                            <div class="kitchen-specialties">
                                <span>Congelés</span>
                                <span>Frais</span>
                                <span>Portions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos de la cuisine -->
<div class="kitchen-about-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="kitchen-about-image">
                    <img src="https://images.unsplash.com/photo-1589927986089-35812388d1f4"
                        alt="Cuisine de la clinique" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="kitchen-about-content">
                    <h3 class="kitchen-about-title">Une cuisine professionnelle au service des patients</h3>
                    <p class="padding-top-20">
                        Notre service de cuisine médicale répond aux normes d'hygiène les plus strictes et prépare chaque jour des repas adaptés aux besoins nutritionnels spécifiques des patients. Nous travaillons en étroite collaboration avec les médecins et diététiciens pour offrir une alimentation qui participe à la guérison.
                    </p>
                    <ul class="kitchen-about-list">
                        <li>Équipe de cuisiniers et diététiciens expérimentés</li>
                        <li>Produits frais et de saison</li>
                        <li>Respect strict des protocoles d'hygiène</li>
                        <li>Menus personnalisés selon les prescriptions médicales</li>
                        <li>Service 7j/7 pour les patients hospitalisés</li>
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
                <div class="kitchen-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS SPÉCIALITÉS NUTRITIONNELLES</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>Des solutions alimentaires adaptées à chaque pathologie</p>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="specialty-carousel owl-carousel owl-theme">
                    <div class="kitchen-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3>Cardiologie</h3>
                        <p>Régime pauvre en sel et en graisses saturées pour les patients cardiaques.</p>
                        <a href="#" class="specialty-link">Plus d'infos</a>
                    </div>

                    <div class="kitchen-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <h3>Diabétologie</h3>
                        <p>Menus à index glycémique contrôlé pour les patients diabétiques.</p>
                        <a href="#" class="specialty-link">Plus d'infos</a>
                    </div>

                    <div class="kitchen-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-allergies"></i>
                        </div>
                        <h3>Allergies</h3>
                        <p>Repas sans allergènes (gluten, lactose, arachides...).</p>
                        <a href="#" class="specialty-link">Plus d'infos</a>
                    </div>

                    <div class="kitchen-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-weight"></i>
                        </div>
                        <h3>Nutrition</h3>
                        <p>Programmes minceur ou prise de poids selon prescription.</p>
                        <a href="#" class="specialty-link">Plus d'infos</a>
                    </div>

                    <div class="kitchen-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3>Gériatrie</h3>
                        <p>Textures adaptées (mixé, haché...) pour les personnes âgées.</p>
                        <a href="#" class="specialty-link">Plus d'infos</a>
                    </div>

                    <div class="kitchen-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h3>Néonatologie</h3>
                        <p>Préparations spéciales pour les nouveau-nés et prématurés.</p>
                        <a href="#" class="specialty-link">Plus d'infos</a>
                    </div>

                    <div class="kitchen-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h3>Post-opératoire</h3>
                        <p>Alimentation progressive après intervention chirurgicale.</p>
                        <a href="#" class="specialty-link">Plus d'infos</a>
                    </div>

                    <div class="kitchen-specialty-card">
                        <div class="specialty-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3>Végétarien</h3>
                        <p>Options végétariennes équilibrées pour tous les patients.</p>
                        <a href="#" class="specialty-link">Plus d'infos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section préparation -->
<div class="kitchen-preparation-wrapper section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="kitchen-preparation-card">
                    <h2><i class="fa fa-info-circle"></i> Commander un repas</h2>
                    <ul class="kitchen-preparation-list">
                        <li>Réservation 24h à l'avance pour les repas spéciaux</li>
                        <li>Choix du menu via l'application ou le formulaire papier</li>
                        <li>Indication des allergies et restrictions alimentaires</li>
                        <li>Heures de service : 7h-9h / 12h-14h / 18h-20h</li>
                        <li>Service en chambre pour les patients alités</li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="kitchen-preparation-card">
                    <h2><i class="fa fa-question-circle"></i> Questions fréquentes</h2>
                    <div class="kitchen-accordion">
                        <div class="kitchen-accordion-item">
                            <button class="kitchen-accordion-button">Comment commander un régime spécial ?</button>
                            <div class="kitchen-accordion-content">
                                <p>Via l'infirmière référente ou directement auprès du service diététique. Une prescription médicale est nécessaire pour les régimes thérapeutiques.</p>
                            </div>
                        </div>
                        <div class="kitchen-accordion-item">
                            <button class="kitchen-accordion-button">Puis-je apporter de la nourriture extérieure ?</button>
                            <div class="kitchen-accordion-content">
                                <p>Oui, sous réserve de respecter les consignes d'hygiène et les restrictions alimentaires du patient. Consultez l'équipe soignante.</p>
                            </div>
                        </div>
                        <div class="kitchen-accordion-item">
                            <button class="kitchen-accordion-button">Y a-t-il un supplément pour les régimes spéciaux ?</button>
                            <div class="kitchen-accordion-content">
                                <p>Non, tous les régimes prescrits médicalement sont inclus dans le forfait hospitalier sans supplément.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section contact -->
<div class="kitchen-contact-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-alert">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-content">
                        <h3>Service diététique</h3>
                        <p>Pour toute question sur les régimes ou la nutrition pendant l'hospitalisation :</p>
                        <p>diététique@clinique.fr - Tél : 01 23 45 67 89 (poste 456)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour la page cuisine */
    .kitchen-header-section {
        position: relative;
        padding: 100px 0;
        background: url('https://images.unsplash.com/photo-1555244162-803834f70033') no-repeat center center;
        background-size: cover;
    }

    .kitchen-header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 136, 136, 0.6);
    }

    .kitchen-header-content-wrapper {
        position: relative;
        z-index: 1;
        color: white;
    }

    .kitchen-service-wrapper {
        background: #fff;
    }

    .kitchen-section-header {
        text-align: center;
    }

    .kitchen-section-header h1 {
        color: #008888;
        font-weight: 700;
    }

    .kitchen-carousel .owl-stage,
    .specialty-carousel .owl-stage {
        display: flex;
        padding: 20px 0;
    }

    .kitchen-carousel .owl-item,
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

    .kitchen-service-card {
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.3s;
        background: white;
        height: 100%;
    }

    .kitchen-service-card:hover {
        transform: translateY(-5px);
    }

    .kitchen-service-image-wrapper {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .kitchen-service-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .kitchen-service-card:hover .kitchen-service-image-wrapper img {
        transform: scale(1.05);
    }

    .kitchen-service-overlay {
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

    .kitchen-service-card:hover .kitchen-service-overlay {
        opacity: 1;
    }

    .kitchen-service-overlay-content a {
        color: white;
        font-weight: bold;
        text-decoration: none;
        padding: 10px 20px;
        border: 2px solid white;
        border-radius: 30px;
        transition: all 0.3s;
    }

    .kitchen-service-overlay-content a:hover {
        background: white;
        color: #008888;
    }

    .kitchen-service-text {
        padding: 20px;
    }

    .kitchen-service-text h3 {
        color: #008888;
        margin-bottom: 10px;
    }

    .kitchen-specialties {
        margin-top: 15px;
    }

    .kitchen-specialties span {
        display: inline-block;
        background: #e0f7f7;
        color: #008888;
        padding: 3px 10px;
        border-radius: 20px;
        font-size: 12px;
        margin-right: 5px;
        margin-bottom: 5px;
    }

    .kitchen-about-section {
        padding: 80px 0;
        background: #f9f9f9;
    }

    .kitchen-about-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .kitchen-about-content {
        padding-left: 30px;
    }

    .kitchen-about-title {
        color: #008888;
        font-weight: 700;
    }

    .kitchen-about-list {
        list-style-type: none;
        padding-left: 0;
        margin-top: 20px;
    }

    .kitchen-about-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .kitchen-about-list li:before {
        content: "✓";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .bg-light {
        background-color: #f9f9f9 !important;
    }

    .kitchen-specialty-card {
        text-align: center;
        margin-bottom: 30px;
        padding: 30px 20px;
        background: white;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
        height: 100%;
    }

    .kitchen-specialty-card:hover {
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

    .kitchen-specialty-card h3 {
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

    .kitchen-preparation-wrapper {
        background: #fff;
    }

    .kitchen-preparation-card {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 5px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .kitchen-preparation-card h2 {
        color: #008888;
        margin-bottom: 20px;
    }

    .kitchen-preparation-list {
        list-style-type: none;
        padding-left: 0;
    }

    .kitchen-preparation-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .kitchen-preparation-list li:before {
        content: "•";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .kitchen-accordion {
        margin-top: 20px;
    }

    .kitchen-accordion-item {
        margin-bottom: 10px;
    }

    .kitchen-accordion-button {
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

    .kitchen-accordion-button:hover {
        background: #cceeee;
    }

    .kitchen-accordion-content {
        padding: 15px;
        display: none;
        background: white;
        border-radius: 0 0 5px 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .kitchen-accordion-content p {
        margin: 0;
    }

    .kitchen-contact-section {
        padding: 40px 0;
        background: #f0f9f9;
    }

    .contact-alert {
        display: flex;
        align-items: center;
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-left: 5px solid #008888;
    }

    .contact-icon {
        margin-right: 20px;
        color: #008888;
        font-size: 30px;
    }

    .contact-content h3 {
        color: #008888;
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
        $(".kitchen-carousel").owlCarousel({
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
        const accordionButtons = document.querySelectorAll('.kitchen-accordion-button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const isOpen = content.style.display === 'block';

                // Ferme tous les autres items
                document.querySelectorAll('.kitchen-accordion-content').forEach(el => {
                    el.style.display = 'none';
                });

                // Réinitialise tous les boutons
                document.querySelectorAll('.kitchen-accordion-button').forEach(btn => {
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