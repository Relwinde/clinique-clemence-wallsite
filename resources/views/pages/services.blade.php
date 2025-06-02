@extends('layout')

@section('page')
<!-- Hero Section -->
<section class="medical-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1>Nos Services Médicaux</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Consultation Section -->
<section class="consultation-section">
    <div class="container">
        <div class="section-header">
            <h2>CONSULTATIONS MÉDICALES</h2>
            <div class="divider"></div>
            <p>Des consultations spécialisées adaptées à vos besoins de santé</p>
        </div>

        <div class="consultation-types">
            <div class="consultation-card">
                <div class="consultation-icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3>Consultations Générales</h3>
                <ul>
                    <li>Médecine générale</li>
                    <li>Bilans de santé</li>
                    <li>Vaccinations</li>
                    <li>Médecine préventive</li>
                </ul>
                <a href="#" class="btn-consultation">Prendre RDV</a>
            </div>

            <div class="consultation-card">
                <div class="consultation-icon">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <h3>Consultations Spécialisées</h3>
                <ul>
                    <li>Cardiologie</li>
                    <li>Dermatologie</li>
                    <li>Gynécologie</li>
                    <li>Pédiatrie</li>
                    <li>Et plus de 20 spécialités</li>
                </ul>
                <a href="#" class="btn-consultation">Voir les spécialités</a>
            </div>

            <div class="consultation-card">
                <div class="consultation-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3>Consultations en Ligne</h3>
                <ul>
                    <li>Téléconsultation</li>
                    <li>Second avis médical</li>
                    <li>Suivi à distance</li>
                    <li>Résultats d'analyses</li>
                </ul>
                <a href="#" class="btn-consultation">Accéder à la plateforme</a>
            </div>
        </div>
    </div>
</section>

<!-- Care Process Section -->
<section class="care-process bg-light">
    <div class="container">
        <div class="section-header">
            <h2>PRISE EN SOINS COMPLÈTE</h2>
            <div class="divider"></div>
            <p>Un parcours de soins personnalisé pour chaque patient</p>
        </div>

        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <h3>Accueil et Orientation</h3>
                <p>Notre équipe vous accueille et vous oriente vers le service adapté à votre besoin.</p>
            </div>

            <div class="process-step">
                <div class="step-number">2</div>
                <h3>Diagnostic Précis</h3>
                <p>Examens et analyses avec des équipements de pointe pour un diagnostic fiable.</p>
            </div>

            <div class="process-step">
                <div class="step-number">3</div>
                <h3>Traitement Adapté</h3>
                <p>Mise en place d'un protocole de soins personnalisé par nos spécialistes.</p>
            </div>

            <div class="process-step">
                <div class="step-number">4</div>
                <h3>Suivi Médical</h3>
                <p>Accompagnement et suivi post-traitement pour une guérison complète.</p>
            </div>
        </div>
    </div>
</section>

<!-- Hospitalization Section -->
<section class="hospitalization-section">
    <div class="container">
        <div class="section-header">
            <h2>HOSPITALISATIONS</h2>
            <div class="divider"></div>
            <p>Des services d'hospitalisation adaptés à chaque situation</p>
        </div>

        <div class="hospitalization-options">
            <div class="option-card">
                <div class="option-image">
                    <img src="{{asset('images/HOSPITALISATION.jpg')}}">
                </div>
                <div class="option-content">
                    <h3>Hospitalisation Complète</h3>
                    <ul>
                        <li>Chambres individuelles</li>
                        <li>Soins 24h/24</li>
                        <li>Bloc opératoire</li>
                        <li>Unité de soins intensifs</li>
                    </ul>
                </div>
            </div>

            <div class="option-card">
                <div class="option-image">
                    <img src="{{asset('images/hospitalisation1.jpg')}}">
                </div>
                <div class="option-content">
                    <h3>Hospitalisation de Jour</h3>
                    <ul>
                        <li>Interventions programmées</li>
                        <li>Sortie le même jour</li>
                        <li>Chirurgie ambulatoire</li>
                        <li>Suivi post-opératoire</li>
                    </ul>
                </div>
            </div>

            <div class="option-card">
                <div class="option-image">
                    <img src="{{asset('images/hospitalisation2.jpg')}}">
                </div>
                <div class="option-content">
                    <h3>Service d'Urgences</h3>
                    <ul>
                        <li>Ouvert 24h/24 7j/7</li>
                        <li>Équipe pluridisciplinaire</li>
                        <li>Unité de traumatologie</li>
                        <li>Réanimation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Medical Specialties Section -->
<section class="specialties-section bg-light">
    <div class="container">
        <div class="section-header">
            <h2>NOS SPÉCIALITÉS MÉDICALES</h2>
            <div class="divider"></div>
            <p>Plus de 30 spécialités médicales représentées par des experts</p>
        </div>

        <div class="specialties-grid">
            <div class="specialty-card">
                <div class="specialty-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3>Cardiologie</h3>
                <p>Prise en charge des maladies cardiovasculaires et hypertension artérielle.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon">
                    <i class="fas fa-lungs"></i>
                </div>
                <h3>Pneumologie</h3>
                <p>Diagnostic et traitement des pathologies respiratoires.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Neurologie</h3>
                <p>Prise en charge des maladies du système nerveux.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon">
                    <i class="fas fa-bone"></i>
                </div>
                <h3>Rhumatologie</h3>
                <p>Traitement des affections de l'appareil locomoteur.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Ophtalmologie</h3>
                <p>Soins des troubles de la vision et chirurgie oculaire.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon">
                    <i class="fas fa-tooth"></i>
                </div>
                <h3>Dentisterie</h3>
                <p>Soins dentaires, orthodontie et implantologie.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon">
                    <i class="fas fa-allergies"></i>
                </div>
                <h3>Allergologie</h3>
                <p>Diagnostic et traitement des allergies.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon">
                    <i class="fas fa-dna"></i>
                </div>
                <h3>Génétique</h3>
                <p>Consultation et conseil en génétique médicale.</p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn-view-all">Voir toutes les spécialités <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="service-cta">
    <div class="container">
        <div class="cta-content">
            <h3>Votre santé mérite notre expertise</h3>
            <p>Prenez rendez-vous avec nos spécialistes pour une consultation personnalisée</p>
            <a href="#" class="cta-btn">Contactez-nous <i class="fas fa-phone-alt"></i></a>
        </div>
    </div>
