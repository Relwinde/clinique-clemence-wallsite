@extends('layout')

@section('page')

<!-- Titre Section -->
@include('partials.pages-header', [
    'title' => 'Imagerie Médicale',
    'subtitle' => 'Des soins d’excellence, un engagement de confiance.'
])
<!-- Section imagerie -->
<div class="imagerie-service-wrapper section-padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="imagerie-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOTRE SERVICE D'IMAGERIE MÉDICALE</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>
                        Des équipements de pointe et une expertise reconnue pour un diagnostic précis et fiable.
                    </p>
                </div>
            </div>

            <!-- Types de services -->
            <div class="col-xl-12">
                <div class="row">
                    <!-- Service 1 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="imagerie-service-card">
                            <div class="imagerie-service-image-wrapper">
                                <img src="{{ asset('images/irm.jpg') }}"
                                    alt="IRM" class="img-responsive">
                                <div class="imagerie-service-overlay">
                                    <div class="imagerie-service-overlay-content">
                                        <a href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="imagerie-service-text">
                                <h3>IRM</h3>
                                <p>Imagerie par Résonance Magnétique pour une exploration détaillée sans irradiation.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="imagerie-service-card">
                            <div class="imagerie-service-image-wrapper">
                                <img src="{{ asset('images/SCANNER.jpg') }}"
                                    alt="Scanner" class="img-responsive">
                                <div class="imagerie-service-overlay">
                                    <div class="imagerie-service-overlay-content">
                                        <a href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="imagerie-service-text">
                                <h3>Scanner</h3>
                                <p>Tomodensitométrie pour des images précises en coupes transversales.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="imagerie-service-card">
                            <div class="imagerie-service-image-wrapper">
                                <img src="https://images.unsplash.com/photo-1530026186672-2cd00ffc50fe?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Échographie" class="img-responsive">
                                <div class="imagerie-service-overlay">
                                    <div class="imagerie-service-overlay-content">
                                        <a href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="imagerie-service-text">
                                <h3>Échographie</h3>
                                <p>Examen indolore utilisant les ultrasons, sans radiation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos de l'imagerie -->
<div class="imagerie-about-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="imagerie-about-image">
                    <img src="{{asset('images/APROPOS_IMAGERIE.jpg')}}"
                        alt="Salle d'imagerie" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="imagerie-about-content">
                    <h3 class="imagerie-about-title">Technologie de pointe pour votre santé</h3>
                    <p class="padding-top-20">
                        Notre service d'imagerie médicale dispose des dernières technologies pour offrir des diagnostics
                        précis et fiables. Nos radiologues expérimentés travaillent en étroite collaboration avec
                        l'ensemble des médecins pour une prise en charge optimale.
                    </p>
                    <ul class="imagerie-about-list">
                        <li>Appareils récents et régulièrement entretenus</li>
                        <li>Résultats rapides et interprétation experte</li>
                        <li>Environnement adapté et confortable</li>
                        <li>Respect strict des normes de sécurité</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section équipements/services -->
<div class="section-padding-top-100 section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="imagerie-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS ÉQUIPEMENTS ET TECHNIQUES</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="imagerie-equipment-card">
                    <img src="{{ asset('images/mamo.jpg') }}"
                        alt="Mammographie" class="img-responsive">
                    <h3>Mammographie</h3>
                    <p>Dépistage et diagnostic des pathologies mammaires avec appareil numérique.</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="imagerie-equipment-card">
                    <img src="{{ asset('images/os.jpg') }}"
                        alt="Ostéodensitométrie" class="img-responsive">
                    <h3>Ostéodensitométrie</h3>
                    <p>Mesure de la densité osseuse pour le diagnostic de l'ostéoporose.</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="imagerie-equipment-card">
                    <img src="{{ asset('images/radionum.jpg') }}"
                        alt="Radiologie numérique" class="img-responsive">
                    <h3>Radiologie Numérique</h3>
                    <p>Radiographies standards avec capteurs numériques pour moins de radiation.</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="imagerie-equipment-card">
                    <img src="{{ asset('images/echodopper.jpg') }}"
                        alt="Écho-Doppler" class="img-responsive">
                    <h3>Écho-Doppler</h3>
                    <p>Étude des vaisseaux sanguins et de la circulation.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section préparation aux examens -->
