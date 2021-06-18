<?php

if(isset($_POST["submit"])){
    $username=$_POST["usersname"];
    $password=$_POST["password"];

    include '../includes/db.php';
    include '../includes/functions.php';
    
   loginUser($conn ,$username,$password);
    
}
else{
    header("location:../html/login.php");
    exit();
}