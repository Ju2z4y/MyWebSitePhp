<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Web Site - Julien G.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        body {
            overflow-x: hidden;
        }

        .mail {
            justify-content: space-around;
        }

        .test {
            margin-top: 40px;
            height: 60px;
            line-height: 60px;
            border-bottom: solid black 1px;
            margin-right: 20;
        }

        .photo {
            text-align: right;
        }

        .separateur {
            flex-wrap: nowrap;
            margin-top: -20px;
        }

        .titre {
            background-color: black;
            color: white;
            border-radius: 0px 8px 8px 0px;
            padding: 8px;
            padding-left: 80px;
            padding-right: 20px;
            margin-left: -80px;
            margin-top: 30px;
            ;
        }

        .extTitre {
            background-color: gainsboro;
            padding: 8px;
            margin-left: 10px;
            margin-top: 30px;
            max-width: 100%;
            min-width: 100%;
            border-radius: 8px 8px 8px 8px;
        }

        h6 {
            text-align: center;
            margin-top: 25px;
        }

        .imgButton {
            width: 30px;
            height: 30px;
            border: none;
        }

        .conteneur {
            margin-top: 10px;
        }

        .right {
            float: right;
        }

        .second {
            margin-right: 20px;
        }

        .barre {
            margin: -8px;
            text-align: center;
        }

        .titreSkill {
            padding-left: 10px;
            padding-right: 10px;
        }

        .skillContainer {
            margin-left: -14px;
        }
        
        .center {
            justify-content: space-around;
        }
        
        .bigBarre {
            margin-bottom: 20px;
        }

    </style>
</head>

<body>

    <?php