</section>

<style>
/* Global Styles */
:root {
    --primary-color: #008888;
    --secondary-color: #e74c3c;
    --text-color: #333;
    --light-gray: #f8f9fa;
    --dark-gray: #555;
}

body {
    font-family: 'Roboto', 'Segoe UI', sans-serif;
    color: var(--text-color);
    line-height: 1.6;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.bg-light {
    background-color: var(--light-gray);
}

/* Hero Section */
.medical-hero {
    position: relative;
    height: 400px;
    background: url('https://images.unsplash.com/photo-1581595219315-a187dd40c322?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
    display: flex;
    align-items: center;
    text-align: center;
    color: white;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.hero-content {
    position: relative;
    z-index: 1;
    width: 100%;
}

.medical-hero h1 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.breadcrumb {
    justify-content: center;
    background: transparent;
    padding: 0;
}

.breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
}

.breadcrumb-item.active {
    color: white;
}

.breadcrumb-item+.breadcrumb-item::before {
    color: rgba(255, 255, 255, 0.5);
}

/* Section Header */
.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-header h2 {
    color: var(--primary-color);
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.divider {
    width: 80px;
    height: 3px;
    background: var(--primary-color);
    margin: 0 auto 20px;
}

.section-header p {
    color: var(--dark-gray);
    font-size: 1.1rem;
    max-width: 700px;
    margin: 0 auto;
}

/* Consultation Section */
.consultation-types {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.consultation-card {
    background: white;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
    text-align: center;
    border-top: 4px solid var(--primary-color);
}

.consultation-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 136, 136, 0.1);
}

.consultation-icon {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 20px;
}

.consultation-card h3 {
    color: var(--primary-color);
    margin-bottom: 20px;
    font-size: 1.3rem;
}

.consultation-card ul {
    text-align: left;
    margin-bottom: 25px;
    padding-left: 20px;
}

.consultation-card li {
    margin-bottom: 8px;
    position: relative;
}

.consultation-card li::before {
    content: "•";
    color: var(--primary-color);
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
}

.btn-consultation {
    display: inline-block;
    background: var(--primary-color);
    color: white;
    padding: 10px 25px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s ease;
}

.btn-consultation:hover {
    background: #006666;
}

/* Care Process Section */
.process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.process-step {
    background: white;
    border-radius: 10px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.step-number {
    width: 50px;
    height: 50px;
    background: var(--primary-color);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 20px;
}

.process-step h3 {
    color: var(--primary-color);
    margin-bottom: 15px;
    font-size: 1.2rem;
}

.process-step p {
    color: var(--dark-gray);
}

/* Hospitalization Section */
.hospitalization-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.option-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

.option-card:hover {
    transform: translateY(-10px);
}

.option-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.option-content {
    padding: 25px;
}

.option-content h3 {
    color: var(--primary-color);
    margin-bottom: 15px;
    font-size: 1.3rem;
}

.option-content ul {
    margin-bottom: 0;
    padding-left: 20px;
}

.option-content li {
    margin-bottom: 8px;
    position: relative;
}

.option-content li::before {
    content: "•";
    color: var(--primary-color);
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
}

/* Specialties Section */
.specialties-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.specialty-card {
    background: white;
    border-radius: 10px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

.specialty-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 136, 136, 0.1);
}

.specialty-icon {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 20px;
}

.specialty-card h3 {
    color: var(--primary-color);
    margin-bottom: 15px;
    font-size: 1.2rem;
}

.specialty-card p {
    color: var(--dark-gray);
    font-size: 0.9rem;
}

.btn-view-all {
    display: inline-flex;
    align-items: center;
    background: var(--primary-color);
    color: white;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: background 0.3s ease;
}

.btn-view-all i {
    margin-left: 8px;
    font-size: 0.8rem;
}

.btn-view-all:hover {
    background: #006666;
    color: white;
}

/* CTA Section */
.service-cta {
    padding: 60px 0;
    background: var(--primary-color);
    color: white;
    text-align: center;
}

.cta-content h3 {
    font-size: 2rem;
    margin-bottom: 15px;
}

.cta-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
}

.cta-btn {
    display: inline-flex;
    align-items: center;
    background: white;
    color: var(--primary-color);
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.cta-btn i {
    margin-left: 10px;
}

.cta-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    color: var(--primary-color);
}

/* Responsive */
@media (max-width: 992px) {
    .consultation-types {
        grid-template-columns: 1fr 1fr;
    }
    
    .hospitalization-options {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 768px) {
    .medical-hero h1 {
        font-size: 2.2rem;
    }
    
    .section-header h2 {
        font-size: 1.6rem;
    }
    
    .consultation-types,
    .hospitalization-options,
    .process-steps {
        grid-template-columns: 1fr;
    }
    
    .specialties-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 576px) {
    .specialties-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Simple animation for process steps
document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.process-step');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    steps.forEach(step => {
        step.style.opacity = 0;
        step.style.transform = 'translateY(20px)';
        step.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(step);
    });
});
</script>
@endsection