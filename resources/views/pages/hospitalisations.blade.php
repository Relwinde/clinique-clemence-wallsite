@extends('layout')

@section('page')

<!-- Titre Section -->
 @include('partials.pages-header', [
    'title' => 'Hospitalisations',
    'subtitle' => 'Service Hospitalisation',
 ])

<!-- Section hospitalisation -->
<div class="hospitalisation-service-wrapper section-padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hospitalisation-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOTRE SERVICE D'HOSPITALISATION</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>
                        Un environnement médicalisé et confortable pour votre séjour en toute sérénité, avec des options standard et VIP adaptées à vos besoins.
                    </p>
                </div>
            </div>

            <!-- Types de services -->
            <div class="col-xl-12">
                <div class="row">
                    <!-- Service 1 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="hospitalisation-service-card">
                            <div class="hospitalisation-service-image-wrapper">
                                <img src="https://images.unsplash.com/photo-1581595219315-a187dd40c322?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Hospitalisation standard" class="img-responsive">
                                <div class="hospitalisation-service-overlay">
                                    <div class="hospitalisation-service-overlay-content">
                                        <a href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hospitalisation-service-text">
                                <h3>Hospitalisation Standard</h3>
                                <p>Chambres individuelles ou doubles avec tout le confort de base et surveillance médicale 24h/24.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="hospitalisation-service-card">
                            <div class="hospitalisation-service-image-wrapper">
                                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Hospitalisation VIP" class="img-responsive">
                                <div class="hospitalisation-service-overlay">
                                    <div class="hospitalisation-service-overlay-content">
                                        <a href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hospitalisation-service-text">
                                <h3>Hospitalisation VIP</h3>
                                <p>Suites haut de gamme avec services premium, espace détente privé et accompagnement personnalisé.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="hospitalisation-service-card">
                            <div class="hospitalisation-service-image-wrapper">
                                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Soins intensifs" class="img-responsive">
                                <div class="hospitalisation-service-overlay">
                                    <div class="hospitalisation-service-overlay-content">
                                        <a href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hospitalisation-service-text">
                                <h3>Unité de Soins Intensifs</h3>
                                <p>Surveillance continue pour les patients nécessitant des soins critiques, en version standard ou VIP.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos de l'hospitalisation -->
<div class="hospitalisation-about-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="hospitalisation-about-image">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Chambre d'hôpital" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="hospitalisation-about-content">
                    <h3 class="hospitalisation-about-title">Un accueil chaleureux et des soins de qualité</h3>
                    <p class="padding-top-20">
                        Notre service d'hospitalisation propose deux niveaux de confort pour s'adapter à vos besoins et préférences :
                    </p>
                    <div class="row padding-top-20">
                        <div class="col-md-6">
                            <h4>Hospitalisation Standard</h4>
                            <ul class="hospitalisation-about-list">
                                <li>Chambres individuelles ou doubles climatisées</li>
                                <li>Salle de bain privative ou partagée</li>
                                <li>Restauration médicalisée de qualité</li>
                                <li>Accès WiFi et télévision</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4>Hospitalisation VIP</h4>
                            <ul class="hospitalisation-about-list">
                                <li>Suites spacieuses avec espace salon</li>
                                <li>Salle de bain luxueuse avec équipements premium</li>
                                <li>Restauration gastronomique sur mesure</li>
                                <li>Service personnalisé 24h/24</li>
                                <li>Accès à des espaces privatifs</li>
                            </ul>
                        </div>
                    </div>
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
                <div class="hospitalisation-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS ÉQUIPEMENTS ET SERVICES</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                    <p>Des équipements adaptés pour chaque type d'hospitalisation</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="hospitalisation-equipment-card">
                    <img src="https://images.unsplash.com/photo-1585435557343-3b348031e799?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Lit médicalisé" class="img-responsive">
                    <h3>Lits Médicalisés</h3>
                    <p>Lits électriques avec matelas anti-escarres (standard) ou systèmes dernier cri (VIP).</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="hospitalisation-equipment-card">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Monitoring" class="img-responsive">
                    <h3>Monitoring</h3>
                    <p>Surveillance des constantes vitales 24h/24, avec options avancées en VIP.</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="hospitalisation-equipment-card">
                    <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Salle de bain" class="img-responsive">
                    <h3>Salles de Bain</h3>
                    <p>Adaptées ou partagées (standard) ou spa privatif avec baignoire balnéo (VIP).</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="hospitalisation-equipment-card">
                    <img src="https://images.unsplash.com/photo-1505576399279-565b52d4ac71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Espace détente" class="img-responsive">
                    <h3>Espaces Détente</h3>
                    <p>Salon commun (standard) ou espace privatif avec terrasse (VIP).</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section préparation à l'hospitalisation -->
