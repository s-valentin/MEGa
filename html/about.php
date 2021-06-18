<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MEGa</title>
        <link rel="shortcut icon" type="image/png" href="img/MEGa.svg">
        <link rel="stylesheet" href="../css/about.css">
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
        <div class="container2">
            <h1 class="heading"><span>meet</span>Our team</h1>
            <div class="profiles">
                <div class="profile">
                    <img src="../resources/svg/cosmin.jpg" class="profile-image" alt="Cosmin">
                    <h3 class="user-name">Cosmin Sandu</h3>
                </div>
            
            
                <div class="profile">
                    <img src="../resources/svg/andu.png" class="profile-image" alt="Andu">
                    <h3 class="user-name">Catalin Sircu</h3>
                </div>
            
            
                <div class="profile">
                    <img src="../resources/svg/vali.png" class="profile-image" alt="Vali">
                    <h3 class="user-name">Valentin Stanciu</h3>
                </div>
            </div>
            
            <div class="description">
                <h2>
                    We are a team of 3 groupmates and friends, tasked with developing a website
                    for Math Equation Games. The aim of this website is to help students who, like us,
                    struggled with mathematics in highschool.
                </h2>
            </div>

        </div>

        
    </body>
</html>