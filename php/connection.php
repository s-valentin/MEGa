<?php

function OpenCon()
 {
 $dbhost = "sql200.epizy.com:3306";
 $dbuser = "epiz_28819306";
 $dbpass = "VhOb44GhTdmr54l";
 $db = "epiz_28819306_proiect";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>