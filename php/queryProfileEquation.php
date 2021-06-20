<?php
function ceva(){


    include 'connection.php';
    include 'functions.php';
    $conn = OpenCon();
    echo "Connected Successfully". "<br>";
    $username = $_SESSTION["userName"];
    $sql = "SELECT * FROM ecuatie WHERE username = 'vali'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if($result->num_rows > 0){
        while(){
            echo "<div class=\"square\">
            <div class=\"eq\">
            <p>
                <math display=\"block\">
                    <mstyle scriptlevel=\"-1\">
                        " .$row["equation"]."
                    </mstyle>
                </math>
            </p>
            </div>
            <div class=\"statistics\">
                <p class=\"statText\">
                    Rating: ".$row["rating"]."
                </p>
                <p class=\"statText\">
                    Corect: ".$row["correct_number"]."
                </p>
                <p class=\"statText\">
                    Gresit: ".$row["wrong_number"]."
                </p>
            </div>
        </div>";
        }
    } else {
        echo "No equations added yet :(";
    }

}
   # CloseCon($conn);
    ?>