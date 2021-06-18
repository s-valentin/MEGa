<?php

include_once '../includes/db.php';
// Export file in php

if (isset($_POST['export'])) {
    $query  = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
          $output  = "";
          $output .= "<table class='table table-striped'>
                 <thead>
               <tr>
                 <th>Id</th>
                 <th>Name</th>
                <th>Email</th>
               </tr>
            </thead>";
        while ($data = mysqli_fetch_assoc($result)) {
        $output .=	"<tr>
            <td>".$data['userId']."</td>
            <td>".$data['usersName']."</td>
            <td>".$data['userEmail']."</td>
        </tr>";
        }

        $output .="</table>";

        header('Content-Type: application/xls');
      header('Content-Disposition: attachment; filename=download.xls'); 

        echo $output;
    }else{
        echo "No record found";
    }
}