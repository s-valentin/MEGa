<?php

if(isset($_POST["forgotpassword-submit"])){

    $selector=bin2hex(random_bytes(8));
    $token= random_bytes(32);
    $url="www.mega.com/forgottenpassword/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires=date("U") + 1800;
    require_once '../includes/db.php';

    $userEmail=$_POST["email"];
    $sql= "DELETE FROM passwordreset WHERE passResetEmail=?";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "error";
        exit();
    } else{
        mysqli_stmt_bind_param($stmt,"s",$userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql= "INSERT INTO passwordreset(passResetEmail,passResetSelector,passResetToken,passResetExpires) VALUES (?,?,?,?);";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "error";
        exit();
    } else{
        $hashedToken=password_hash($token,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    $to=$userEmail;

    $subject= "Reset your password for mega";

    $message= '<p>We received a password reset request. The link to reset your password make this request, you can igore this email</p>';
    $message .='<p>Here is your password reset link: </br>';
    $message .= '<a href="' .$url . '">' .$url .'</a></p>';

    $headers= "From: mega <acs200035@gmail.com>\r\n";
    $headers .= "Reply-To: acs200035@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";
}
else{
    header("Location: ../html/index.php");

    mail($to,$subject,$message,$headers);
    header("Location: ../html/forgotpassword.php?reset=success");
}

