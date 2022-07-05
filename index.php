<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pix prints </title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

</head>
<body bgcolor="020017">
    <nav>
        <img class="logo" src="img/Pix-Prints-Logo.webp" alt="logo">

        <ul class="nav-links">
            <li>
                <a href="index.php">HOME</a>
            </li>
            <li>
                <a href="gallery.php">GALLERY</a>
            </li>
            <li>
                <a href="about.php">ABOUT</a>
            </li>  
        </ul>

        <div class="burger">
           <div class="line1"></div>
           <div class="line2"></div>
           <div class="line3"></div>
       </div>
 
   </nav>
 
   <hero>
       <img src="img/Screen Shot 2022-06-08 at 11.45.45 AM_auto_x2.jpg" alt="hero" class="responsive">
   </hero>


    <script src="app.js"> </script>


    <div class="container0">
      <div class="image-course">
        <img class="course" src="img/Screen Shot 2022-06-09 at 9.21.22 AM.jpg">
      </div>
      <div class="header">
      <a class="Our-work" href='gallery.php'>Our work</a>
      </div>
    </div>


   <div>
  <div class="carousel">
    <ul class="slides">
      <input type="radio" name="radio-buttons" id="img-1" checked />
      <li class="slide-container">
        <div class="slide-image">
          <img src="img/Screen Shot 2022-05-19 at 9.24.19 AM">
        </div>
        <div class="carousel-controls">
          <label for="img-3" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-2" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-2" />
      <li class="slide-container">
        <div class="slide-image">
          <img src="img/Screen Shot 2022-05-19 at 9.24.19 AM">
        </div>
        <div class="carousel-controls">
          <label for="img-1" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-3" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-3" />
      <li class="slide-container">
        <div class="slide-image">
          <img src="img/Screen Shot 2022-05-19 at 9.24.19 AM">
        </div>
        <div class="carousel-controls">
          <label for="img-2" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-1" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <div class="carousel-dots">
        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
      </div>
    </ul>
  </div>
</div>  



</body>
</html>