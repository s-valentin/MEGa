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
    <div class = "navbar">
        <a href="index.php"
        ><img class="home" src="../resources/svg/calculator.svg" alt="Home"
      /></a>
    </div>
    <div class = "user">
        <div class="avatar">
            <?php
                $imageNumber = rand(1,20);
                echo '<img class="avatarSVG" src="../resources/userAvatars/avatar('.$imageNumber.').svg" alt="avatar">'
            ?>
            
            
        </div>
        <p class = "username">
            User Name
        </p>
    </div>

    <div class = "equations">
        <div class = "square">
            <div class = "eq">
                <math display="block"><mrow><msup><mfenced><mrow><mi>a</mi><mo>+</mo><mi>b</mi></mrow></mfenced><mn>2</mn></msup></mrow></math>
            </div>
            <div class = "statistics">
                <p class = "statText">
                    Rating: 5
                </p>
                <br></br>
                <p class = "statText">
                    Corect: 140
                </p>
                <br></br>
                <p class = "statText">
                    Gresit: 2
                </p>
            </div>
        </div>
    </div>
</body>