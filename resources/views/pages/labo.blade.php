@extends('layout')

@section('page')

<!-- En-tête -->
<div class="labo-header-section">
    <div class="labo-header-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="labo-header-content">
                    <h1>Laboratoire d'Analyses</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Accueil</a></li>
                        <li class="active">Laboratoire</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section principale -->
<div class="labo-main-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-header text-center">
                    <h2>Laboratoire d'Analyses Médicales</h2>
                    <div class="divider-line"></div>
                    <p>Des analyses biologiques précises et rapides pour un diagnostic fiable</p>
                </div>
            </div>
        </div>

        <!-- Types d'analyses -->
        <div class="row labo-services">
            <!-- Biologie Clinique -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/bioclinique.jpg') }}" alt="Biologie Clinique">
                        <div class="service-overlay">
                            <a href="/laboratoire/biologie" class="btn btn-overlay">En savoir plus</a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Biologie Clinique</h3>
                        <p>Analyses sanguines, urinaires et biochimiques complètes.</p>
                        <div class="service-meta">
                            <span><i class="fas fa-vial"></i> 50+ paramètres</span>
                            <span><i class="fas fa-clock"></i> 24h max</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Microbiologie -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/microbiologie.jpg') }}" alt="Microbiologie">
                        <div class="service-overlay">
                            <a href="/laboratoire/microbiologie" class="btn btn-overlay">En savoir plus</a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Microbiologie</h3>
                        <p>Examens bactériologiques, parasitologiques et virologiques.</p>
                        <div class="service-meta">
                            <span><i class="fas fa-microscope"></i> Cultures</span>
                            <span><i class="fas fa-clock"></i> 2-5 jours</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hématologie -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/hematologie.jpg') }}" alt="Hématologie">
                        <div class="service-overlay">
                            <a href="/laboratoire/hematologie" class="btn btn-overlay">En savoir plus</a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Hématologie</h3>
                        <p>Étude des cellules sanguines et des troubles de la coagulation.</p>
                        <div class="service-meta">
                            <span><i class="fas fa-tint"></i> NFS</span>
                            <span><i class="fas fa-clock"></i> 1h</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sérologie -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/serologie.jpg') }}" alt="Sérologie">
                        <div class="service-overlay">
                            <a href="/laboratoire/serologie" class="btn btn-overlay">En savoir plus</a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Sérologie</h3>
                        <p>Détection des anticorps pour le diagnostic des maladies infectieuses.</p>
                        <div class="service-meta">
                            <span><i class="fas fa-shield-virus"></i> Tests</span>
                            <span><i class="fas fa-clock"></i> 24-48h</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hormonologie -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/hormonologie.jpg') }}" alt="Hormonologie">
                        <div class="service-overlay">
                            <a href="/laboratoire/hormonologie" class="btn btn-overlay">En savoir plus</a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Hormonologie</h3>
                        <p>Dosages hormonaux pour explorer les fonctions endocriniennes.</p>
                        <div class="service-meta">
                            <span><i class="fas fa-chart-line"></i> Dosages</span>
                            <span><i class="fas fa-clock"></i> 48h</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Biologie Moléculaire -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/bmoleculaire.jpg') }}" alt="Biologie Moléculaire">
                        <div class="service-overlay">
                            <a href="/laboratoire/biologie-moleculaire" class="btn btn-overlay">En savoir plus</a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Biologie Moléculaire</h3>
                        <p>Analyses génétiques et tests spécialisés (PCR, séquençage...).</p>
                        <div class="service-meta">
                            <span><i class="fas fa-dna"></i> Tests ADN</span>
                            <span><i class="fas fa-clock"></i> 3-7 jours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section À propos -->
