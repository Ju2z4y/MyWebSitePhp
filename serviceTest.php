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
        .hardWareBox {
            justify-content: space-around;
        }
        
        .hardWareService {
                        width: 30%;
            text-align: center;
            background-color: black;
            
        }
        
        .serviceContent {
            background-color: black;
        }
        
        .reparation {
            background-image: url(images/reparation.jpg);
            background-size: cover;
border: solid black 1px;
            height: 200px;
            
        }
        
        
    </style>
</head>

<body>
    
    <!-- https://www.flaticon.com/free-icon/snapchat_220366 -->

    <?php
require('includes/navbar.php');
?>
    


    <div class="hardWareBox row">
        <div class="hardWareService">
            <div class="reparation" data-toggle="collapse" data-target="#demo">

            </div>
                <h3>Réparation</h3>            
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

    <div>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    <p>g</p>
    
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
