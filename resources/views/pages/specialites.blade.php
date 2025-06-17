@extends('layout')

@section('title')
Spécialités Médicales
@endsection

@section('page')

<!-- En-tête -->
@include('partials.pages-header', [
'title' => 'Nos Spécialités Médicales',
'subtitle' => 'Spécialités',
])

<!-- Section spécialités -->
<div class="specialites-service-wrapper section-padding-top-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="specialites-section-header text-center padding-bottom-40">
                    <h2 class="section-title">NOS SPÉCIALITÉS MÉDICALES</h2>
                    <div class="section-divider">
                        <div class="divider-line"></div>
                    </div>
                    <p class="section-description">
                        Notre centre médical pluridisciplinaire regroupe plus de 20 spécialités pour une prise en charge globale de votre santé.
                    </p>
                </div>
            </div>

            <!-- Spécialités -->
            <div class="col-xl-12">
                <div class="row">
                    <!-- Cardiologie -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="specialites-service-card">
                            <div class="specialites-service-image-wrapper">
                                <img src="{{ asset('images/cardio.jpg') }}"
                                    alt="Cardiologie" class="img-responsive">
                                <div class="specialites-service-overlay">
                                    <div class="specialites-service-overlay-content">
                                        <a href="/specialites/cardiologie">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="specialites-service-text">
                                <h3>Cardiologie</h3>
                                <p>Diagnostic et traitement des maladies cardiaques et vasculaires avec des techniques de pointe.</p>
                                <div class="specialites-service-meta">
                                    <span><i class="fas fa-calendar-alt"></i> RDV sous 48h</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Neurologie -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="specialites-service-card">
                            <div class="specialites-service-image-wrapper">
                                <img src="{{asset('images/neurologie.jpg')}}"
                                    alt="Neurologie" class="img-responsive">
                                <div class="specialites-service-overlay">
                                    <div class="specialites-service-overlay-content">
                                        <a href="/specialites/neurologie">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="specialites-service-text">
                                <h3>Neurologie</h3>
                                <p>Prise en charge des troubles du système nerveux (cerveau, moelle épinière, nerfs).</p>
                                <div class="specialites-service-meta">
                                    <span><i class="fas fa-calendar-alt"></i> RDV sous 72h</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pédiatrie -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="specialites-service-card">
                            <div class="specialites-service-image-wrapper">
                                <img src="{{ asset('images/pediatrie.jpg') }}"
                                    alt="Pédiatrie" class="img-responsive">
                                <div class="specialites-service-overlay">
                                    <div class="specialites-service-overlay-content">
                                        <a href="/specialites/pediatrie">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="specialites-service-text">
                                <h3>Pédiatrie</h3>
                                <p>Soins médicaux spécialisés pour les enfants de 0 à 18 ans.</p>
                                <div class="specialites-service-meta">
                                    <span><i class="fas fa-calendar-alt"></i> RDV sous 24h</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dermatologie -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="specialites-service-card">
                            <div class="specialites-service-image-wrapper">
                                <img src="{{ asset('images/dermato.jpg') }}"
                                    alt="Dermatologie" class="img-responsive">
                                <div class="specialites-service-overlay">
                                    <div class="specialites-service-overlay-content">
                                        <a href="/specialites/dermatologie">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="specialites-service-text">
                                <h3>Dermatologie</h3>
                                <p>Diagnostic et traitement des maladies de la peau, des ongles et des cheveux.</p>
                                <div class="specialites-service-meta">
                                    <span><i class="fas fa-calendar-alt"></i> RDV sous 48h</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Orthopédie -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="specialites-service-card">
                            <div class="specialites-service-image-wrapper">
                                <img src="{{ asset('images/ortho.jpg') }}"
                                    alt="Orthopédie" class="img-responsive">
                                <div class="specialites-service-overlay">
                                    <div class="specialites-service-overlay-content">
                                        <a href="/specialites/orthopedie">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="specialites-service-text">
                                <h3>Orthopédie</h3>
                                <p>Prise en charge des troubles musculo-squelettiques et traumatismes.</p>
                                <div class="specialites-service-meta">
                                    <span><i class="fas fa-calendar-alt"></i> RDV sous 72h</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gynécologie -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="specialites-service-card">
                            <div class="specialites-service-image-wrapper">
                                <img src="{{ asset('images/gyneco.jpg') }}"
                                    alt="Gynécologie" class="img-responsive">
                                <div class="specialites-service-overlay">
                                    <div class="specialites-service-overlay-content">
                                        <a href="/specialites/gynecologie">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="specialites-service-text">
                                <h3>Gynécologie</h3>
                                <p>Santé féminine, suivi gynécologique et obstétrique.</p>
                                <div class="specialites-service-meta">
                                    <span><i class="fas fa-user-md"></i> 2 spécialistes</span>
                                    <span><i class="fas fa-calendar-alt"></i> RDV sous 48h</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rhumatologie -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="specialites-service-card">
                            <div class="specialites-service-image-wrapper">
                                <img src="{{ asset('images/rhumato.jpg') }}"
                                    alt="Rhumatologie" class="img-responsive">
                                <div class="specialites-service-overlay">
                                    <div class="specialites-service-overlay-content">
                                        <a href="/specialites/rhumatologie">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="specialites-service-text">
                                <h3>Rhumatologie</h3>
                                <p>Diagnostic et traitement des maladies des articulations, des os, des muscles et des tissus mous.</p>
                                <div class="specialites-service-meta">
                                    <span><i class="fas fa-user-md"></i> 3 spécialistes</span>
                                    <span><i class="fas fa-calendar-alt"></i> RDV sous 72h</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos -->
<div class="specialites-about-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="specialites-about-image">
                    <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Équipe médicale" class="img-responsive">
                    <div class="specialites-about-badge">
                        <span>25+</span>
                        <p>Spécialistes expérimentés</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="specialites-about-content">
                    <h3 class="specialites-about-title">Un centre médical d'excellence</h3>
                    <p class="padding-top-20">
                        Fondé en 2005, notre centre médical regroupe des spécialistes reconnus dans leur domaine,
                        offrant des soins de qualité avec des technologies de pointe dans un environnement
                        conçu pour votre confort et votre bien-être.
                    </p>
                    <ul class="specialites-about-list">
                        <li><strong>Consultations rapides</strong> - Délai moyen de rendez-vous de 48h</li>
                        <li><strong>Équipements modernes</strong> - Technologies médicales de dernière génération</li>
                        <li><strong>Approche globale</strong> - Collaboration entre spécialistes pour des diagnostics précis</li>
                        <li><strong>Suivi personnalisé</strong> - Plans de traitement adaptés à chaque patient</li>
                        <li><strong>Urgences spécialisées</strong> - Prise en charge 24/7 pour certaines spécialités</li>
                    </ul>
                    <div class="specialites-about-cta padding-top-20">
                        <a href="/contact" class="btn btn-primary">Prendre rendez-vous</a>
                        <a href="/equipe" class="btn btn-outline">Rencontrer nos spécialistes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Approches thérapeutiques -->
<div class="section-padding-top-80 section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="specialites-section-header text-center padding-bottom-40">
                    <h2 class="section-title">NOS APPROCHES THÉRAPEUTIQUES</h2>
                    <div class="section-divider">
                        <div class="divider-line"></div>
                    </div>
                    <p class="section-description">
                        Des méthodes de traitement innovantes et éprouvées pour une médecine efficace et humaine
                    </p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="specialites-equipment-card">
                    <div class="specialites-equipment-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Chirurgie Mini-invasive</h3>
                    <p>Techniques laparoscopiques et robotisées pour des interventions précises avec une récupération accélérée.</p>
                    <a href="/techniques/chirurgie-mini-invasive" class="specialites-equipment-link">Découvrir →</a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="specialites-equipment-card">
                    <div class="specialites-equipment-icon">
                        <i class="fas fa-dna"></i>
                    </div>
                    <h3>Thérapies Innovantes</h3>
                    <p>Médecine personnalisée, immunothérapies et thérapies ciblées basées sur votre profil génétique.</p>
                    <a href="/techniques/therapies-innovantes" class="specialites-equipment-link">Découvrir →</a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="specialites-equipment-card">
                    <div class="specialites-equipment-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Rééducation</h3>
                    <p>Programmes sur mesure en kinésithérapie et ergothérapie pour retrouver votre mobilité.</p>
                    <a href="/techniques/reeducation" class="specialites-equipment-link">Découvrir →</a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="specialites-equipment-card">
                    <div class="specialites-equipment-icon">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <h3>Médecine Préventive</h3>
                    <p>Bilans de santé complets, dépistages et conseils pour anticiper les problèmes de santé.</p>
                    <a href="/techniques/medecine-preventive" class="specialites-equipment-link">Découvrir →</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ -->
