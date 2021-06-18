<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link rel="stylesheet" href="../css/algebra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>

</head>
<body>
    <div class="container">
        <a href="index.php"><img class="home" src="../resources/svg/calculator.svg" alt="Home"></a>
        <a href="algebra.php"><img class="home" src="../resources/svg/algebra.svg" alt="Home"></a>
        <a href="geometry.php"><img class="home" src="../resources/svg/geometry.svg" alt="Home"></a>
        <a href="trigonometry.php"><img class="home" src="../resources/svg/trigonometry.svg" alt="Home"></a>
    </div>      

    <div class = "bodyTitles">
        <h1>Derivatives</h1>
    </div>

    <div class="card">
        <div class="row">
            
            <div class="column">
                <h2>Formulas</h2>

                <math display='block'>
                    <mrow>
                    <msup>
                    <mi>c</mi>
                    <mo>&#x0027;</mo>
                    </msup>
                    <mo>=</mo><mn>0</mn></mrow>
                </math>

                <math display='block'>
                    <mrow>
                    <msup>
                    <mi>x</mi>
                    <mo>&#x0027;</mo>
                    </msup>
                    <mo>=</mo><mn>1</mn></mrow>
                </math>

                <math display='block'>
                    <mrow>
                    <msup>
                    <mrow>
                    <mfenced>
                    <mrow>
                    <msup>
                    <mi>x</mi>
                    <mi>n</mi>
                    </msup>
                    </mrow>
                    </mfenced></mrow>
                    <mo>&#x0027;</mo>
                    </msup>
                    <mo>=</mo><mi>n</mi><msup>
                    <mi>x</mi>
                    <mrow>
                    <mi>n</mi><mo>&#x2212;</mo><mn>1</mn></mrow>
                    </msup>
                    </mrow>
                </math>
                   
                <math display='block'>
                    <mrow>
                    <msup>
                    <mrow>
                    <mo stretchy='false'>(</mo><msqrt>
                    <mi>x</mi>
                    </msqrt>
                    <mo stretchy='false'>)</mo></mrow>
                    <mo>&#x0027;</mo>
                    </msup>
                    <mo>=</mo><mfrac>
                    <mn>1</mn>
                    <mrow>
                    <mn>2</mn><msqrt>
                    <mi>x</mi>
                    </msqrt>
                    </mrow>
                    </mfrac>
                    </mrow>
                </math>
                   
                <math display='block'>
                    <mrow>
                    <msup>
                    <mrow>
                    <mfenced>
                    <mrow>
                    <mfrac>
                    <mn>1</mn>
                    <mi>x</mi>
                    </mfrac>
                    </mrow>
                    </mfenced></mrow>
                    <mo>&#x0027;</mo>
                    </msup>
                    <mo>=</mo><mo>&#x2212;</mo><mfrac>
                    <mn>1</mn>
                    <mrow>
                    <msup>
                    <mi>x</mi>
                    <mn>2</mn>
                    </msup>
                    </mrow>
                    </mfrac>
                    </mrow>
                </math>
                
                <math display='block'>
                    <mrow>
                    <msup>
                    <mrow>
                    <mo stretchy='false'>(</mo><msup>
                    <mi>e</mi>
                    <mi>x</mi>
                    </msup>
                    <mo stretchy='false'>)</mo></mrow>
                    <mo>&#x0027;</mo>
                    </msup>
                    <mo>=</mo><msup>
                    <mi>e</mi>
                    <mi>x</mi>
                    </msup>
                    </mrow>
                </math>
                   
            </div>
                
            <div class="middle"></div>

            <div class="column" id="column2">
                <h2>Resources</h2>

                <a href="https://www.youtube.com/watch?v=YVBFrxipZNU" target="_blank">
                    <p>
                        Short youtube video explaining
                            <br> what a formula is
                    </p> 
                </a>

                <a href="#">
                    <p>
                        My highschool math portfolio(To be added)
                    </p>    
                </a>

                <a href="http://www.math.ubbcluj.ro/~anisiu/geologie/TABEL%20-%20Derivate%20si%20integrale.pdf" target="_blank">
                    <p>
                        Integrals and derivatives formulas
                    </p>
                </a>

                <p>
                    You just need to grind these out. Remember the relation between integrals and derivatives.
                    Example: if x' = 1, then integral of 1 equals x.
                </p>

            </div>
        </div>

    </div>
    
    
    
</body>
</html>