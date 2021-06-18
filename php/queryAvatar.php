    <?php
    include 'connection.php';
    $conn = OpenCon();
    // echo "Connected Successfully". "<br>";

    $sql = "SELECT * FROM avatar WHERE username = 'cosmin'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while() {
    //       echo "username: " . $row["username"]. "<br>" . "avatar_number: ". $row["avatar_number"] . "<br>";
    //     }
    //   } else {
    //     echo "0 results";
    //   }

    CloseCon($conn);
    ?>