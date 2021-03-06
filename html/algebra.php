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
        <a href="geometry.php"><img class="home" src="../resources/svg/geometry.svg" alt="Home"></a>
        <a href="trigonometry.php"><img class="home" src="../resources/svg/trigonometry.svg" alt="Home"></a>
        <a href="calculus.php"><img class="home" src="../resources/svg/calculus.svg" alt="Home"></a>
    </div>

    <div class = "bodyTitles">
        <h1>Abbreviated calculation <br> and median formulas</h1>
    </div>

    <div class="card">
        <div class="row">
            
            <div class="column">
                <h2>Formulas</h2>
                    <math display='block'>
                        <mrow>
                        <msup>
                        <mrow>
                        <mo stretchy='false'>(</mo><mi>a</mi><mo>&#x00B1;</mo><mi>b</mi><mo stretchy='false'>)</mo></mrow>
                        <mn>2</mn>
                        </msup>
                        <mo>=</mo><msup>
                        <mi>a</mi>
                        <mn>2</mn>
                        </msup>
                        <mo>&#x00B1;</mo><mn>2</mn><mi>a</mi><mi>b</mi><mo>+</mo><msup>
                        <mi>b</mi>
                        <mn>2</mn>
                        </msup>
                        </mrow>
                    </math>

                    <math display='block'>
                        <mrow>
                        <mo stretchy='false'>(</mo><mi>a</mi><mo>+</mo><mi>b</mi><mo stretchy='false'>)</mo><mo stretchy='false'>(</mo><mi>a</mi><mo>&#x2212;</mo><mi>b</mi><mo stretchy='false'>)</mo><mo>=</mo><msup>
                        <mi>a</mi>
                        <mn>2</mn>
                        </msup>
                        <mo>&#x2212;</mo><msup>
                        <mi>b</mi>
                        <mn>2</mn>
                        </msup>
                        </mrow>
                    </math>

                    <math display='block'>
                        <mrow>
                        <msup>
                        <mrow>
                        <mo stretchy='false'>(</mo><mi>a</mi><mo>&#x00B1;</mo><mi>b</mi><mo stretchy='false'>)</mo></mrow>
                        <mn>3</mn>
                        </msup>
                        <mo>=</mo><msup>
                        <mi>a</mi>
                        <mn>3</mn>
                        </msup>
                        <mo>&#x00B1;</mo><mn>3</mn><msup>
                        <mi>a</mi>
                        <mn>2</mn>
                        </msup>
                        <mi>b</mi><mo>+</mo><mn>3</mn><mi>a</mi><msup>
                        <mi>b</mi>
                        <mn>2</mn>
                        </msup>
                        <mo>&#x00B1;</mo><msup>
                        <mi>b</mi>
                        <mn>3</mn>
                        </msup>
                        </mrow>
                    </math>

                    <math display='block'>
                        <mrow>
                        <msup>
                        <mi>a</mi>
                        <mn>3</mn>
                        </msup>
                        <mo>&#x00B1;</mo><msup>
                        <mi>b</mi>
                        <mn>3</mn>
                        </msup>
                        <mo>=</mo><mo stretchy='false'>(</mo><mi>a</mi><mo>&#x00B1;</mo><mi>b</mi><mo stretchy='false'>)</mo><mo stretchy='false'>(</mo><msup>
                        <mi>a</mi>
                        <mn>2</mn>
                        </msup>
                        <mo>&#x00B1;</mo><mi>a</mi><mi>b</mi><mo>+</mo><msup>
                        <mi>b</mi>
                        <mn>2</mn>
                        </msup>
                        <mo stretchy='false'>)</mo></mrow>
                    </math>
                       

                    <math display='block'>
                        <mrow>
                        <msub>
                        <mi>m</mi>
                        <mi>a</mi>
                        </msub>
                        <mo>=</mo><mfrac>
                        <mrow>
                        <msub>
                        <mi>a</mi>
                        <mn>1</mn>
                        </msub>
                        <mo>+</mo><msub>
                        <mi>a</mi>
                        <mn>2</mn>
                        </msub>
                        <mo>+</mo><mn>...</mn><mo>+</mo><msub>
                        <mi>a</mi>
                        <mi>n</mi>
                        </msub>
                        </mrow>
                        <mi>n</mi>
                        </mfrac>
                        </mrow>
                    </math>
                       
                    <math display='block'>
                        <mrow>
                        <msub>
                        <mi>m</mi>
                        <mi>g</mi>
                        </msub>
                        <mo>=</mo><mroot>
                        <mrow>
                        <msub>
                        <mi>a</mi>
                        <mn>1</mn>
                        </msub>
                        <mo>&#x22C5;</mo><msub>
                        <mi>a</mi>
                        <mn>2</mn>
                        </msub>
                        <mo>&#x22C5;</mo><mn>...</mn><mo>&#x22C5;</mo><msub>
                        <mi>a</mi>
                        <mi>n</mi>
                        </msub>
                        </mrow>
                        <mi>n</mi>
                        </mroot>
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

                <a href="https://www.e-formule.ro/wp-content/uploads/formule-de-calc-prescurtat.htm" target="_blank">
                    <p>
                        More formulas
                    </p>
                </a>

                <p>
                    Do not memorize these formulas. Try to understand how they're created
                    and how to create the more complex ones from the simpler ones.
                    Example: (a+b)^3 =(a+b)(a+b)^2 
                </p>
            </div>
            
        </div>

    </div>

    <br><br>

    
    
    
</body>
</html>