<div class="hospitalisation-preparation-wrapper section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="hospitalisation-preparation-card">
                    <h2><i class="fa fa-suitcase"></i> Préparer son séjour</h2>
                    <ul class="hospitalisation-preparation-list">
                        <li>Pièce d'identité et carte vitale</li>
                        <li>Ordonnances et résultats d'examens récents</li>
                        <li>Liste des médicaments en cours</li>
                        <li>Affaires personnelles adaptées au type de chambre</li>
                        <li>Pour les VIP : confirmation de votre réservation premium</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="hospitalisation-preparation-card">
                    <h2><i class="fa fa-question-circle"></i> Questions fréquentes</h2>
                    <div class="hospitalisation-accordion">
                        <div class="hospitalisation-accordion-item">
                            <button class="hospitalisation-accordion-button">Quelle est la différence entre standard et VIP ?</button>
                            <div class="hospitalisation-accordion-content">
                                <p>L'hospitalisation VIP offre des suites plus spacieuses, des services personnalisés, une restauration gastronomique et des équipements haut de gamme, tandis que le standard propose un confort essentiel avec une qualité de soins identique.</p>
                            </div>
                        </div>
                        <div class="hospitalisation-accordion-item">
                            <button class="hospitalisation-accordion-button">Puis-je passer du standard au VIP ?</button>
                            <div class="hospitalisation-accordion-content">
                                <p>Oui, sous réserve de disponibilité. Un supplément sera appliqué. Contactez le service administratif pour plus d'informations.</p>
                            </div>
                        </div>
                        <div class="hospitalisation-accordion-item">
                            <button class="hospitalisation-accordion-button">Les soins médicaux diffèrent-ils entre standard et VIP ?</button>
                            <div class="hospitalisation-accordion-content">
                                <p>Non, la qualité des soins médicaux est identique. Seul le cadre et les services annexes diffèrent.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour la page hospitalisation - Préfixés pour éviter les conflits */
    .hospitalisation-header-section {
        position: relative;
        padding: 100px 0;
        background: url('https://example.com/hospital-bg.jpg') no-repeat center center;
        background-size: cover;
    }
    
    .hospitalisation-header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }
    
    .hospitalisation-header-content-wrapper {
        position: relative;
        z-index: 1;
        color: white;
    }
    
    .hospitalisation-service-wrapper {
        background: #fff;
    }
    
    .hospitalisation-section-header {
        text-align: center;
    }
    
    .hospitalisation-section-header h1 {
        color: #008888;
        font-weight: 700;
    }
    
    .hospitalisation-service-card {
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.3s;
    }
    
    .hospitalisation-service-card:hover {
        transform: translateY(-5px);
    }
    
    .hospitalisation-service-image-wrapper {
        position: relative;
        height: 250px;
        overflow: hidden;
    }
    
    .hospitalisation-service-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }
    
    .hospitalisation-service-card:hover .hospitalisation-service-image-wrapper img {
        transform: scale(1.05);
    }
    
    .hospitalisation-service-overlay {
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
    
    .hospitalisation-service-card:hover .hospitalisation-service-overlay {
        opacity: 1;
    }
    
    .hospitalisation-service-overlay-content a {
        color: white;
        font-weight: bold;
        text-decoration: none;
        padding: 10px 20px;
        border: 2px solid white;
        border-radius: 30px;
        transition: all 0.3s;
    }
    
    .hospitalisation-service-overlay-content a:hover {
        background: white;
        color: #008888;
    }
    
    .hospitalisation-service-text {
        padding: 20px;
        background: white;
    }
    
    .hospitalisation-service-text h3 {
        color: #008888;
        margin-bottom: 10px;
    }
    
    .hospitalisation-about-section {
        padding: 80px 0;
        background: #f9f9f9;
    }
    
    .hospitalisation-about-image img {
        width: 100%;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .hospitalisation-about-content {
        padding-left: 30px;
    }
    
    .hospitalisation-about-title {
        color: #008888 !important;
    }
    
    .hospitalisation-about-list {
        list-style-type: none;
        padding-left: 0;
        margin-top: 10px;
    }
    
    .hospitalisation-about-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 8px;
        font-size: 14px;
    }
    
    .hospitalisation-about-list li:before {
        content: "✓";
        color: #008888;
        position: absolute;
        left: 0;
    }
    
    .hospitalisation-equipment-card {
        text-align: center;
        margin-bottom: 30px;
        padding: 20px;
        background: white;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s;
    }
    
    .hospitalisation-equipment-card:hover {
        transform: translateY(-5px);
    }
    
    .hospitalisation-equipment-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    
    .hospitalisation-equipment-card h3 {
        color: #008888;
        margin-bottom: 10px;
    }
    
    .hospitalisation-preparation-wrapper {
        background: #fff;
    }
    
    .hospitalisation-preparation-card {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 5px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .hospitalisation-preparation-card h2 {
        color: #008888;
        margin-bottom: 20px;
    }
    
    .hospitalisation-preparation-list {
        list-style-type: none;
        padding-left: 0;
    }
    
    .hospitalisation-preparation-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }
    
    .hospitalisation-preparation-list li:before {
        content: "•";
        color: #008888;
        position: absolute;
        left: 0;
        font-weight: bold;
    }
    
    /* Styles pour l'accordéon FAQ */
    .hospitalisation-accordion {
        margin-top: 20px;
    }
    
    .hospitalisation-accordion-item {
        margin-bottom: 10px;
    }
    
    .hospitalisation-accordion-button {
        width: 100%;
        text-align: left;
        padding: 15px;
        background: #e6f2f2;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        color: #008888;
        transition: all 0.3s;
    }
    
    .hospitalisation-accordion-button:hover {
        background: #d0e6e6;
    }
    
    .hospitalisation-accordion-content {
        padding: 15px;
        display: none;
        background: white;
        border-radius: 0 0 5px 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    
    .hospitalisation-accordion-content p {
        margin: 0;
    }
    
    /* Classes utilitaires pour éviter les conflits */
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
    // Script spécifique pour la page hospitalisation
    document.addEventListener('DOMContentLoaded', function() {
        const accordionButtons = document.querySelectorAll('.hospitalisation-accordion-button');
        
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const isOpen = content.style.display === 'block';
                
                // Ferme tous les autres items
                document.querySelectorAll('.hospitalisation-accordion-content').forEach(el => {
                    el.style.display = 'none';
                });
                
                // Réinitialise tous les boutons
                document.querySelectorAll('.hospitalisation-accordion-button').forEach(btn => {
                    btn.style.background = '#e6f2f2';
                });
                
                // Ouvre l'item actuel si ce n'était pas déjà le cas
                if (!isOpen) {
                    content.style.display = 'block';
                    this.style.background = '#d0e6e6';
                }
            });
        });
    });
</script>

@endsection