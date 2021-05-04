<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agriculture</title>
    <link rel="stylesheet" href="css/agr.css">
  </head>
  <body>
    <nav>
      <div>
        <h2>Agriculture</h2>
      </div>
      <ul>
        <li>Home</li>
        <li>About Us</li>
      </ul>
    </nav>
    <div class="slide-div">
      <div class="slider">
        <div class="slides">
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio1" />
          <div class="slide first">
            <img src="images/pic1.jpg" />
          </div>
          <div class="slide">
            <img src="images/pic2.jpeg" />
          </div>
          <div class="slide">
            <img src="images/pic3.jpg" />
          </div>
          <div class="slide">
            <img src="images/pic4.jpg" />
          </div>
          <!--automatic slides-->
          <div class="slide-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
        </div>
        <div class="slide-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
      </div>
    </div>
  </body>
</html>
