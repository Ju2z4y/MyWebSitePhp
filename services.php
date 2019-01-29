<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        .bandeauImg {
           
        }
        
        .welcome {
            text-align: center;
        }
        
        .hardware {
            text-align: center;
            margin-top: 15px;
            margin-bottom: 20px;
        }
        
        .hardWareBox {
            justify-content: space-around;
            display: flex;
            flex-direction: row;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        
        .hardWareTitre {
            border: solid black 1px;
            height: 200px;
        }
        
        .hardWareService {
            width: 20%;
            text-align: center;
            min-width: 330px;
            padding: 5px;
        }
        
        .hardWareService h3 {
            font-weight: bold;
        }
        
        .reparation {
            background-image: url(images/reparation.jpg);
            background-size: cover;
        }
        
        .optimisation {
            background-image: url(images/opti.jpg);
            background-size: cover;  
            color: aliceblue;
        }
        
        .creation {
            background-image: url(images/creation.jpg);
            background-size: cover;  
            color: aliceblue;            
        }
        
        .serviceContent {
            padding-top: 10px;
            padding-left: 10px;
            padding-right: 10px;
            border: solid black 1px;
            border-top: none;
            font-style: italic;
        }
        
    </style>
</head>

<body>
    
    <!-- https://www.flaticon.com/free-icon/snapchat_220366 -->

    <?php
require('includes/navbar.php');
?>

    
    <div class="welcome">
        <h1>Bienvenue</h1>
        <p> Ici seront présentés mes services</p>
        
    </div>
    
    <div class="bandeauImg">
        <img class="" src="images/hardWareBack.png" style="width:100%" />
    </div>
    <div class="hardware">
        <h2>HardWare</h2>
    </div>
    <div class="hardWareBox">
        <div class="hardWareService">
            <div class="hardWareTitre reparation" data-toggle="collapse" data-target="#demo">
                <h3>Réparation</h3>
            </div>
            <div class="serviceContent collapse" id="demo">
                <p>Ne jetez pas votre machine car elle est en panne, faites la réparer. Parfois cela revient à moindre coûts pour prolonger significativement sa durée de vie.</p>
            </div>
        </div>

        <div class="hardWareService">
            <div class="hardWareTitre optimisation" data-toggle="collapse" data-target="#demo2">
                <h3>Optimisation</h3>
            </div>
            <div class="serviceContent collapse" id="demo2">
                <p>Vous avez une machine, mais ne savez pas comment en tirer un maximum de performances ?</p>
                <p>Vous souhaitez améliorer votre configuration actuelle mais ne savez pas quelle pièce changer ?</p>
            </div>
        </div>
        
        <div class="hardWareService">
            <div class="hardWareTitre creation" data-toggle="collapse" data-target="#demo3">
                <h3>Création</h3>
            </div>
            <div class="serviceContent collapse" id="demo3">
                <p>Vous avez toujours voulu avoir une machine à votre image, qui correspond parfaitement à vos besoins.</p>
            </div>
        </div>
    </div>
    
    
    <div class="bandeauImg">
        <img class="" src="images/cloudBack.png" style="width:100%" />
    </div>    
    <div class="hardware">
        <h2>Internet des objets connectés</h2>
    </div>
    <div class="hardWareBox">
        <div class="hardWareService">
            <h3>Assistance</h3>
            <p>Vous n'arrivez pas à installer un préripherique, tel qu'une imprimante.</p>
        </div>        
        <div class="hardWareService">
            <h3>Maison connectée</h3>
            <p>Connectez les péripheriques de votre foyer pour les commander à distance.</p>
        </div>
        <div class="hardWareService">
            <h3>Cloud</h3>
            <p>Vous rêvez d'accéder à vos données depuis l'exterieur, voir même d'avoir votre propre platforme de streaming.</p>
        </div>
    </div>   
    
    <div class="bandeauImg">
        <img class="" src="images/webDevBack.png" style="width:100%" />
    </div>    
    <div class="hardware">
        <h2>Développemen Web</h2>
    </div>
    <div class="hardWareBox">
        <div class="hardWareService">
            <h3>Création de site vitrine</h3>
            <p>Vous souhaitez avoir votre propre site web.</p>
        </div>        
    </div>     
    
<?php
require('includes/footer.php');
    ?>
    
    <script>
        
        $(document).ready(function() {
            $(".hardWareService").click(function() {
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
