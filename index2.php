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
            font-size: 35px;
        }
        
    </style>
</head>

<body>
    
    <!-- https://www.flaticon.com/free-icon/snapchat_220366 -->

    <?php
require('includes/navbar.php');
?>

    
    <div class="welcome">
        <p>Bienvenue</p>
    </div>
    
    <div class="bandeauImg">
        <img class="" src="images/background.png" style="width:100%" />
    </div>
    
<?php
require('includes/footer.php');
    ?>

</body>

</html>