require('includes/navbar.php');
?>

    <div class="container justify-content" style="margin-top:30px">
        <div class="contact row">
            <div class="test row col-10">
                <div class="col-2">contact</div>
                <div class="col-8"><strong>E-mail : </strong>julien.griffault90@gmail.com <strong>Tel : </strong>06 29 07 96 18</div>
            </div>
            <div class="photo col-2"><img src="images/photoID.png" alt="Logo" style="width:100px;"></div>
        </div>
        <div class="center row">
            <button type="button" class="btn btn-dark" id="toutInverser">Tout inverser</button>
            <button type="button" class="btn btn-dark" id="toutRanger">Tout ranger</button>
            <button type="button" class="btn btn-dark" id="toutDerouler">Tout dérouler</button>
        </div>
        <div class="row separateur">
            <div class="titre" style="min-width: 248px">Personnal Statement</div>
            <div class="extTitre"></div>
        </div>
        <div class="personalStatement">
            <h6>Le latin est une langue italique de la famille des langues indo-européennes, parlée à l'origine dans le Latium et la Rome antique. Bien qu'il soit souvent considéré comme une langue morte, sa connaissance, voire son usage, se sont maintenus à l'université et dans le clergé.</h6>
            <p>Durant l'Antiquité, le latin a été parlé dans tout le bassin méditerranéen, essentiellement dans les pays conquis par les Romains. Dans ces pays, il a parfois remplacé complètement les langues qui existaient avant comme en Gaule ou en Hispanie, ou bien ces langues ont subsisté comme en Grèce et en Bretagne.</p>
        </div>
        <div class="row separateur">
            <div class="titre">Education</div>
            <div class="extTitre"></div>
        </div>
        <div class="education">
            <div class="conteneur">
                <a class="arrow" href="#edu1" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
                <strong>Institue Poly Informatique</strong> <a href="http://www.ipi-ecoles.com/" target="_blank"><img src="logos/ipi.jpg" style="width:25px;" /></a> - en cours<i class="right">Depuis Sept. 2017</i>
                <div id="edu1" class="collapse">
                    <p><u>Préparation de deux diplômes : </u></p>
                    <ul>
                        <li><i>Titre RNCP de niveau II :</i> Concepteur - Développeur en application</li>
                        <li><i>Titre RNCP de niveau III :</i> Technicien informatique et réseaux</li>
                    </ul>
                </div>
            </div>
            <div class="conteneur">
                <a class="arrow" href="#edu2" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
                <strong>CQP en assurance</strong> <a href="https://www.maif.fr/" target="_blank"><img src="logos/maif.jpg" style="width:30px;" /></a> <i class="right">2011-2012</i>
                <div id="edu2" class="collapse">
                    <p>Obtention d'une qualification professionnelle en assurance. Après 3 mois de formation et 9 mois d'exercice du métier de téléconseiller au sein de la MAIF</p>
                </div>
            </div>
            <div class="conteneur">
                <a class="arrow" href="#edu3" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
                <strong>BTS Technico-commercial</strong> <a href="http://www.ldmraspail.fr/" target="_blank"><img src="logos/raspail.jpg" style="width:65px;" /></a> <i class="right">2009-2011</i>
                <div id="edu3" class="collapse">
                    <p>Spécialisé dans l'énergie et l'environnement. Au Lycée Raspail, Paris 14éme</p>
                </div>
            </div>
        </div>
        <div class="row separateur">
            <div class="titre" style="min-width: 240px">Past employement</div>
            <div class="extTitre"></div>
        </div>
        <div class="conteneur">
            <a class="arrow" href="#emp3" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
            <strong>Concepteur/développeur Java junior</strong> <a href="https://www.cgi.fr/" target="_blank"><img src="logos/cgi.png" style="width:25px;" /></a><i class="right">Depuis Sept. 2017</i>
            <div id="emp3" class="collapse">
                <p><u>Exercice du métier de développeur junior :</u></p>
                <ul>

                    <li>
                        <div class="row">
                            <div class="col-8"><strong>Ministère de la Justice</strong>
                                <p>Projet de dématerialisation - Technologies et frameworks utilisés : </p>
                                <ul><i>
                                        <li>Java</li>
                                        <li>Spring MVC</li>
                                        <li>Flyway</li>
                                        <li>MyBatis</li>
                                        <li>Spock Testing</li>
                                </ul></i>
                            </div>
                            <div class="col-3"><i class="right second">Depuis Mars 2018</i></div>
                            <div class="col-1">
                                <p class="barre">|</p>
                                <p class="barre">|</p>
                                <p class="barre">|</p>
                                <p class="barre">|</p>
                                <p class="barre">|</p>
                                <p class="barre">|</p>
                                <p class="barre">|</p>
                                <p class="barre">|</p>
                                <p class="barre">|</p>
                                <p class="barre">|</p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="pastEmploy">
            <div class="conteneur">
                <a class="arrow" href="#emp2" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
                <strong>Consultant vente dans le sport</strong> <a href="https://www.healthcity.fr/" target="_blank"><img src="logos/healthcity.jpg" style="width:30px;" /></a><strong>&</strong> <a href="https://www.cmgsportsclub.com/" target="_blank"><img src="logos/cmg.jpg" style="width:35px;" /></a><i class="right">2012-2017</i>
                <div id="emp2" class="collapse">
                    <p><u>Exercice du métier de consultant vente :</u></p>
                    <ul>
                        <li>Gestion et souscription de différents contrats d'abonnement en fonction des besoins</li>
                        <li>Suivi clientèle, propositions de services complémentaires</li>
                        <li>Démarches commerciales dans la zone de chalandise</li>
                        <li>Formation de petites équipes commerciales</li>
                        <li>Gestion et clôture administrative de la caisse</li>
                    </ul>
                </div>
            </div>
            <div class="conteneur">
                <a class="arrow" href="#emp1" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
                <strong>Conseiller clientèle en assurance</strong> <a href="https://www.maif.fr/" target="_blank"><img src="logos/maif.jpg" style="width:30px;" /></a><i class="right">2011-2012</i>
                <div id="emp1" class="collapse">
                    <p><u>Exercice du métier de téléconseiller :</u></p>
                    <ul>
                        <li>Gestion et souscription de 12 différents produits d'assurance (VAM, RAQVAM, individuel corporelle...)</li>
                        <li>Sollicitation/rebond commercial, objectif sur vente</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row separateur">
            <div class="titre" style="min-width: 240px">Skills</div>
            <div class="extTitre"></div>
        </div>
        <div class="container skillContainer" style="margin-bottom:30px">
            <div class="container">
                <h3>Developpement</h3>
                <div class="row">
                    <a class="arrow" href="#skill1" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
                    <p class="titreSkill"><strong>JavaEE</strong></p>
                </div>
                <div class="progress bigBarre" style="width:450px;height:25px">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:70%;height:25px"></div>
                </div>
                <div id="skill1" class="collapse">
                    <ul>
                        <p><strong>FrameWorks :</strong></p>
                        <li>MyBatis
                            <div class="progress" style="width:250px;height:10px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width:30%;height:10px"></div>
                            </div>
                        </li>
                        <li>Flyway
                            <div class="progress" style="width:250px;height:10px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width:10%;height:10px"></div>
                            </div>
                        </li>
                        <li>SpockTesting
                            <div class="progress" style="width:250px;height:10px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width:85%;height:10px"></div>
                            </div>
                        </li>
                        <li>SpringMVC
                            <div class="progress" style="width:250px;height:10px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width:85%;height:10px"></div>
                            </div>
                        </li>                        
                    </ul>
                </div>
                <div class="row">
                    <a class="arrow" href="#skill2" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
                    <p class="titreSkill"><strong>HTML / CSS / JS</strong></p>
                </div>
                <div class="progress bigBarre" style="width:450px;height:25px">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:70%;height:25px"></div>
                </div>
                <div id="skill2" class="collapse">
                    <ul>
                        <p><strong>FrameWorks :</strong></p>
                        <li>JQuery
                            <div class="progress" style="width:250px;height:10px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width:70%;height:10px"></div>
                            </div>
                        </li>
                        <li>Bootstrap 3 & 4
                            <div class="progress" style="width:250px;height:10px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width:60%;height:10px"></div>
                            </div>
                        </li>
                        <li>Vue.js (futur)
                            <div class="progress" style="width:250px;height:10px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width:8%;height:10px"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>
    <script>
        $(document).ready(function() {
            $(".arrow").click(function() {
                var img = $(this).find('img.imgButton')[0]; // the actual DOM element for the image
                if (img.src.indexOf('flecheDroite.png') != -1) {
                    img.src = 'icones/flecheBas.png';
                } else {
                    img.src = 'icones/flecheDroite.png';
                }
            });

            $("#toutInverser").click(function() {
                // the actual DOM element for the image
                for (i = 0; i < $(document).find('img.imgButton').length; i++) {
                    var img = $(document).find('img.imgButton')[i];
                if (img.src.indexOf('flecheDroite.png') != -1) {
                    img.src = 'icones/flecheBas.png';
                } else {
                    img.src = 'icones/flecheDroite.png';
                }
                }
                $('.collapse').collapse("toggle");
            });
            
            $("#toutDerouler").click(function() {
                // the actual DOM element for the image
                for (i = 0; i < $(document).find('img.imgButton').length; i++) {
                    var img = $(document).find('img.imgButton')[i];
                        img.src = 'icones/flecheBas.png';
                }
                $('.collapse').collapse("show");
            });          
            
            $("#toutRanger").click(function() {
                // the actual DOM element for the image
                for (i = 0; i < $(document).find('img.imgButton').length; i++) {
                    var img = $(document).find('img.imgButton')[i];
                        img.src = 'icones/flecheDroite.png';
                }
                $('.collapse').collapse("hide");
            });                 
        });

    </script>
</body>

</html>
