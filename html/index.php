<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MEGa</title>
    <link rel="shortcut icon" type="image/png" href="img/MEGa.svg">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    
    <div class="container">
         <div class="navbar">
             <nav>
                 <ul>
                     <li class="active"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                     <li><a href="about.php"><i class="fas fa-info"></i> About</a></li>
                     <li><a href="#"><i class="fas fa-graduation-cap"></i> Explore</a>
                        <div class="drop-down1">
                            <ul>
                                <li><a href="algebra.php">Algebra</a></li>
                                <li><a href="geometry.php">Geometry</a></li>
                                <li><a href="trigonometry.php">Trigonometry</a></li>
                                <li><a href="calculus.php">Calculus</a></li>
                            </ul>
                        </div>
                    </li>
                     <li><a href="contact.php"><i class="fas fa-phone-alt"></i> Contact</a></li>
                     <?php
                     if(isset($_SESSION["userName"])){
                         echo "<li><a href='quiz.php'><i class='fas fa-question'></i> Quiz</a></li>";
                         echo "<li><a href='profile.php'><i class='fas fas fa-edit'></i> Post Exercise </a></li>";
                         echo "<li><a href='../includes/logout.inc.php'><i class='fas fa-sign-in-alt'></i> Log out</a></li>";
                     }
                     else{
                         echo"<li><a href='login.php'><i class='fas fa-sign-in-alt'></i> Log In</a></li>";
                     }
                     ?>
                                          
                 </ul>
             </nav>
        </div>
     </div>

        <section>
                <div class="leftside">
                    <img src="../resources/svg/undraw_mathematics_4otb.svg" alt="logo">
                </div>
                <div class="rightside">
                    <div id="text"></div>
                </div>
        </section>
      <script src="../js/text.js">
      </script>
</body>
</html>