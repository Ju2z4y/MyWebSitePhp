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
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<?php
require('includes/navbar.php');
?>

<div class="container" style="margin-top:10px">
    <div class="contact">
        <h2>Contact</h2>
    </div>
    <div class="personalStatement">
        <h2>Personnal Statement</h2>
    </div>
    <div class="education">
        <h2>Education</h2>
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