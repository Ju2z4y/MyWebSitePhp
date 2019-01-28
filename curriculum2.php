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

        .cvContainer {
            text-align: center;
            width: 900px;
        }

        .separateur {
            margin-left: -50px;
            width: 1000px;
            height: 35px;
            flex-wrap: nowrap;
            vertical-align: middle;
        }
        
        .titre{
            background-color: black;
            color: white;
            border-radius: 0px 8px 8px 0px;
            padding-top: 4px;
        }
        
        .endTitre {
            background-color: gainsboro;
            width: 100%;
            margin-left: 10px;
            border-radius: 8px 0px 0px 8px;
        }
        
        .conteneur {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        .photo {
            border-radius: 8px 8px 8px 8px;
        }
        
        .contact {
            vertical-align: middle;
            padding-top: 35px;
        }
        
        .contactBox {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
    </style>
</head>

<body>

    <?php
require('includes/navbar.php');
?>

    <div class="container justify-content cvContainer">

        <div class=" contactBox row">
            <div class="contact col-10">
                <strong>E-mail : </strong>julien.griffault90@gmail.com <strong>Tel : </strong>06 29 07 96 18
            </div>
            <div class="col-2"><img class="photo" src="images/photoID.png" alt="Logo" style="width:100px;"></div>
        </div>
        
        <div class="separateur row">
            <div class="titre" style="width:350px">
                <p>Personnal Statement</p>
            </div>
            <div class="endTitre">
            </div>
        </div>
        
        <div class="conteneur">
            <h6>Le latin est une langue italique de la famille des langues indo-européennes, parlée à l'origine dans le Latium et la Rome antique. Bien qu'il soit souvent considéré comme une langue morte, sa connaissance, voire son usage, se sont maintenus à l'université et dans le clergé.</h6>
            <p>Durant l'Antiquité, le latin a été parlé dans tout le bassin méditerranéen, essentiellement dans les pays conquis par les Romains. Dans ces pays, il a parfois remplacé complètement les langues qui existaient avant comme en Gaule ou en Hispanie, ou bien ces langues ont subsisté comme en Grèce et en Bretagne.</p>
        </div>
        
        <div class="separateur row">
            <div class="titre" style="width:350px">
                <p>Education</p>
            </div>
            <div class="endTitre">
            </div>
        </div>
        
        <div class="separateur row">
            <div class="titre" style="width:350px">
                <p>Past Employement</p>
            </div>
            <div class="endTitre">
            </div>
        </div>
        
        <div class="separateur row">
            <div class="titre" style="width:350px">
                <p>Skills</p>
            </div>
            <div class="endTitre">
            </div>
        </div>
        

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
