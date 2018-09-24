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
        .fakeimg {
            height: 200px;
            background-image: url("images/site-web-en-construction.jpg");
            background-size: 360px;
        }
    </style>
</head>

<body>

    <?php
require('includes/navbar.php');
?>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <h2>About Me</h2>
                <h5>Photo of me:</h5>
                <div><img src="images/photoID.png" style="width:180px;"/></div>
                <h3>Some Links</h3>
                <p>Lorem ipsum dolor sit ame.</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <h2>Site en construction</h2>
                <h5>Information, Sept 21, 2018</h5>
                <div><img src="images/site-web-en-construction.jpg" style="width:380px;" /></div>
                <p>Rédaction de la version du site 2.0</p>
                <p>Site en construction depuis le 21 septembre, tout sera rédigé par mes soins à l'aide de différents outils comme HTML 5, CSS3, JQuery et Bootstrap 4. Il sera en constante évolution.</p>
                <br>
                <h2>Nouvel onglet !</h2>
                <h5>Curriculum Vitae</h5>
                <div><img src="images/cv.jpg" style="width:280px;" /></div>
                <p>Le premier onglet voit son apparition ! </p>
                <p>Pour cette nouvelle version 2.0 de mybookjulieng.com, l'onglet Curriculum Vitae fait son apparition. Cet onglet représente mon CV en version dynamique à l'aide plusieurs parties déroulantes. Le but étant d'exploiter et pratiquer la nouvelle version de Bootstrap 4 avec du JQuery. Aussi, il proposera le téléchargement de ce CV version PDF.</p>
            </div>
        </div>
    </div>
<?php
require('includes/footer.php');
    ?>

</body>

</html>
