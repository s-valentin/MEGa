<?php

	// include database connectivity 

    include_once '../includes/db.php';

    // Import file in php

    if (isset($_POST['import'])) {
    	
    	$fileName = $_FILES["file"]["tmp_name"];

    	if ($_FILES['file']['size'] > 0) {

    		$file = fopen($fileName, "r");

            while (($importData = fgetcsv($file, 10000, ",")) !== FALSE) {

                $username = "";
                if (isset($importData[1])) {
                    $username = mysqli_real_escape_string($conn, $importData[1]);
                }
                $email = "";
                if (isset($importData[2])) {
                    $email = mysqli_real_escape_string($conn, $importData[2]);
                }

                $query = "INSERT INTO users (usersName, userEmail) 
                VALUES('".$username."','".$email."')";
                
                $result = mysqli_query($conn, $query);

                if (!isset($result)) {
                    echo "<script type=\"text/javascript\">
                              alert(\"Invalid File:Please Upload CSV File.\");
                              window.location = \"index.php\"
                          </script>";
                }else{
                    echo "<script type=\"text/javascript\">
                              alert(\"CSV File has been successfully Imported.\");
                              window.location = \"index.php\"
                          </script>";
                }
            }
            fclose($file);
        }
    }

?>