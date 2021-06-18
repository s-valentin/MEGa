<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>

    <div class="container">
        <a href="index.php"><img class="home" src="../resources/svg/contact.svg" alt="Home"></a>
        <div class="containerTitles">
            <h1>Leave a feedback. Or not. Your choice.</h1>
            <p>You can complain or congratulate us,</p>
            <p>or you can just report a bug</p>
        </div>
    </div>


    <div class="formular">
        <form action="../includes/contact.inc.php" method="POST">
            <div class="row">
                <div class="column">
                    <label for="fname">Name</label><br>
                    <input class="fname" type="text" id="fname" name="fname">
                </div>

                <div class="column">
                    <label for="subj">Subject</label><br>
                    <input class="subj" type="text" id="subj" name="subj">
                </div>
        
                <div class="column">
                    <label class="label" for="email">Email</label><br>
                    <input class="email" type="text" id="email" name="email">
                </div>
            </div>

            <div class="feedback">
                <label class="label" for="feedback">Your feedback</label><br>
                <textarea class="feedbackText" id="feedback" name="feedback" placeholder="You didn't like this... Or did you?"></textarea>
            </div>

            <div class="submit">
                <input type="submit" class="button" value="Submit feedback">
            </div>
        </form>
    </div>

    <div class="bottom">
        <div class="bottomRow">
            <div class="bottomColumn">
                <img class="profile" src="../resources/profile/woman1.png" alt="Cosmin">
                <p>Sandu Marius-Cosmin 
                    <br> Email: sandu_cosmin9@yahoo.com
                    <br> Github: <a href="https://github.com/sanducosmin9">sanducosmin9</a>
                </p>
            </div>

            <div class="bottomColumn">
                <img class="profile" src="../resources/profile/woman2.png" alt="Andu">
                <p>Sîrcu Cătălin Alexandru 
                    <br> Email: acs200035@gmail.com
                    <br> Github: <a href="https://github.com/catalin-alexandru-s">catalin-alexandru-s</a>
                </p>
            </div>

            <div class="bottomColumn">
                <img class="profile" src="../resources/profile/zcat.png" alt="Vali">
                <p>Stanciu Valentin
                    <br> Email: stanciuvalentin7@gmail.com
                    <br> Github: <a href="https://github.com/s-valentin">s-valentin</a>
                </p>
                
            </div>
        </div>


    </div>
</body>
</html>