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
        }
        
        .services {
            justify-content: space-around;
            transition: 2s;
            z-index: 10;
        }
        
        .serviceIntro {
            text-align: center;
        }
        
        .bouton {
            width: 10px;
            height: 10px;
            border: solid black 1px;
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
            <div class="service" id="1" data-toggle="collapse" data-target="#demo"></div>
            <div class="service" data-toggle="collapse" data-target="#demo1"></div>
            <div class="service" data-toggle="collapse" data-target="#demo2"></div>
        </div>
        <div id="demo" class="collapse">
            <p>TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST</p>
            <button class="bouton" data-toggle="collapse" data-target="#demo"></button>
            <div></div>
        </div>
        <div id="demo1" class="collapse">
            <p>TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST</p>
        </div>
        <div id="demo2" class="collapse">
            <p>TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST</p>
        </div>
    </div>

<?php
require('includes/footer.php');
    ?>
    <script>
        $(document).ready(function() {
            $(".service").click(function() {
                $(".service").slideUp("slow");
            });
            $(".bouton").click(function() {
                $(".service").slideDown("slow");
            });
        });

    </script>
</body>

</html>
