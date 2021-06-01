<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz</title>
    <link rel="stylesheet" href="../css/quiz.css" />
    <link rel="stylesheet" href="../css/canvas.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap"
      rel="stylesheet"
    />
    <script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
  </head>

  <body>
    <div class="navbar">
      <a href="index.php"
        ><img class="home" src="../resources/svg/calculator.svg" alt="Home"
      /></a>
    </div>

    <div class="megaLogo" id="slideLogo" onclick="slideLogo()">
      <ul class="logo-main">
        <li>
          <img
            class="logo"
            src="../resources/svg/alphabet-serious-flat/svg/011-m.svg"
            alt="m"
            onmouseover="this.src='../resources/svg/alphabet-flat/svg/014-m.svg';"
            onmouseout="this.src='../resources/svg/alphabet-serious-flat/svg/011-m.svg';"
          />
        </li>
        <li>
          <img
            class="logo"
            alt="e"
            src="../resources/svg/alphabet-serious-flat/svg/035-e.svg"
            onmouseover="this.src='../resources/svg/alphabet-flat/svg/006-e.svg';"
            onmouseout="this.src='../resources/svg/alphabet-serious-flat/svg/035-e.svg';"
          />
        </li>
        <li>
          <img
            class="logo"
            alt="g"
            src="../resources/svg/alphabet-serious-flat/svg/005-g.svg"
            onmouseover="this.src='../resources/svg/alphabet-flat/svg/008-g.svg';"
            onmouseout="this.src='../resources/svg/alphabet-serious-flat/svg/005-g.svg';"
          />
        </li>
        <li>
          <img
            class="logo"
            alt="a"
            src="../resources/svg/alphabet-serious-flat/svg/001-A.svg"
            onmouseover="this.src='../resources/svg/alphabet-flat/svg/001-A.svg';"
            onmouseout="this.src='../resources/svg/alphabet-serious-flat/svg/001-A.svg';"
          />
        </li>
      </ul>
    </div>
    <script src="../js/slideLogo.js"></script>

    <div class="canvas" id="canvas">
      <div id="middleLine"></div>

      <div id="topBar">
        <p id="leftTopText">Question: #69</p>

        <div class="star-wrapper" id="star-wrapper">
          <a href="#" class="fas fa-star s1"></a>
          <a href="#" class="fas fa-star s2"></a>
          <a href="#" class="fas fa-star s3"></a>
          <a href="#" class="fas fa-star s4"></a>
          <a href="#" class="fas fa-star s5"></a>
          <div class="tooltipRating">
            <span class="tooltipTextRating">4.20</span>
          </div>
        </div>
      </div>

      <div id="equation">
        <math display="block">
          <mrow>
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
        </math>
      </div>

      <div class="answerButtons" id="answerButtons">
        <button>Answer 1</button>
        <button>Answer 2</button>
        <button>Answer 3</button>
        <button>Answer 4</button>
      </div>

      <div class="controlButtons" id="controlButtons">
        <button>Previous</button>
        <button>Random</button>
        <button>Next</button>
      </div>

      <div id="bottomBar">
        <p id="leftBottomText">(category_name)</p>
        <p id="rightBottomText">(easy)</p>
      </div>
    </div>
  </body>
</html>
