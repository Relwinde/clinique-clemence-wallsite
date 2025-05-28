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
                            <li><a href="">Accueil</a></li>
                            <li>Urgences</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bandeau alerte urgences -->
<div class="urg_alert_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="urg_alert_box">
                    <div class="urg_alert_icon">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <div class="urg_alert_content">
                        <h3>En cas d'urgence vitale</h3>
                        <p>Composez immédiatement le <strong>15 (SAMU)</strong> ou le <strong>112 (numéro d'urgence européen)</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section urgences -->
<div class="team_wrapper med_toppadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">NOTRE SERVICE D'URGENCES</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="med_bottompadder20">
                    <p>
                        Une équipe médicale disponible 24h/24 pour prendre en charge toutes les urgences médicales et traumatiques.
                    </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="urg_service_box">
                    <div class="urg_service_icon">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Urgences adultes" class="img-responsive">
                    </div>
                    <h3>Urgences Adultes</h3>
                    <p>Prise en charge des urgences médicales et chirurgicales pour les patients de plus de 15 ans.</p>
                    <div class="urg_service_hours">
                        <i class="fa fa-clock-o"></i> 24h/24 - 7j/7
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="urg_service_box">
                    <div class="urg_service_icon">
                        <img src="https://images.unsplash.com/photo-1581595219315-a187dd40c322?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Urgences pédiatriques" class="img-responsive">
                    </div>
                    <h3>Urgences Pédiatriques</h3>
                    <p>Service dédié aux enfants de 0 à 15 ans avec une équipe spécialisée.</p>
                    <div class="urg_service_hours">
                        <i class="fa fa-clock-o"></i> 24h/24 - 7j/7
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="urg_service_box">
                    <div class="urg_service_icon">
                        <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Urgences traumatiques" class="img-responsive">
                    </div>
                    <h3>Urgences Traumatiques</h3>
                    <p>Prise en charge des fractures, luxations et traumatismes divers.</p>
                    <div class="urg_service_hours">
                        <i class="fa fa-clock-o"></i> 24h/24 - 7j/7
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section procédure urgences -->
<div class="urg_procedure med_toppadder80 med_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">COMMENT SE DÉROULE VOTRE PASSAGE AUX URGENCES ?</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="med_bottompadder20">
                </div>
            </div>

            <div class="col-xl-12">
                <div class="urg_process_wrapper">
                    <div class="urg_process_box">
                        <div class="urg_process_step">1</div>
                        <h3>Accueil et triage</h3>
                        <p>Évaluation immédiate par une infirmière pour déterminer le degré d'urgence</p>
                    </div>

                    <div class="urg_process_box">
                        <div class="urg_process_step">2</div>
                        <h3>Enregistrement</h3>
                        <p>Formalités administratives (carte vitale et pièce d'identité requises)</p>
                    </div>

                    <div class="urg_process_box">
                        <div class="urg_process_step">3</div>
                        <h3>Prise en charge médicale</h3>
                        <p>Examen par un médecin urgentiste et réalisation des examens nécessaires</p>
                    </div>

                    <div class="urg_process_box">
                        <div class="urg_process_step">4</div>
                        <h3>Orientation</h3>
                        <p>Retour à domicile avec traitement ou hospitalisation si nécessaire</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section infos pratiques -->
<div class="med_toppadder80 med_bottompadder80 bg_light">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="urg_info_box">
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
                <div class="urg_info_box">
                    <h3><i class="fa fa-map-marker"></i> Accès au service</h3>
                    <p>Le service des urgences est accessible directement par l'entrée principale ou via l'entrée urgences signalée.</p>
                    <div class="urg_map_wrapper">
                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=48.8566,2.3522&zoom=15&size=600x300&maptype=roadmap&markers=color:red%7C48.8566,2.3522&key=YOUR_API_KEY" 
                             alt="Plan d'accès urgences" class="img-responsive">
                        <a href="#" class="med_btn_small">Voir le plan détaillé</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section quand consulter -->
<div class="med_toppadder80 med_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">QUAND CONSULTER AUX URGENCES ?</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="med_bottompadder20">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="urg_consult_box urg_emergency">
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
                <div class="urg_consult_box urg_consultation">
                    <h3><i class="fa fa-stethoscope"></i> Urgences non vitales</h3>
                    <ul>
                        <li>Fièvre persistante</li>
                        <li>Douleurs modérées</li>
                        <li>Plaies superficielles</li>
                        <li>Entorses sans déformation</li>
                        <li>Prescriptions non urgentes</li>
                        <li>Certificats médicaux</li>
                    </ul>
                    <p>Pour ces cas, privilégiez votre médecin traitant ou une maison médicale de garde.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour les urgences */
    .urg_alert_wrapper {
        background: #fff8e1;
        padding: 15px 0;
        border-bottom: 2px solid #ffc107;
    }
    
    .urg_alert_box {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .urg_alert_icon {
        font-size: 30px;
        color: #d32f2f;
        margin-right: 15px;
    }
    
    .urg_alert_content h3 {
        color: #d32f2f;
        margin-bottom: 5px;
    }
    
    .urg_service_box {
        background: white;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        text-align: center;
        height: 100%;
    }
    
    .urg_service_icon {
        height: 180px;
        overflow: hidden;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    
    .urg_service_icon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .urg_service_box h3 {
        color: #d32f2f;
        margin-bottom: 15px;
    }
    
    .urg_service_hours {
        color: #008888;
        font-weight: bold;
        margin-top: 15px;
    }
    
    .urg_process_wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    
    .urg_process_box {
        width: 23%;
        background: white;
        padding: 25px;
        border-radius: 5px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        text-align: center;
        position: relative;
    }
    
    .urg_process_step {
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 40px;
        background: #d32f2f;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 18px;
    }
    
    .urg_process_box h3 {
        color: #008888;
        margin: 20px 0 15px;
    }
    
    .urg_info_box {
        background: white;
        padding: 25px;
        border-radius: 5px;
        margin-bottom: 30px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .urg_info_box h3 {
        color: #008888;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }
    
    .urg_info_box h3 i {
        margin-right: 10px;
        font-size: 24px;
    }
    
    .urg_map_wrapper {
        margin-top: 20px;
    }
    
    .urg_map_wrapper img {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    
    .urg_consult_box {
        padding: 25px;
        border-radius: 5px;
        margin-bottom: 30px;
        height: 100%;
    }
    
    .urg_emergency {
        background: #ffebee;
        border-left: 5px solid #d32f2f;
    }
    
    .urg_consultation {
        background: #e8f5e9;
        border-left: 5px solid #43a047;
    }
    
    .urg_consult_box h3 {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }
    
    .urg_consult_box h3 i {
        margin-right: 10px;
    }
    
    @media (max-width: 768px) {
        .urg_process_box {
            width: 100%;
        }
    }
</style>

@endsection