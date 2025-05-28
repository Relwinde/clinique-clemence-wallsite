@extends('layout')

@section('page')

<!-- Titre Section -->
<div class="med_tittle_section">
    <div class="med_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="med_tittle_cont_wrapper">
                    <div class="med_tittle_cont">
                        <h1>Urgences Médicales</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Accueil</a></li>
                            <li>Urgences</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bandeau alerte urgences -->
<div class="urgence-alert-banner">
    <div class="container">
        <div class="urgence-alert-content">
            <i class="fa fa-exclamation-triangle"></i>
            <div>
                <h3>En cas d'urgence vitale</h3>
                <p>Composez immédiatement le <strong>15 (SAMU)</strong> ou le <strong>112 (numéro d'urgence européen)</strong></p>
            </div>
        </div>
    </div>
</div>

<!-- Section services d'urgence -->
<div class="team_wrapper med_toppadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">NOTRE SERVICE D'URGENCES</h1>
                    <img src="{{ asset('images/line.png') }}" alt="ligne" class="med_bottompadder20">
                    <p class="med_toppadder20">Une équipe médicale disponible 24h/24 pour prendre en charge toutes les urgences médicales et traumatiques.</p>
                </div>
            </div>

            <!-- Service 1 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="med_team_wrapper urgence-service-card">
                    <div class="med_team_img urgence-service-img">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="Urgences adultes" class="img-responsive">
                    </div>
                    <div class="med_team_txt urgence-service-text">
                        <h3>Urgences Adultes</h3>
                        <p>Prise en charge des urgences médicales et chirurgicales pour les patients de plus de 15 ans.</p>
                        <div class="urgence-service-hours">
                            <i class="fa fa-clock-o"></i> 24h/24 - 7j/7
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="med_team_wrapper urgence-service-card">
                    <div class="med_team_img urgence-service-img">
                        <img src="https://images.unsplash.com/photo-1581595219315-a187dd40c322?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="Urgences pédiatriques" class="img-responsive">
                    </div>
                    <div class="med_team_txt urgence-service-text">
                        <h3>Urgences Pédiatriques</h3>
                        <p>Service dédié aux enfants de 0 à 15 ans avec une équipe spécialisée.</p>
                        <div class="urgence-service-hours">
                            <i class="fa fa-clock-o"></i> 24h/24 - 7j/7
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="med_team_wrapper urgence-service-card">
                    <div class="med_team_img urgence-service-img">
                        <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="Urgences traumatiques" class="img-responsive">
                    </div>
                    <div class="med_team_txt urgence-service-text">
                        <h3>Urgences Traumatiques</h3>
                        <p>Prise en charge des fractures, luxations et traumatismes divers.</p>
                        <div class="urgence-service-hours">
                            <i class="fa fa-clock-o"></i> 24h/24 - 7j/7
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section procédure urgences -->
<div class="med_toppadder80 med_bottompadder80 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">PROCÉDURE AUX URGENCES</h1>
                    <img src="{{ asset('images/line.png') }}" alt="ligne" class="med_bottompadder20">
                </div>
            </div>

            <div class="col-xl-12">
                <div class="urgence-process-steps">
                    <!-- Étape 1 -->
                    <div class="urgence-process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>Accueil et triage</h4>
                            <p>Évaluation immédiate par une infirmière pour déterminer le degré d'urgence</p>
                        </div>
                    </div>

                    <!-- Étape 2 -->
                    <div class="urgence-process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>Enregistrement</h4>
                            <p>Formalités administratives (carte vitale et pièce d'identité requises)</p>
                        </div>
                    </div>

                    <!-- Étape 3 -->
                    <div class="urgence-process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>Prise en charge médicale</h4>
                            <p>Examen par un médecin urgentiste et réalisation des examens nécessaires</p>
                        </div>
                    </div>

                    <!-- Étape 4 -->
                    <div class="urgence-process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4>Orientation</h4>
                            <p>Retour à domicile avec traitement ou hospitalisation si nécessaire</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section infos pratiques -->
<div class="med_toppadder80 med_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="urgence-info-box">
                    <h3><i class="fa fa-info-circle"></i> Informations importantes</h3>
                    <ul>
                        <li>Le temps d'attente varie selon la gravité des cas</li>
                        <li>Prévoyez vos documents médicaux si possible</li>
                        <li>Un accompagnant est autorisé pour les enfants et personnes vulnérables</li>
                        <li>Merci de respecter le personnel soignant</li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="urgence-info-box">
                    <h3><i class="fa fa-map-marker"></i> Accès au service</h3>
                    <p>Le service des urgences est accessible directement par l'entrée principale ou via l'entrée urgences signalée.</p>
                    <div class="urgence-map-container">
                        <div class="urgence-map-placeholder">
                            <i class="fa fa-map-o"></i>
                            <p>Plan d'accès aux urgences</p>
                        </div>
                        <a href="#" class="med_btn">Voir le plan détaillé</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section quand consulter -->
<div class="med_toppadder80 med_bottompadder80 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">QUAND CONSULTER AUX URGENCES ?</h1>
                    <img src="{{ asset('images/line.png') }}" alt="ligne" class="med_bottompadder20">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="urgence-consult-box emergency">
                    <h3><i class="fa fa-exclamation-triangle"></i> Urgences vitales (SAMU 15)</h3>
                    <ul>
                        <li>Douleur thoracique</li>
                        <li>Difficultés respiratoires</li>
                        <li>Hémorragie importante</li>
                        <li>Perte de connaissance</li>
                        <li>Traumatisme crânien avec troubles</li>
                        <li>Brûlures étendues</li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="urgence-consult-box consultation">
                    <h3><i class="fa fa-stethoscope"></i> Urgences non vitales</h3>
                    <ul>
                        <li>Fièvre persistante</li>
                        <li>Douleurs modérées</li>
                        <li>Plaies superficielles</li>
                        <li>Entorses sans déformation</li>
                        <li>Prescriptions non urgentes</li>
                        <li>Certificats médicaux</li>
                    </ul>
                    <p class="note">Pour ces cas, privilégiez votre médecin traitant ou une maison médicale de garde.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles spécifiques à la page Urgences -->


@endsection