<div class="specialites-faq-section section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="specialites-section-header text-center padding-bottom-40">
                    <h2 class="section-title">QUESTIONS FRÉQUENTES</h2>
                    <div class="section-divider">
                        <div class="divider-line"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="specialites-accordion">
                    <button class="specialites-accordion-button">
                        <span>Comment prendre rendez-vous avec un spécialiste ?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="specialites-accordion-content">
                        <p>Vous pouvez prendre rendez-vous de plusieurs manières :</p>
                        <ul>
                            <li>En ligne via notre plateforme sécurisée</li>
                            <li>Par téléphone au +226 76730818 / 70751404 / 69880855</li>
                            <li>Directement à l'accueil de notre centre</li>
                        </ul>
                        <p>Nos conseillers vous orienteront vers le spécialiste adapté à votre besoin.</p>
                    </div>
                </div>

                <div class="specialites-accordion">
                    <button class="specialites-accordion-button">
                        <span>Les consultations sont-elles remboursées ?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="specialites-accordion-content">
                        <p>La plupart de nos consultations sont conventionnées et remboursées par l'Assurance Maladie :</p>
                        <ul>
                            <li>Consultations spécialisées : 70% du tarif de base</li>
                            <li>Certains actes techniques spécifiques peuvent faire l'objet de dépassements d'honoraires</li>
                            <li>Nous travaillons avec la plupart des mutuelles complémentaires</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="specialites-accordion">
                    <button class="specialites-accordion-button">
                        <span>Quels documents apporter à ma première consultation ?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="specialites-accordion-content">
                        <p>Pour votre première consultation, pensez à apporter :</p>
                        <ul>
                            <li>Votre carte vitale et attestation de mutuelle</li>
                            <li>Vos derniers examens médicaux en rapport avec votre problème de santé</li>
                            <li>La liste des médicaments que vous prenez</li>
                            <li>Votre carte de groupe sanguin si vous la possédez</li>
                            <li>Tout document médical que vous jugerez utile</li>
                        </ul>
                    </div>
                </div>

                <div class="specialites-accordion">
                    <button class="specialites-accordion-button">
                        <span>Proposez-vous des consultations en urgence ?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="specialites-accordion-content">
                        <p>Pour les urgences vitales, composez le 15 ou rendez-vous aux urgences les plus proches.</p>
                        <p>Pour les urgences relatives dans certaines spécialités (douleurs aiguës, traumatismes récents...) :</p>
                        <ul>
                            <li>Appelez notre standard qui vous orientera vers le spécialiste de garde</li>
                            <li>Certains créneaux sont réservés chaque jour pour les urgences</li>
                            <li>Des consultations téléphoniques peuvent être proposées en première intention</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="specialites-cta-section" style="background: url('https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
    <div class="specialites-cta-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="specialites-cta-content">
                    <h4>Vous avez des questions sur nos spécialités ?</h4>
                    <p class="padding-top-20 padding-bottom-30">Notre équipe est à votre écoute pour vous orienter vers le spécialiste adapté à votre situation.</p>
                    <div class="specialites-cta-buttons">
                        <a href="/contact" class="btn btn-light">Nous contacter</a>
                        <a href="tel:+33123456789" class="btn btn-outline-light">
                            <i class="fas fa-phone-alt"></i> +226 70 75 14 04
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Couleur thématique */
    :root {
        --specialites-color: #2a7f62;
        /* Vert médecine */
        --specialites-color-light: rgba(42, 127, 98, 0.1);
        --specialites-color-dark: #1e6b4e;
    }

    .specialites-section-header {
        margin: 0 auto;
        max-width: 800px;
    }

    .section-title {
        font-size: 1.8rem;
        color: var(--specialites-color-dark);
        margin-bottom: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .section-divider {
        margin: 15px auto 20px;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .divider-line {
        width: 80px;
        height: 3px;
        background: var(--specialites-color);
        border-radius: 3px;
    }

    .section-description {
        color: #555;
        font-size: 1.05rem;
        line-height: 1.6;
    }

    /* Ajustements responsive */
    @media (max-width: 768px) {
        .section-title {
            font-size: 1.5rem;
        }

        .section-description {
            font-size: 0.95rem;
            padding: 0 15px;
        }
    }


    /* Cartes spécialités */
    .specialites-service-card {
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
        background: white;
    }

    .specialites-service-image-wrapper {
        height: 250px;
        overflow: hidden;
        position: relative;
    }

    .specialites-service-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .specialites-service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .specialites-service-card:hover img {
        transform: scale(1.1);
    }

    .specialites-service-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(42, 127, 98, 0.8);
        opacity: 0;
        transition: opacity 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .specialites-service-card:hover .specialites-service-overlay {
        opacity: 1;
    }

    .specialites-service-overlay-content a {
        color: white;
        font-weight: 600;
        padding: 10px 25px;
        border: 2px solid white;
        border-radius: 50px;
        transition: all 0.3s;
    }

    .specialites-service-overlay-content a:hover {
        background: white;
        color: var(--specialites-color);
        text-decoration: none;
    }

    .specialites-service-text {
        padding: 25px;
        background: white;
    }

    .specialites-service-text h3 {
        color: var(--specialites-color);
        margin-bottom: 15px;
        font-size: 1.5rem;
    }

    .specialites-service-text p {
        color: #555;
        margin-bottom: 20px;
        min-height: 60px;
    }

    .specialites-service-meta {
        display: flex;
        justify-content: space-between;
        color: #777;
        font-size: 0.9rem;
        border-top: 1px solid #eee;
        padding-top: 15px;
    }

    .specialites-service-meta i {
        color: var(--specialites-color);
        margin-right: 5px;
    }

    /* Section À propos */
    .specialites-about-section {
        padding: 100px 0;
        background: #f9f9f9;
        position: relative;
    }

    .specialites-about-image {
        position: relative;
        height: 100%;
    }

    .specialites-about-image img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .specialites-about-badge {
        position: absolute;
        bottom: -30px;
        right: -30px;
        background: var(--specialites-color);
        color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .specialites-about-badge span {
        font-size: 2.5rem;
        font-weight: 700;
        display: block;
        line-height: 1;
    }

    .specialites-about-badge p {
        margin: 0;
        font-size: 0.9rem;
    }

    .specialites-about-content {
        padding-left: 50px;
    }

    .specialites-about-title {
        color: var(--specialites-color);
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .specialites-about-content p {
        color: #555;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .specialites-about-list {
        list-style-type: none;
        padding-left: 0;
        margin-bottom: 30px;
    }

    .specialites-about-list li {
        position: relative;
        padding-left: 35px;
        margin-bottom: 15px;
        color: #444;
        font-size: 1.05rem;
    }

    .specialites-about-list li:before {
        content: "✓";
        color: var(--specialites-color);
        position: absolute;
        left: 0;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .specialites-about-list li strong {
        color: var(--specialites-color-dark);
    }

    .specialites-about-cta .btn {
        margin-right: 15px;
        margin-bottom: 15px;
        padding: 12px 25px;
        font-weight: 600;
        border-radius: 50px;
    }

    /* Cartes approches thérapeutiques */
    .specialites-equipment-card {
        text-align: center;
        margin-bottom: 30px;
        padding: 30px 25px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
        height: 100%;
        position: relative;
        border: 1px solid #eee;
    }

    .specialites-equipment-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        border-color: var(--specialites-color-light);
    }

    .specialites-equipment-icon {
        width: 80px;
        height: 80px;
        background: var(--specialites-color-light);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        color: var(--specialites-color);
        font-size: 2rem;
    }

    .specialites-equipment-card h3 {
        color: var(--specialites-color);
        font-size: 1.4rem;
        margin-bottom: 15px;
    }

    .specialites-equipment-card p {
        color: #666;
        margin-bottom: 25px;
        font-size: 1rem;
        line-height: 1.7;
    }

    .specialites-equipment-link {
        color: var(--specialites-color);
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s;
    }

    .specialites-equipment-link:hover {
        color: var(--specialites-color-dark);
    }

    /* Section FAQ */
    .specialites-faq-section {
        background: #f9f9f9;
    }

    .specialites-accordion {
        margin-bottom: 15px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .specialites-accordion-button {
        background: white;
        color: #333;
        cursor: pointer;
        padding: 20px 25px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: all 0.3s;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .specialites-accordion-button:hover {
        background: #f5f5f5;
    }

    .specialites-accordion-button.active {
        background: var(--specialites-color);
        color: white;
    }

    .specialites-accordion-button i {
        transition: transform 0.3s;
    }

    .specialites-accordion-button.active i {
        transform: rotate(180deg);
    }

    .specialites-accordion-content {
        padding: 0 25px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .specialites-accordion-content p,
    .specialites-accordion-content ul {
        padding-bottom: 20px;
    }

    .specialites-accordion-content ul {
        padding-left: 20px;
    }

    .specialites-accordion-content li {
        margin-bottom: 8px;
    }

    /* Section CTA */
    .specialites-cta-section {
        padding: 100px 0;
        position: relative;
    }

    .specialites-cta-overlay {
        background: rgba(42, 127, 98, 0.9);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .specialites-cta-content {
        position: relative;
        z-index: 1;
        color: white;
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .specialites-cta-content h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .specialites-cta-content p {
        font-size: 1.2rem;
        opacity: 0.9;
    }

    .specialites-cta-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .specialites-cta-buttons .btn {
        margin: 0 10px 15px;
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s;
    }

    .specialites-cta-buttons .btn-light {
        background: white;
        color: var(--specialites-color);
    }

    .specialites-cta-buttons .btn-light:hover {
        background: #f5f5f5;
    }

    .specialites-cta-buttons .btn-outline-light {
        border: 2px solid white;
        background: transparent;
    }

    .specialites-cta-buttons .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .specialites-header-content h1 {
            font-size: 3rem;
        }

        .specialites-about-image img {
            height: 400px;
        }
    }

    @media (max-width: 992px) {
        .specialites-header-section {
            padding: 120px 0;
        }

        .specialites-about-content {
            padding-left: 0;
            padding-top: 50px;
        }

        .specialites-about-badge {
            right: 0;
        }
    }

    @media (max-width: 768px) {
        .specialites-header-section {
            padding: 100px 0;
        }

        .specialites-header-content h1 {
            font-size: 2.5rem;
        }

        .specialites-service-image-wrapper,
        .specialites-about-image img {
            height: 200px;
        }

        .specialites-about-badge {
            bottom: -20px;
            right: 0;
            padding: 15px;
        }

        .specialites-about-badge span {
            font-size: 2rem;
        }

        .specialites-cta-content h2 {
            font-size: 2rem;
        }
    }

    @media (max-width: 576px) {
        .specialites-header-content h1 {
            font-size: 2rem;
        }

        .specialites-about-badge {
            position: static;
            margin-top: 20px;
            display: inline-block;
        }

        .specialites-cta-content h2 {
            font-size: 1.8rem;
        }

        .specialites-cta-buttons .btn {
            width: 100%;
            margin: 0 0 15px;
        }
    }
</style>

<script>
    // Accordéon FAQ
    document.addEventListener('DOMContentLoaded', function() {
        const accordionButtons = document.querySelectorAll('.specialites-accordion-button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Toggle active class on button
                this.classList.toggle('active');

                // Toggle icon rotation
                const icon = this.querySelector('i');
                icon.style.transform = icon.style.transform === 'rotate(180deg)' ? 'rotate(0deg)' : 'rotate(180deg)';

                // Toggle content
                const content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });

        // Open first accordion by default
        if (accordionButtons.length > 0) {
            accordionButtons[0].click();
        }
    });
</script>

@endsection