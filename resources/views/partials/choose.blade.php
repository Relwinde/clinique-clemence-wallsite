<div class="choose_wrapper med_toppadder100">
    <div class="choose_overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Colonne gauche - Accordéon de contenu -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="choose_heading_wrapper">
                    <h1 class="med_bottompadder20">Pourquoi nous choisir</h1>
                    <img src="{{ asset('images/line.png') }}" alt="ligne décorative" class="med_bottompadder30">
                </div>
                <div class="sidebar_wrapper">
                    <div class="accordionFifteen">
                        <div class="panel-group" id="accordionFifteenLeft" role="tablist">

                            <!-- Panneau 1 -->
                            <div class="panel panel-default sidebar_pannel">
                                <div class="panel-heading desktop">
                                    <h4 class="panel-title">
                                        <a class="collapsed active" data-toggle="collapse" href="#collapseUn" aria-expanded="true">
                                            - Un service attentionné et des soins de qualité
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseUn" class="panel-collapse collapse show" data-parent="#accordionFifteenLeft">
                                    <div class="panel-body">
                                        <div class="panel_cont">
                                            <p>Nous plaçons toujours nos patients au cœur de nos priorités. Nos équipes sont à l'écoute et veillent à offrir un service de qualité dans un environnement rassurant.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Panneau 2 -->
                            <div class="panel panel-default sidebar_pannel">
                                <div class="panel-heading horn">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseDeux" aria-expanded="false">
                                            - Confidentialité de vos dossiers médicaux
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseDeux" class="panel-collapse collapse" data-parent="#accordionFifteenLeft">
                                    <div class="panel-body">
                                        <div class="panel_cont">
                                            <p>Seuls les professionnels de santé autorisés peuvent accéder à vos données médicales. Votre vie privée est strictement protégée.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Panneau 3 -->
                            <div class="panel panel-default sidebar_pannel">
                                <div class="panel-heading bell">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTrois" aria-expanded="false">
                                            - Une équipe expérimentée et dévouée
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTrois" class="panel-collapse collapse" data-parent="#accordionFifteenLeft">
                                    <div class="panel-body">
                                        <div class="panel_cont">
                                            <p>Notre personnel médical bénéficie d’une solide expérience et suit des formations continues pour vous garantir les meilleurs soins.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Panneau 4 -->
                            <div class="panel panel-default sidebar_pannel">
                                <div class="panel-heading bell">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseQuatre" aria-expanded="false">
                                            - Un cadre propre et sécurisé
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseQuatre" class="panel-collapse collapse" data-parent="#accordionFifteenLeft">
                                    <div class="panel-body">
                                        <div class="panel_cont">
                                            <p>Nos locaux sont entretenus rigoureusement pour garantir hygiène et sécurité à chaque patient.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Panneau 5 -->
                            <div class="panel panel-default sidebar_pannel">
                                <div class="panel-heading bell">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseCinq" aria-expanded="false">
                                            - Technologies modernes à votre service
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseCinq" class="panel-collapse collapse" data-parent="#accordionFifteenLeft">
                                    <div class="panel-body">
                                        <div class="panel_cont">
                                            <p>Nous utilisons des équipements de pointe pour un diagnostic précis et rapide, afin de mieux prendre soin de votre santé.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Panneau 6 -->
                            <div class="panel panel-default sidebar_pannel">
                                <div class="panel-heading bell">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false">
                                            - Services disponibles 24h/24 et 7j/7
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" data-parent="#accordionFifteenLeft">
                                    <div class="panel-body">
                                        <div class="panel_cont">
                                            <p>Notre structure reste ouverte en permanence pour assurer les urgences médicales à tout moment.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- /.panel-group -->
                    </div>
                </div>
            </div>
            <!-- Fin colonne gauche -->

            <!-- Colonne droite - Carrousel d'images -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="owl_box">
                    <div class="med_slider_img">
                        <div class="owl-carousel owl-theme">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="item">
                                    <img src="{{asset('images/chs_slider_img.jpg')}}" class="img-responsive" alt="Image du centre médical">
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin colonne droite -->

        </div>
    </div>
</div>