<div class="labo-about-section section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="about-image">
                    <img src="{{ asset('images/bmoleculaire.jpg') }}" alt="Laboratoire">
                    <div class="about-badge">
                        <span>98%</span>
                        <p>Fiabilité analytique</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="about-content">
                    <h2>Excellence et fiabilité analytique</h2>
                    <p>Notre laboratoire dispose d'une technologie de pointe et suit des procédures qualité strictes pour garantir des résultats précis et rapides.</p>
                    <ul class="about-features">
                        <li><i class="fas fa-check"></i> Accréditation COFRAC selon la norme ISO 15189</li>
                        <li><i class="fas fa-check"></i> Automates haut de gamme pour des résultats précis</li>
                        <li><i class="fas fa-check"></i> Délais d'exécution optimisés</li>
                        <li><i class="fas fa-check"></i> Résultats disponibles en ligne sécurisé</li>
                        <li><i class="fas fa-check"></i> Interprétation par nos biologistes médicaux</li>
                    </ul>
                    <div class="about-cta">
                        <a href="{{url('appointment')}}" class="btn btn-primary">Prendre rendez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Informations pratiques -->
<div class="labo-info-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-header text-center">
                    <h2>Informations Pratiques</h2>
                    <div class="divider-line"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Horaires</h3>
                    <div class="info-content">
                        <p><strong>Lundi au Vendredi</strong><br>7h00 - 19h00</p>
                        <p><strong>Samedi</strong><br>8h00 - 12h00</p>
                        <p><strong>Urgences</strong><br>24h/24 sur appel</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-vial"></i>
                    </div>
                    <h3>Prélèvements</h3>
                    <div class="info-content">
                        <ul>
                            <li>Sang : à jeun pour certains examens</li>
                            <li>Urines : premier jet ou recueil 24h</li>
                            <li>Prélèvements spécifiques sur demande</li>
                            <li>Domicile possible (sur prescription)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-file-medical-alt"></i>
                    </div>
                    <h3>Résultats</h3>
                    <div class="info-content">
                        <ul>
                            <li>Délais variables selon les analyses</li>
                            <li>Consultation sécurisée en ligne</li>
                            <li>Transmission automatique au médecin</li>
                            <li>Interprétation par nos biologistes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Variables */
:root {
    --labo-primary: #008080;
    --labo-primary-dark: #006666;
    --labo-primary-light: rgba(0, 128, 128, 0.1);
    --labo-secondary: #4CAF50;
    --labo-text: #333;
    --labo-text-light: #666;
    --labo-bg-light: #f9f9f9;
    --labo-border: #e0e0e0;
    --labo-white: #ffffff;
    --labo-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Base Styles */
.labo-header-section {
    background: url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
    padding: 100px 0;
    position: relative;
    color: white;
    text-align: center;
}

.labo-header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 80, 80, 0.8);
}

.labo-header-content {
    position: relative;
    z-index: 1;
}

.labo-header-content h1 {
    font-size: 2.5rem;
    margin-bottom: 15px;
    font-weight: 700;
}

.breadcrumb {
    background: transparent;
    padding: 0;
    justify-content: center;
    margin-bottom: 0;
}

.breadcrumb li a {
    color: rgba(255, 255, 255, 0.8);
}

.breadcrumb li.active {
    color: rgba(255, 255, 255, 0.6);
}

.breadcrumb li + li:before {
    color: rgba(255, 255, 255, 0.6);
}

/* Section Styles */
.section-padding {
    padding: 80px 0;
}

.bg-light {
    background-color: var(--labo-bg-light);
}

.section-header {
    margin-bottom: 50px;
}

.section-header h2 {
    font-size: 2rem;
    color: var(--labo-primary-dark);
    margin-bottom: 15px;
    font-weight: 600;
}

.divider-line {
    width: 80px;
    height: 3px;
    background: var(--labo-primary);
    margin: 15px auto 20px;
}

.section-header p {
    color: var(--labo-text-light);
    max-width: 700px;
    margin: 0 auto;
}

/* Service Cards */
.labo-services {
    margin-top: 30px;
}

.service-card {
    background: var(--labo-white);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: var(--labo-shadow);
    margin-bottom: 30px;
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
}

