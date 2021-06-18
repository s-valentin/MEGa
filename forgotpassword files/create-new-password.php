<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MEGa</title>
    <link rel="shortcut icon" type="image/png" href="img/MEGa.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    
    <main>
        <div class="background">
            <div class="text">
                <?php
                $selector=$_GET["selector"];
                $validator=$_GET["validator"];
                if(empty($selector) || empty($validator)){
                    echo "Couldn't validate your request!";
                } else{
                    if(ctype_xdigit($selector)!= false && ctype_xdigit($validator)!==false){
                        ?>
                        <form action="../includes/reset-password.inc.php" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                        <input type="password" name="password" placeholder="Enter a new password...">
                        <input type="password" name="passwordRepeat" placeholder="Repeat the new password...">
                        <button type="submit" name="resetPasswordSubmit">Reset Password</button>
                        </form>
                        <?php
                    }
                }
                ?>
            </div>

        </div>
    </main>

</body>

</html>