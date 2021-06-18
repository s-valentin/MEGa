<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MEGa</title>
    <link rel="shortcut icon" type="image/png" href="img/MEGa.svg">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <main>
        <div class="background">
            <div class="text">
                <h1>Sign Up</h1>
                <p>You have an account? <a href="../html/login.php">Log In</a> to access your account!</p>
                <p>Proceed to the <a href="../html/index.php"> Home</a> page!</p>
            </div>
            <div class="box">
                <form class="form" action="../includes/signup.inc.php" method="post">
                    <input type="text" name="username" class="username" placeholder="Username" required>
                    <input type="email" name="email" class="email" placeholder="E-mail" required>
                    <input type="password" name="password" class="password" placeholder="Password" required>
                    <input type="password" name="rptpassword" class="rptpassword" placeholder="Repeat Password" required>
                    <input type="submit" name="submit" class="button" value="Sign Up">
                    <?php
            if(isset($_GET["error"])){
                if($_GET["error"]=="passwordNotMatching"){
                    echo "<p>Passwords not matching!</p>";
                }
                else if($_GET["error"]=="invalidUsername"){
                    echo "<p>Invalid username!</p>";
                }
                else if($_GET["error"]=="usernameTaken"){
                    echo "<p>Username already taken, think of another one!</p>";
                }
                else if($_GET["error"]=="invalidEmail"){
                    echo "<p>Enter a valid email adress!</p>";
                }
                else if($_GET["error"]=="statementFailed"){
                    echo "<p>Something went wrong, try again!</p>";
                }
                else if($_GET["error"]=="none"){
                    echo "<p>You have signed up!</p>";
                } else if(isset($_GET["newPassword"])){
                    if($_GET["newPassword"]=="passwordUpdated"){
                        echo '<p class="signupsuccess">Your password has been reset!</p>';
                    }
                }
            }
        ?>
                </form>
                
            </div>
            
        </div>

    </main>

</body>

</html>