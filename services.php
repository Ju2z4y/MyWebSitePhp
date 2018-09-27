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

        .service {
            margin: 30px;
            width: 300px;
            height: 500px;
            border: solid black 1px;
            border-radius: 8px 8px 8px 8px;
            position: relative;
            
        }

        .services {
            justify-content: space-around;
            transition: 2s;
            z-index: 10;
        }

        .serviceIntro {
            text-align: center;
        }
        
        .center {
            width: 100%;
            height: 650px;
            text-align: center; 
            /*text-align: center !important;*/
        }
        
        p {
            text-align: center;
        }
        
        .btn-secondary {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .service img {
            height: 100%;
            width: 100%;
            opacity: 0.3;
        }
        
        .caption {
            position: absolute;
            top: 5%;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 5px;
        }
        
        .hardware {
            width: 50%;
            text-align: left;
            
        }
        

    </style>
</head>

<body>

    <?php
require('includes/navbar.php');
?>

    <div class="container justify-content" style="margin-top:30px">
        <div class="serviceIntro">
            <h2></h2>
            <p>Ici seront présentés les services que je propose</p>
        </div>
        <div class="services row">
            <div class="service" data-toggle="collapse" data-target="#demo">
                <img src="images/maintenance_pc.jpg" />
                <div class="caption">
                    <h3>Réparation Software & Hardware</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quisquam?</p>
                </div>
            </div>
            <div class="service" data-toggle="collapse" data-target="#demo1">
                <img src="images/code.png" />
                <div class="caption">
                    <h3>Développement web & Application</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quisquam?</p>
                </div>
            </div>
            <div class="service" data-toggle="collapse" data-target="#demo2">
                <img src="images/NZXT.png" />
                <div class="caption">
                    <h3>Conseil & montage de config dernière génération</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quisquam?</p>
                </div>
            </div>
        </div>
        <div id="demo" class="center collapse">
            <h3>Réparation Software & Hardware</h3>
            <div class="container hardware">
                <p>Services proposés :</p>
                <ul>
                    <li>Réparations matériels : 
                        <ul>
                            <li>Ordinateurs de bureau</li>
                            <li>Ordinateurs portables</li>
                            <li>Téléphones portables</li>
                            <li>Tablettes</li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#demo">Retour</button>
        </div>
        <div id="demo1" class="center collapse">
            <h3>Développement web & Application</h3>
            <p>Services proposés : </p>
            <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#demo1">Retour</button>
        </div>
        <div id="demo2" class="center collapse">
            <h3>Conseil & montage de config dernière génération</h3>
            <p>Services proposés : </p>
            <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#demo2">Retour</button>
        </div>
    </div>

    <?php
require('includes/footer.php');
    ?>
    <script>
        $(document).ready(function() {
            $(".btn-secondary").hide();

            $(".service").click(function() {
                $(".service").delay(280).slideUp("fast");
                $(".btn-secondary").delay(500).fadeIn();
                $(".serviceIntro").delay(280).slideUp("fast");
            });
            $(".btn-secondary").click(function() {
                $(".service").delay(280).slideDown("fast");
                $(".serviceIntro").delay(280).slideDown("fast");
                $(".btn-secondary").hide();
            });
        });

    </script>
</body>

</html>
