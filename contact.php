<!DOCTYPE html>
<html lang="en">

<head>
    <title>Julien Griffault</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        
<?php include 'style.css'; ?>
        
    </style>
</head>

<body>

    <?php
require('includes/navbar.php');
?>
    
<div class="container contactContainer">
    <div class="introContact">
        <h2>Contactez-moi</h2>
        <p>N'hésitez pas à me contacter aussi bien par SMS que par mail, je serais ravi de vous aider.</p>
        <p>Je me déplace en région parisienne, de préférence à moins d'une heure de mon domicile. Il suffira de cliquer sur la map et sur itinétaire pour calculer la durée du trajet.</p>
    </div>
    <div class="contact">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10516.376207627985!2d2.307921695450821!3d48.780094668477076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6712a13518e05%3A0x40b82c3688b3e80!2s92340+Bourg-la-Reine!5e0!3m2!1sfr!2sfr!4v1549024738770" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contactInfo">
            <h3>Contact</h3>
            <p>Tél : 06 29 07 96 18</p>
            <p>Mail : julien.griffault90@gmail.com</p>
        </div>
        
    </div>
    <div class="temoignages">
        <h2>ils l'ont déjà fait : </h2>
        <div class="temoignagesList">
            <div class="temoignagesBox">
                <h4>Méderick</h4>
                <div class="temoignageText">
                    <p class="temoignageDate">04 jan 19</p>
                    <img class="quote" src="images/quote12.png" width="20"/>
                    <p class="testouille">J'avais besoin d'un PC de gamer à un prix correspondant à mon budget pou run maximum de performances, je suis très content du résultat, je recommande le travail de julien et le remercie encore !</p>
                    <img class="quote" src="images/quote12.png" width="20"/>
                </div>
            </div>
            <div class="temoignagesBox">
                <h4>Vincent</h4>
                <div class="temoignageText">
                    <p class="temoignageDate">15 dec 18</p>
                    <img class="quote" src="images/quote12.png" width="20"/>
                    <p class="testouille">Mon ordinateur portable est tombé en panne, Julien a pu le réparer le temps de son week-end, et je l'ai même récuperé plus performant ! Merci !</p>
                    <img class="quote" src="images/quote12.png" width="20"/>
                </div>
            </div>
            <div class="temoignagesBox">
                <h4>Chantal</h4>
                <div class="temoignageText">
                    <p class="temoignageDate">21 sep 18</p>
                    <img class="quote" src="images/quote12.png" width="20"/>
                    <p class="testouille">J'avais une imprimante wiFi a installer, et mon ordinateur portable devenait très lent. Julien s'est déplacé à domicile, il s'est occupé de le "nettoyer" et à installer l'imprimante.</p>
                    <img class="quote" src="images/quote12.png" width="20"/>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php
require('includes/footer.php');
    ?>

</body>

</html>
