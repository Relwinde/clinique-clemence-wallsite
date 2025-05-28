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
                        <h1>Hospitalisation</h1>
                        <ol class="breadcrumb">
                            <li><a href="">Accueil</a></li>
                            <li>Hospitalisation</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section hospitalisation -->
<div class="team_wrapper med_toppadder100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">NOTRE SERVICE D'HOSPITALISATION</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="med_bottompadder20">
                    <p>
                        Un environnement médicalisé et confortable pour votre séjour en toute sérénité.
                    </p>
                </div>
            </div>

            <!-- Types de services -->
            <div class="col-xl-12">
                <div class="row">
                    <!-- Service 1 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="hosp_service_box">
                            <div class="hosp_img_wrapper">
                                <img src="https://images.unsplash.com/photo-1581595219315-a187dd40c322?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Hospitalisation complète" class="img-responsive">
                                <div class="hosp_overlay">
                                    <div class="hosp_overlay_content">
                                        <a href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hosp_txt">
                                <h3>Hospitalisation Complète</h3>
                                <p>Chambres individuelles avec tout le confort nécessaire et surveillance médicale 24h/24.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="hosp_service_box">
                            <div class="hosp_img_wrapper">
                                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Hospitalisation de jour" class="img-responsive">
                                <div class="hosp_overlay">
                                    <div class="hosp_overlay_content">
                                        <a href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hosp_txt">
                                <h3>Hospitalisation de Jour</h3>
                                <p>Actes médicaux programmés avec retour à domicile le même jour.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="hosp_service_box">
                            <div class="hosp_img_wrapper">
                                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                     alt="Soins intensifs" class="img-responsive">
                                <div class="hosp_overlay">
                                    <div class="hosp_overlay_content">
                                        <a href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hosp_txt">
                                <h3>Unité de Soins Intensifs</h3>
                                <p>Surveillance continue pour les patients nécessitant des soins critiques.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- À propos de l'hospitalisation -->
<div class="ser_abt">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="ser_abt_img_resp">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Chambre d'hôpital" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-7 abt_section">
                <div class="abt_txt abt_txt_resp">
                    <h3 style="color: #008888;">Un accueil chaleureux et des soins de qualité</h3>
                    <p class="med_toppadder20">
                        Notre service d'hospitalisation met tout en œuvre pour que votre séjour soit aussi confortable 
                        que possible. Avec des chambres modernes, un personnel attentionné et des équipements 
                        médicaux de pointe, nous assurons des soins de qualité dans un environnement sécurisé.
                    </p>
                    <ul>
                        <li>Chambres individuelles climatisées avec salle de bain</li>
                        <li>Restauration sur mesure adaptée aux régimes médicaux</li>
                        <li>Accès WiFi et télévision</li>
                        <li>Visites encadrées selon les besoins thérapeutiques</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section équipements/services -->
<div class="med_toppadder100 med_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">NOS ÉQUIPEMENTS ET SERVICES</h1>
                    <img src="https://i.imgur.com/JK7yZQx.png" alt="ligne" class="med_bottompadder20">
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="equipement_box">
                    <img src="https://images.unsplash.com/photo-1585435557343-3b348031e799?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Lit médicalisé" class="img-responsive">
                    <h3>Lits Médicalisés</h3>
                    <p>Lits électriques avec matelas anti-escarres pour plus de confort.</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="equipement_box">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Monitoring" class="img-responsive">
                    <h3>Monitoring Continu</h3>
                    <p>Surveillance des constantes vitales 24h/24 par du personnel qualifié.</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="equipement_box">
                    <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Salle de bain" class="img-responsive">
                    <h3>Salles de Bain Adaptées</h3>
                    <p>Accessibles aux personnes à mobilité réduite avec équipements spéciaux.</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="equipement_box">
                    <img src="https://images.unsplash.com/photo-1505576399279-565b52d4ac71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Espace détente" class="img-responsive">
                    <h3>Espace Détente</h3>
                    <p>Salon convivial pour les patients et leurs visiteurs.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section préparation à l'hospitalisation -->
<div class="prepa_hosp_wrapper med_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="prepa_hosp_box">
                    <h2><i class="fa fa-suitcase"></i> Préparer son séjour</h2>
                    <ul>
                        <li>Pièce d'identité et carte vitale</li>
                        <li>Ordonnances et résultats d'examens récents</li>
                        <li>Liste des médicaments en cours</li>
                        <li>Affaires personnelles (vêtements confortables, produits de toilette)</li>
                        <li>Matériel médical personnel si nécessaire</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="prepa_hosp_box">
                    <h2><i class="fa fa-question-circle"></i> Questions fréquentes</h2>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button>Quels sont les horaires de visites ?</button>
                            <div class="accordion-content">
                                <p>Les visites sont autorisées de 10h à 20h, sauf indication contraire de l'équipe soignante.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button>Puis-je avoir un accompagnant ?</button>
                            <div class="accordion-content">
                                <p>Oui, sous certaines conditions et avec supplément. Merci de vous renseigner à l'accueil.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button>Comment se passe la sortie ?</button>
                            <div class="accordion-content">
                                <p>Elle est organisée avec l'équipe soignante qui vous remettra un compte-rendu et les prescriptions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour la page hospitalisation */
    .hosp_service_box {
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-radius: 5px;
        overflow: hidden;
    }
    
    .hosp_img_wrapper {
        position: relative;
        height: 250px;
        overflow: hidden;
    }
    
    .hosp_img_wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }
    
    .hosp_img_wrapper:hover img {
        transform: scale(1.05);
    }
    
    .hosp_overlay {
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
    
    .hosp_img_wrapper:hover .hosp_overlay {
        opacity: 1;
    }
    
    .hosp_overlay_content a {
        color: white;
        font-weight: bold;
        text-decoration: none;
        padding: 10px 20px;
        border: 2px solid white;
        border-radius: 30px;
    }
    
    .hosp_txt {
        padding: 20px;
        background: white;
    }
    
    .hosp_txt h3 {
        color: #008888;
        margin-bottom: 10px;
    }
    
    .equipement_box {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .equipement_box img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    
    .prepa_hosp_box {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 5px;
        height: 100%;
    }
    
    /* Styles pour l'accordéon FAQ */
    .accordion {
        margin-top: 20px;
    }
    
    .accordion-item {
        margin-bottom: 10px;
    }
    
    .accordion-item button {
        width: 100%;
        text-align: left;
        padding: 10px;
        background: #e6f2f2;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }
    
    .accordion-content {
        padding: 10px;
        display: none;
    }
    
    .accordion-content p {
        margin: 0;
    }
</style>

<script>
    // Script simple pour l'accordéon FAQ
    document.addEventListener('DOMContentLoaded', function() {
        const accordionItems = document.querySelectorAll('.accordion-item button');
        
        accordionItems.forEach(item => {
            item.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const isOpen = content.style.display === 'block';
                
                // Ferme tous les autres items
                document.querySelectorAll('.accordion-content').forEach(el => {
                    el.style.display = 'none';
                });
                
                // Ouvre l'item actuel si ce n'était pas déjà le cas
                if (!isOpen) {
                    content.style.display = 'block';
                }
            });
        });
    });
</script>

@endsection