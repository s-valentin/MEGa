<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MEGa</title>
    <link rel="shortcut icon" type="image/png" href="img/MEGa.svg">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    
    <main>
        <div class="background">
            <div class="text">
                <h1>Log In</h1>
                <p>No account? Press <a href="signup.php">Sign Up</a> to become a member!</p>
                <p>Proceed to the <a href="index.php"> Home</a> page!</p>
                <p>Forgot the password? Click<a href="../html/forgotpassword.php"> here.</a></p>
            </div>
            <div class="box">
                <form class="form" action="../includes/login.inc.php" method="post">
                    <input type="text" name="usersname" class="Username" placeholder="Username" required>
                    <input type="password" name="password" class="Password" placeholder="Password" required>
                    <input type="submit" name="submit" class="button" value="Login">
                    <?php
            if(isset($_GET["error"])){
                if($_GET["error"]=="wrongLogin"){
                    echo "<p>Incorrect login info!</p>";
                }
            }
        ?>
                </form>
            </div>

        </div>
    </main>

</body>

</html>