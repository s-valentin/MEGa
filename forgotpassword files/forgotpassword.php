<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MEGa</title>
    <link rel="shortcut icon" type="image/png" href="img/MEGa.svg">
    <link rel="stylesheet" href="../css/forgotpassword.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    
    <main>
        <div class="background">
            <div class="text">
                <h1>Forgot Password?</h1>
                <p>An e-mail will be sent to you with instructions!</p>
                
            </div>
            <div class="box">
                <form class="form" action="../includes/reset-request.inc.php" method="post">
                    <input type="text" name="email" class="email" placeholder="Enter you e-mail..." required>
                    <input type="submit" name="forgotpassword-submit" class="button" value="Reset Password">
             
                </form>
                <?php
            if(isset($_GET["reset"])){
                if($_GET["reset"]=="success"){
                    echo '<p class="signupsuccess">Check your e-mail!</p>';
                }
            }
        ?>
            </div>

        </div>
    </main>

</body>

</html>