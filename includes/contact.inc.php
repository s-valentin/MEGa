<?php

require_once '../includes/db.php';

$name=$_POST['fname'];
$subject=$_POST['subj'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];

$sql= "INSERT INTO contact (name, subject, email, feedback) VALUES ('$name','$subject','$email','$feedback');";
mysqli_query($conn,$sql);
header("Location: ../html/contact.php?sent=success");
