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
        
<?php include 'style.css'; ?>
        
    </style>
</head>

<body>
    
    <!-- https://www.flaticon.com/free-icon/snapchat_220366 -->

    <?php
require('includes/navbar.php');
?>
    
    <div class="welcome">
        <h1>Bienvenue</h1>
        <p class="prelude">Le monde du numérique est vaste et diversifé. Il peut être difficile sans avoir de connaissances spécifiques, de trouver une réponse simple à un besoin basic. Comme installer une imprimante, un software. Où même acheter un ordinateur à moindre coûts qui correspond à ses besoin. D'autant plus qu'à notre époque, il est difficile de ne pas avoir de besoins en relation direct avec le monde du numérique.</p>
        <p class="prelude">C'est pourquoi je propose mes services pour répondre à plusieurs de ces besoins, du montage d'ordinateur, au dépannage logiciel. Ainsi que l'installation de reseaux et de plusieurs péripheriques connectés.</p>
    </div>
    
<div>
    <div class="hardware">
        <h2>HardWare</h2>
    </div>
    <div class="bandeauImg">
        <img class="" src="images/hardWareBack.png" style="width:100%" />
    </div>
    
    <p class="prelude">La plus part des foyers, si ce n'est tous, sont équipés d'un ordianteur. Il peut arriver qu'il tombe en panne sans pour autant être obsolète. Aussi, il peut le devenir sans qu'il doit nécessaire de le changer. Changer une simple pièce pour permettre de renouveller sa durée de vie pour une durée significative, mais pour un coût moderé.</p>

    <div class="hardWareBox">
        <div class="hardWareService">
            <div class="clickable" data-toggle="collapse" data-target="#demo">
                <div class="reparation">
                </div>
                <div class="hardWareTitre">
                    <h3>Réparation</h3>
                </div>
            </div>
            <div class="serviceContent collapse" id="demo">
                <div class="sepLine"></div>
                <p>Ne jetez pas votre machine car elle est en panne, faites la réparer. Parfois cela revient à moindre coûts pour prolonger significativement sa durée de vie.</p>
            </div>
        </div>
        
        <div class="hardWareService">
            <div class="clickable" data-toggle="collapse" data-target="#demo1">
                <div class="optimisation">
                </div>
                <div class="hardWareTitre">
                    <h3>Optimisation</h3>
                </div>
            </div>
            <div class="serviceContent collapse" id="demo1">
                <div class="sepLine"></div>
                <p>Vous avez une machine, mais ne savez pas comment en tirer un maximum de performances ?</p>
                <p>Vous souhaitez améliorer votre configuration actuelle mais ne savez pas quelle pièce changer ?</p>
            </div>
        </div> 
        
        <div class="hardWareService">
            <div class="clickable" data-toggle="collapse" data-target="#demo2">
                <div class="creation">
                </div>
                <div class="hardWareTitre">
                    <h3>Création</h3>
                </div>
            </div>
            <div class="serviceContent collapse" id="demo2">
                <div class="sepLine"></div>
                <p>Vous avez toujours voulu avoir une machine à votre image, qui correspond parfaitement à vos besoins.</p>
            </div>
        </div>         
    </div>
</div>   
<div class="color">
    <div class="hardware color">
        <h2>Internet des objets connectés</h2>
    </div>    
    <div class="bandeauImg">
        <img class="" src="images/cloudBack.png" style="width:100%" />
    </div>    
    
    <p class="prelude color">En dehors de l'ordinateur, notre maison est composée de plein d'autres péripheriques, comme les imprimantes, scanner et autre gadgets. Mais encore faut-il savoir les installer et les paramettrer. Et encore, après cela, leur utilité est elle correctement exploitée ? </p>
    <p class="prelude color">Aussi, nous avons la chance, d'avoir aujourd'hui, la possibilité de commander une grande panoplie d'objets connectés à partir de notre smartphone ou même de notre voix. Allumer la lumière, éteindre la télévision. Cela nous facilite la vie, mais peut aussi d'être d'un grand secour pour une personne agées tombée et incapable de se relevée seule, par exemple</p>

    <div class="hardWareBox color">
        
        <div class="hardWareService">
            <div class="clickable" data-toggle="collapse" data-target="#demo3">
                <div class="assistance">
                </div>
                <div class="hardWareTitre">
                    <h3>Assistance à l'installation</h3>
                    <p>(peripherique/logiciel)</p>
                </div>
            </div>
            <div class="serviceContent collapse" id="demo3">
                <div class="sepLine"></div>
                <p>Vous n'arrivez pas à installer un préripherique, tel qu'une imprimante.</p>
                <p>Ou un logiciel, tel que le pack Office.</p>
            </div>
        </div>          
        
        <div class="hardWareService">
            <div class="clickable" data-toggle="collapse" data-target="#demo4">
                <div class="connected">
                </div>
                <div class="hardWareTitre">
                    <h3>Maison connectée</h3>
                </div>
            </div>
            <div class="serviceContent collapse" id="demo4">
                <div class="sepLine"></div>
                <p>Connectez les péripheriques de votre foyer pour les commander à distance.</p>
                <p>Par exemple avec la voix ou avec un smartphone.</p>
            </div>
        </div>     
        
        <div class="hardWareService">
            <div class="clickable" data-toggle="collapse" data-target="#demo5">
                <div class="cloud">
                </div>
                <div class="hardWareTitre">
                    <h3>Cloud privé</h3>
                </div>
            </div>
            <div class="serviceContent collapse" id="demo5">
                <div class="sepLine"></div>
                <p>Vous rêvez d'accéder à vos données depuis l'exterieur, voir même d'avoir votre propre platforme de streaming.</p>
            </div>
        </div>          
        
    </div>   
</div>    
    <div class="hardware">
        <h2>Développemen Web</h2>
    </div>
    <div class="bandeauImg">
        <img class="" src="images/webDevBack.png" style="width:100%" />
    </div>  
    
    <p class="prelude">De nos jours, beaucoup d'activités aussi bien personnelles (loisirs), comme professionnelles nécessitent une visibilité sur le net. en ayant peu de connaissance dans ce domaine il peut être compliqué d'entreprendre la réalisation d'un site internet où de se faire une idée de combien cela pourrait coûter.</p> 

    <div class="hardWareBox">
        
        <div class="hardWareService">
            <div class="clickable" data-toggle="collapse" data-target="#demo6">
                <div class="web">
                </div>
                <div class="hardWareTitre">
                    <h3>Création d'un site web</h3>
                </div>
            </div>
            <div class="serviceContent collapse" id="demo6">
                <div class="sepLine"></div>
                <p>Vous souhaitez avoir votre propre site web.</p>
            </div>
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
