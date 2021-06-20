<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

</head>

<body>
    <div class="navbar">
        <a href="index.php"><img class="home" src="../resources/svg/calculator.svg" alt="Home" /></a>
    </div>
    <div class="user">
        <div class="avatar">
            <?php
                include '../php/queryAvatar.php';

                $aux = $row["id"];
                $imageNumber = $aux % 20;
                echo '<img class="avatarSVG" src="../resources/userAvatars/avatar('.$imageNumber.').svg" alt="avatar">'
            ?>


        </div>
        <p class="username">
            <?php
                echo $row["usersName"];
            ?>
        </p>
    </div>

    <div class="equations">
        <?php
        include '../php/queryProfileEquation.php';
        ceva();
        ?>
    </div>

</body>