<?php

if(isset($_POST["submit"]))
{

    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $rptpassword=$_POST["rptpassword"];

    require_once '../includes/connection.php';
    require_once '../includes/functions.php';


    if(invalidEmail($email)!==false)
    {
        header("location:../html/signup.php?error=invalidEmail");
        exit();
    }

    if(passwordMatch($password,$rptpassword)!==false)
    {
        header("location:../html/signup.php?error=passwordNotMatching");
        exit();
    }
    if(invalidUsername($username)!==false)
    {
        header("location:../html/signup.php?error=invalidUsername");
        exit();
    }

    if(usernameTaken($conn,$username,$email)!==false)
    {
        header("location:../html/signup.php?error=usernameTaken");
        exit();
    }
    createUser($conn,$username,$email,$password);
    
}
else{
    header("location:../html/signup.php");
    exit();
}
?>