<div class="imagerie-preparation-wrapper section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="imagerie-preparation-card">
                    <h2><i class="fa fa-info-circle"></i> Préparer son examen</h2>
                    <ul class="imagerie-preparation-list">
                        <li>Ordonnance médicale obligatoire</li>
                        <li>Carte vitale et pièce d'identité</li>
                        <li>Anciens examens d'imagerie si disponibles</li>
                        <li>Respect des consignes spécifiques (jeûne, etc.)</li>
                        <li>Prévoir 30 minutes à 1 heure selon l'examen</li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="imagerie-preparation-card">
                    <h2><i class="fa fa-question-circle"></i> Questions fréquentes</h2>
                    <div class="imagerie-accordion">
                        <div class="imagerie-accordion-item">
                            <button class="imagerie-accordion-button">Dois-je prendre rendez-vous ?</button>
                            <div class="imagerie-accordion-content">
                                <p>Oui pour l'IRM et le scanner, non pour les radiographies standard (sauf mammographie).</p>
                            </div>
                        </div>
                        <div class="imagerie-accordion-item">
                            <button class="imagerie-accordion-button">Les examens sont-ils douloureux ?</button>
                            <div class="imagerie-accordion-content">
                                <p>Non, sauf éventuellement pour certaines injections de produit de contraste.</p>
                            </div>
                        </div>
                        <div class="imagerie-accordion-item">
                            <button class="imagerie-accordion-button">Quand aurai-je les résultats ?</button>
                            <div class="imagerie-accordion-content">
                                <p>Les images sont disponibles immédiatement, le compte-rendu est transmis sous 48h à votre médecin.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour la page imagerie - Préfixés pour éviter les conflits */
    .imagerie-header-section {
        position: relative;
        padding: 100px 0;
        background: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
        background-size: cover;
    }

    .imagerie-header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .imagerie-header-content-wrapper {
        position: relative;
        z-index: 1;
        color: white;
    }

    .imagerie-service-wrapper {
        background: #fff;
    }

    .imagerie-section-header {
        text-align: center;
    }

    .imagerie-section-header h1 {
        color: #008888;
        font-weight: 700;
    }

    .imagerie-service-card {
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .imagerie-service-card:hover {
        transform: translateY(-5px);
    }

    .imagerie-service-image-wrapper {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .imagerie-service-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .imagerie-service-card:hover .imagerie-service-image-wrapper img {
        transform: scale(1.05);
    }

    .imagerie-service-overlay {
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

    .imagerie-service-card:hover .imagerie-service-overlay {
        opacity: 1;
    }

    .imagerie-service-overlay-content a {
        color: white;
        font-weight: bold;
        text-decoration: none;
        padding: 10px 20px;
        border: 2px solid white;
        border-radius: 30px;
        transition: all 0.3s;
    }

    .imagerie-service-overlay-content a:hover {
        background: white;
        color: #008888;
    }

    .imagerie-service-text {
        padding: 20px;
        background: white;
    }

    .imagerie-service-text h3 {
        color: #008888;
        margin-bottom: 10px;
    }

    .imagerie-about-section {
        padding: 80px 0;
        background: #f9f9f9;
    }

    .imagerie-about-image img {
        width: 100%;
        height: 400px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .imagerie-about-image:hover img {
        opacity: 0.9;
        border-color: #008888;
    }

    .imagerie-about-content {
        padding-left: 30px;
    }

    .imagerie-about-title {
        color: #008888 !important;
    }

    .imagerie-about-list {
        list-style-type: none;
        padding-left: 0;
        margin-top: 20px;
    }

    .imagerie-about-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .imagerie-about-list li:before {
        content: "✓";
        color: #008888;
        position: absolute;
        left: 0;
    }

    .imagerie-equipment-card {
        text-align: center;
        margin-bottom: 30px;
        padding: 20px;
        background: white;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s;
    }

    .imagerie-equipment-card:hover {
        transform: translateY(-5px);
    }

    .imagerie-equipment-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    .imagerie-equipment-card h3 {
        color: #008888;
        margin-bottom: 10px;
    }

    .imagerie-preparation-wrapper {
        background: #fff;
    }

    .imagerie-preparation-card {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 5px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .imagerie-preparation-card h2 {
        color: #008888;
        margin-bottom: 20px;
    }

    .imagerie-preparation-list {
        list-style-type: none;
        padding-left: 0;
    }

    .imagerie-preparation-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .imagerie-preparation-list li:before {
        content: "•";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    /* Styles pour l'accordéon FAQ */
    .imagerie-accordion {
        margin-top: 20px;
    }

    .imagerie-accordion-item {
        margin-bottom: 10px;
    }

    .imagerie-accordion-button {
        width: 100%;
        text-align: left;
        padding: 15px;
        background: #e0f5f5;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        color: #008888;
        transition: all 0.3s;
    }

    .imagerie-accordion-button:hover {
        background: #cceeee;
    }

    .imagerie-accordion-content {
        padding: 15px;
        display: none;
        background: white;
        border-radius: 0 0 5px 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .imagerie-accordion-content p {
        margin: 0;
    }

    /* Classes utilitaires communes */
    .section-padding-top-100 {
        padding-top: 100px;
    }

    .section-padding-bottom-80 {
        padding-bottom: 80px;
    }

    .section-padding-bottom-100 {
        padding-bottom: 100px;
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


<script>
    // Script spécifique pour la page imagerie
    document.addEventListener('DOMContentLoaded', function() {
        const accordionButtons = document.querySelectorAll('.imagerie-accordion-button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const isOpen = content.style.display === 'block';

                // Ferme tous les autres items
                document.querySelectorAll('.imagerie-accordion-content').forEach(el => {
                    el.style.display = 'none';
                });

                // Réinitialise tous les boutons
                document.querySelectorAll('.imagerie-accordion-button').forEach(btn => {
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