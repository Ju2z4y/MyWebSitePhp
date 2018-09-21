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
            width: 100%;
            padding-right: 160px;
            margin-right: -160px;
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

    </style>
</head>

<body>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>My First Bootstrap 4 Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

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
                <a href="http://www.ipi-ecoles.com/" target="_blank"><img src="logos/ipi.jpg"  style="width:25px;"/></a><strong> - Institue Poly Informatique</strong> - en cours<i class="right">Depuis Sept. 2017</i>
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
                <a href="https://www.maif.fr/" target="_blank"><img src="logos/maif.jpg"  style="width:30px;"/></a><strong> - CQP en assurance</strong> <i class="right">2011-2012</i>
                <div id="edu2" class="collapse">
                    <p>Obtention d'une qualification professionnelle en assurance. Après 3 mois de formation et 9 mois d'exercice du métier de téléconseiller au sein de la MAIF</p>
                </div>
            </div>
            <div class="conteneur">
                <a class="arrow" href="#edu3" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
                <a href="http://www.ldmraspail.fr/" target="_blank"><img src="logos/raspail.jpg"  style="width:65px;"/></a><strong> - BTS Technico-commercial</strong> <i class="right">2009-2011</i>
                <div id="edu3" class="collapse">
                    <p>Spécialisé dans l'énergie et l'environnement. Au Lycée Raspail, Paris 14éme</p>
                </div>
            </div>
        </div>
        <div class="row separateur">
            <div class="titre" style="min-width: 250px">Past employement</div>
            <div class="extTitre"></div>
        </div>
        <div class="pastEmploy">
            <div class="conteneur">
                <a class="arrow" href="#emp2" data-toggle="collapse"><img class="imgButton" src="icones/flecheDroite.png" /></a>
                <a href="" target="_blank"><img src="logos/healthcity.jpg"  style="width:30px;"/></a> <strong>&</strong> <a href="" target="_blank"><img src="logos/cmg.jpg"  style="width:35px;"/></a><strong> - Consultant vente dans le sport</strong><i class="right">2012-2017</i>
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
                <a href="https://www.maif.fr/" target="_blank"><img src="logos/maif.jpg"  style="width:30px;"/></a><strong> - Conseiller clientèle en assurance</strong><i class="right">2011-2012</i>
                <div id="emp1" class="collapse">
                    <p><u>Exercice du métier de téléconseiller :</u></p>
                    <ul>
                        <li>Gestion et souscription de 12 différents produits d'assurance (VAM, RAQVAM, individuel corporelle...)</li>
                        <li>Sollicitation/rebond commercial, objectif sur vente</li>
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
        });

    </script>
</body>

</html>
