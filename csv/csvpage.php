<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MEGa</title>
    <link rel="shortcut icon" type="image/png" href="img/MEGa.svg">
    <link rel="stylesheet" href="../csv/csvpage.css">
</head>

<body>

    <div class="row">
        <!--- this form is for the Import data--->
        <form action="import_data.php" method="POST" enctype="multipart/form-data" style="margin-left: 500px;">
            <div class="form-group">
                <label>Select File</label>
                <input type="file" name="file" class="form-control" required="">
            </div>
            <div class="form-group">
                <input type="submit" name="import" class="btn btn-primary" value="Upload">
            </div>
        </form>

        
        <!--- This form is for the Export data--->
        <form action="export_data.php" method="POST" style="margin-left:1010px;margin-bottom: 20px;">
            <input type="submit" class="btn btn-success" name="export" value="Export to Excel">
        </form>

        <table class="content-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
        <?php
            include_once '../includes/db.php';

            $query  = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
              while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?php echo $data['userId']?></td>
              <td><?php echo $data['usersName']?></td>
              <td><?php echo $data['userEmail']?></td>
            </tr>
          <?php } } ?> 
      </table>
    </div>

</body>

</html>