@extends('layout')

@section('title')
    Soins Infirmiers
@endsection

@section('page')

<!-- Titre Section -->
 @include('partials.pages-header', [
    'title' => 'Soins infirmiers',
    'subtitle' => 'Infirmerie',
 ])

<!-- Section soins infirmiers -->
<div class="nursing-service-wrapper section-padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="nursing-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">NOS SERVICES DE SOINS INFIRMIERS</h1>
                    <img src="{{ asset('images/line.png') }}" alt="ligne" class="med_bottompadder20">
                    {{-- <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20"> --}}
                    <p>
                        Des soins personnalisés dispensés par une équipe d'infirmiers diplômés et expérimentés.
                    </p>
                </div>
            </div>

            <!-- Types de soins -->
            <div class="col-xl-12">
                <div class="row">
                    <!-- Soin 1 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="nursing-service-card">
                            <div class="nursing-service-icon">
                                <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Pansements" class="img-responsive">
                            </div>
                            <div class="nursing-service-content">
                                <h3>Pansements complexes</h3>
                                <p>Soins de plaies, ulcères, brûlures selon les protocoles les plus récents.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Soin 2 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="nursing-service-card">
                            <div class="nursing-service-icon">
                                <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Injections" class="img-responsive">
                            </div>
                            <div class="nursing-service-content">
                                <h3>Injections & perfusions</h3>
                                <p>Administration de traitements par voie intraveineuse, intramusculaire ou sous-cutanée.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Soin 3 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="nursing-service-card">
                            <div class="nursing-service-icon">
                                <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Prélèvements" class="img-responsive">
                            </div>
                            <div class="nursing-service-content">
                                <h3>Prélèvements sanguins</h3>
                                <p>Techniques adaptées pour tous les âges dans le respect des protocoles d'hygiène.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Soin 4 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="nursing-service-card">
                            <div class="nursing-service-icon">
                                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Surveillance" class="img-responsive">
                            </div>
                            <div class="nursing-service-content">
                                <h3>Surveillance clinique</h3>
                                <p>Contrôle des constantes, évaluation de la douleur et suivi thérapeutique.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos des soins -->
<div class="nursing-about-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="nursing-about-image">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Infirmière en consultation" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="nursing-about-content">
                    <h3 class="nursing-about-title">Une équipe infirmière dévouée</h3>
                    <p class="padding-top-20">
                        Nos infirmiers et infirmières diplômés d'État assurent des soins techniques et relationnels
                        de haute qualité. Formés aux dernières techniques, ils accompagnent chaque patient avec
                        professionnalisme et humanité.
                    </p>
                    <ul class="nursing-about-list">
                        <li>Écoute active et conseils personnalisés</li>
                        <li>Respect strict des protocoles d'asepsie</li>
                        <li>Coordination avec l'équipe médicale</li>
                        <li>Éducation thérapeutique pour l'autonomie du patient</li>
                    </ul>
                    <div class="padding-top-30">
                        <a href="{{ url('appointment') }}" class="nursing-primary-btn">Prendre rendez-vous <i class="fa fa-calendar"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section soins à domicile -->
<div class="section-padding-top-100 section-padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="nursing-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">SOINS INFIRMIERS À DOMICILE</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="nursing-home-care-card">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Infirmière à domicile" class="img-responsive">
                    <div class="nursing-home-care-content">
                        <h3>Services proposés à domicile</h3>
                        <ul class="nursing-home-care-list">
                            <li>Pansements et soins de plaies</li>
                            <li>Injections et perfusions</li>
                            <li>Surveillance post-opératoire</li>
                            <li>Prélèvements biologiques</li>
                            <li>Aide à la prise des médicaments</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="nursing-home-care-card">
                    <img src="https://images.unsplash.com/photo-1581595219315-a187dd40c322?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Coordination des soins" class="img-responsive">
                    <div class="nursing-home-care-content">
                        <h3>Organisation des visites</h3>
                        <p>Nos infirmiers interviennent sur prescription médicale selon un planning adapté à vos besoins :</p>
                        <ul class="nursing-home-care-list">
                            <li>Prise de rendez-vous par téléphone</li>
                            <li>Créneaux horaires matin et après-midi</li>
                            <li>Urgences sur appel</li>
                            <li>Transmission au médecin traitant</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section formation/info -->
<div class="section-padding-top-80 section-padding-bottom-80 nursing-info-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="nursing-section-header padding-bottom-40">
                    <h1 class="padding-bottom-20">INFORMATIONS UTILES</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="padding-bottom-20">
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="nursing-info-card">
                    <div class="nursing-info-icon">
                        <i class="fa fa-file-text-o"></i>
                    </div>
                    <h3>Prescription requise</h3>
                    <p>La plupart des soins infirmiers nécessitent une ordonnance médicale pour être réalisés.</p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="nursing-info-card">
                    <div class="nursing-info-icon">
                        <i class="fa fa-euro"></i>
                    </div>
                    <h3>Tarifs & remboursements</h3>
                    <p>Soins pris en charge par la Sécurité Sociale et mutuelles selon les conditions habituelles.</p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="nursing-info-card">
                    <div class="nursing-info-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>Contactez-nous</h3>
                    <p>Service infirmier disponible du lundi au samedi de 7h à 20h.</p>
                    <a href="tel:+22676730818" class="nursing-secondary-btn">Appeler</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection