<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

</head>

<body>
    <div class="navbar">
        <a href="index.php"><img class="home" src="../resources/svg/calculator.svg" alt="Home" /></a>
    </div>
    <div class="user">
        <div class="avatar">
            <?php
                include '../php/queryAvatar.php';

                $imageNumber = $row["avatar_number"];
                echo '<img class="avatarSVG" src="../resources/userAvatars/avatar('.$imageNumber.').svg" alt="avatar">'
            ?>


        </div>
        <p class="username">
            <?php
                echo $row["username"];
            ?>
        </p>
    </div>

    <div class="equations">
        <div class="square">
            <div class="eq">
                <math display="block">
                    <mstyle scriptlevel="-2">
                        <mrow>
                            <mi>cos</mi>
                            <mo>&#8289;</mo>
                            <mo>(</mo>
                            <msup>
                                <mi>x</mi>
                                <mn>3</mn>
                            </msup>
                            <mo>)</mo>
                            <msup>
                                <mfenced>
                                    <mrow>
                                        <mi>a</mi>
                                        <mo>+</mo>
                                        <mi>b</mi>
                                    </mrow>
                                </mfenced>
                                <mn>2</mn>
                            </msup>
                            <msup>
                                <mfenced>
                                    <mrow>
                                        <mi>a</mi>
                                        <mo>+</mo>
                                        <mi>b</mi>
                                    </mrow>
                                </mfenced>
                                <mn>2</mn>
                            </msup>
                            <msup>
                                <mfenced>
                                    <mrow>
                                        <mi>a</mi>
                                        <mo>+</mo>
                                        <mi>b</mi>
                                    </mrow>
                                </mfenced>
                                <mn>2</mn>
                            </msup>
                            <msup>
                                <mfenced>
                                    <mrow>
                                        <mi>a</mi>
                                        <mo>+</mo>
                                        <mi>b</mi>
                                    </mrow>
                                </mfenced>
                                <mn>2</mn>
                            </msup>
                        </mrow>
                    </mstyle>
                </math>
            </div>
            <div class="statistics">
                <p class="statText">
                    Rating: 69
                </p>
                <p class="statText">
                    Corect: 140
                </p>
                <p class="statText">
                    Gresit: 20
                </p>
            </div>
        </div>
        <div class="square">
            <div class="eq">
                <math display="block">
                    <mstyle scriptlevel="-2">
                        <mrow>
                            <mrow>
                                <mi>lim</mi>
                                <mo>&#8290;</mo>
                                <mi>x</mi>
                            </mrow>
                            <semantics>
                                <mo>&rarr;</mo>
                                <annotation encoding='Mathematica'>&quot;\[Rule]&quot;</annotation>
                            </semantics>
                            <mrow>
                                <mi>infinite</mi>
                                <mo>&#8289;</mo>
                                <mo>(</mo>
                                <mrow>
                                    <msup>
                                        <mi>x</mi>
                                        <mn>2</mn>
                                    </msup>
                                    <mo>+</mo>
                                    <mrow>
                                        <mn>2</mn>
                                        <mo>&#8290;</mo>
                                        <mi>x</mi>
                                    </mrow>
                                    <mo>+</mo>
                                    <mn>3</mn>
                                </mrow>
                                <mo>)</mo>
                            </mrow>
                        </mrow>
                    </mstyle>
                </math>
            </div>
            <div class="statistics">
                <p class="statText">
                    Rating: 69
                </p>
                <p class="statText">
                    Corect: 140
                </p>
                <p class="statText">
                    Gresit: 20
                </p>
            </div>
        </div>

    </div>

</body>