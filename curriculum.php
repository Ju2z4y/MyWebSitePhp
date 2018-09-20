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
            padding-right: 80px;
            margin-right: -80px;
            border-radius: 8px 8px 8px 8px;
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

    <div class="container justify-content" style="margin-top:10px">
        <div class="contact row">
            <div class="test row col-10">
                <div class="col-2">contact</div>
                <div class="col-8"><strong>E-mail : </strong>julien.griffault90@gmail.com <strong>Tel : </strong>06 29 07 96 18</div>
            </div>
            <div class="photo col-2"><img src="images/lama.jpg" alt="Logo" style="width:100px;"></div>
        </div>
        <div class="row separateur">
            <div class="titre" style="min-width: 248px">Personnal Statement</div>
            <div class="extTitre"></div>
        </div>
        <div class="personalStatement">
            <h2>contenu</h2>
        </div>
        <div class="row separateur">
            <div class="titre">Education</div>
            <div class="extTitre"></div>
        </div>
        <div class="education">
            <h2>Education</h2>
        </div>
        <div class="row separateur">
            <div class="titre" style="min-width: 232px">Past employement</div>
            <div class="extTitre"></div>
        </div>
        <div class="pastEmploy">
            <h2>Past Employement</h2>
        </div>
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>

</body>

</html>
