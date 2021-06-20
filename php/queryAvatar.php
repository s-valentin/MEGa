    <?php
    include 'connection.php';
    include 'functions.php';
    $conn = OpenCon();
    // echo "Connected Successfully". "<br>";
    $username = $_SESSTION["userName"];
    $userid = $_SESSTION["userid"];

    $sql = "SELECT * FROM user WHERE usersName = 'username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while() {
    //   echo "username: " . $row["username"]. "<br>" . "avatar_number: ". $row["avatar_number"] . "<br>";
    //     }
    //   } else {
    //     echo "0 results";
    // ((x+2)^2 + cos(x-2)*sin(x))^2
    //   }

   # CloseCon($conn);
    ?>