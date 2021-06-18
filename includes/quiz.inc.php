<?php
include '../includes/db.php';

$number=$_GET['n'];

$query= "SELECT * FROM questions WHERE questionNumber =$number";

$result=mysqli_query($conn,$query);
$question= mysqli_fetch_assoc($result);

$query= "SELECT *From c";