.service-image {
    height: 200px;
    overflow: hidden;
    position: relative;
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.service-card:hover .service-image img {
    transform: scale(1.1);
}

.service-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 128, 128, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.service-card:hover .service-overlay {
    opacity: 1;
}

.btn-overlay {
    color: white;
    border: 2px solid white;
    padding: 8px 20px;
    border-radius: 50px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-overlay:hover {
    background: white;
    color: var(--labo-primary);
}

.service-content {
    padding: 20px;
}

.service-content h3 {
    color: var(--labo-primary);
    font-size: 1.3rem;
    margin-bottom: 10px;
    font-weight: 600;
}

.service-content p {
    color: var(--labo-text-light);
    margin-bottom: 15px;
    font-size: 0.95rem;
}

.service-meta {
    display: flex;
    justify-content: space-between;
    border-top: 1px solid var(--labo-border);
    padding-top: 15px;
    color: var(--labo-text-light);
    font-size: 0.85rem;
}

.service-meta i {
    color: var(--labo-primary);
    margin-right: 5px;
}

/* About Section */
.about-image {
    position: relative;
    height: 100%;
}

.about-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: var(--labo-shadow);
}

.about-badge {
    position: absolute;
    bottom: -20px;
    right: -20px;
    background: var(--labo-primary);
    color: white;
    padding: 15px 20px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.about-badge span {
    font-size: 2rem;
    font-weight: 700;
    display: block;
    line-height: 1;
}

.about-badge p {
    margin: 0;
    font-size: 0.9rem;
}

.about-content {
    padding-left: 30px;
}

.about-content h2 {
    color: var(--labo-primary-dark);
    font-size: 1.8rem;
    margin-bottom: 20px;
    font-weight: 600;
}

.about-content p {
    color: var(--labo-text);
    margin-bottom: 25px;
    line-height: 1.7;
}

.about-features {
    list-style: none;
    padding-left: 0;
    margin-bottom: 30px;
}

.about-features li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 12px;
    color: var(--labo-text);
}

.about-features i {
    color: var(--labo-primary);
    position: absolute;
    left: 0;
}

.about-cta .btn {
    margin-right: 15px;
    margin-bottom: 15px;
}

/* Info Cards */
.info-card {
    text-align: center;
    padding: 30px 25px;
    background: var(--labo-white);
    border-radius: 8px;
    box-shadow: var(--labo-shadow);
    margin-bottom: 30px;
    height: 100%;
    transition: transform 0.3s ease;
}

.info-card:hover {
    transform: translateY(-5px);
}

.info-icon {
    width: 70px;
    height: 70px;
    background: var(--labo-primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: var(--labo-primary);
    font-size: 1.8rem;
}

.info-card h3 {
    color: var(--labo-primary);
    font-size: 1.3rem;
    margin-bottom: 15px;
    font-weight: 600;
}

.info-content {
    color: var(--labo-text);
    text-align: left;
    font-size: 0.95rem;
    line-height: 1.7;
}

.info-content p {
    margin-bottom: 15px;
}

.info-content ul {
    padding-left: 20px;
}

.info-content li {
    margin-bottom: 8px;
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 10px 25px;
    border-radius: 50px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary {
    background: var(--labo-primary);
    color: white;
    border: 2px solid var(--labo-primary);
}

.btn-primary:hover {
    background: var(--labo-primary-dark);
    border-color: var(--labo-primary-dark);
    color: white;
}

.btn-outline {
    background: transparent;
    color: var(--labo-primary);
    border: 2px solid var(--labo-primary);
}

.btn-outline:hover {
    background: var(--labo-primary);
    color: white;
}

/* Responsive */
@media (max-width: 992px) {
    .section-padding {
        padding: 60px 0;
    }
    
    .about-content {
        padding-left: 0;
        padding-top: 50px;
    }
    
    .about-badge {
        right: 0;
    }
}

@media (max-width: 768px) {
    .labo-header-section {
        padding: 80px 0;
    }
    
    .labo-header-content h1 {
        font-size: 2rem;
    }
    
    .section-header h2 {
        font-size: 1.6rem;
    }
    
    .about-image img {
        height: 350px;
    }
}

@media (max-width: 576px) {
    .labo-header-section {
        padding: 60px 0;
    }
    
    .about-badge {
        position: static;
        margin: 20px auto 0;
        display: inline-block;
    }
    
    .about-cta .btn {
        display: block;
        width: 100%;
        margin-right: 0;
        margin-bottom: 15px;
    }
}
</style>
@endsection