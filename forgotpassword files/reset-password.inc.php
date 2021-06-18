<?php

if (isset($_POST["resetPasswordSubmit"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];
    if (empty($password) || empty($passwordRepeat)) {
        header("Location:../html/create-new-password.php?newPassword=empty");
        exit();
    } else if ($password != $passwordRepeat) {
        header("Location:../html/create-new-password.php?newPassword=passwordNotSame");
        exit();
    }
    $currentDate = date("U");
    require '../includes/db.php';

    $sql = "SELECT *FROM passwordreset WHERE passwordSelector=? AND passwordResetExpires >=? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "error";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $selector);
        mysqli_stmt_execute($stmt);



        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            echo "you need to re-submit your reset request.";
            exit();
        } else {
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["passwordResetToken"]);
            if ($tokenCheck === false) {
                echo "you need to re-submit your reset request.";
                exit();
            } elseif ($tokenCheck === true) {
                $tokenEmail = $row['passwordResetEmail'];
                $sql = "SELECT *FROM users WHERE userEmail=?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "error";
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        echo "error.";
                        exit();
                    } else {
                        $sql = "UPDATE users SET userPassword=? WHERE userEmail=?";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "error";
                            exit();
                        } else {
                            $newPasswordHashed=password_hash($password,PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $tokenEmail,$newPasswordHashed,$tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql="DELETE FROM passwordreset WHERE passwordResetEmail=?";
                            $stmt=mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo"there was an error";
                                exit();
                            }else{
                                mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../html/signup.php?newPassword=passwordUpdated");
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    header("Location:../html/index.php");
}
