<!DOCTYPE html>
<html lang="en">
<head>
    <title>DK 64 Wiki</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="gal.css">

</head>
<body>

<div class="header">
  <h1>Donkey Kong 64</h1>
  <h2>Game Gallery</h2>
</div>

<div class="navbar">
  <a href="main.php">Characters</a>
  <a href="maps.php">Levels</a>
  <a href="secrets.php">Secrets</a>
  <a href="gallery.php" class="active">Gallery</a>
</div>

</header>
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="assets/dkbanner.jpg" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="assets/blocker.png" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="assets/angryaztec.png" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="assets/dktreehouse.png" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="assets/funkyarmory.png" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="assets/crankyslab.png" style="width:80%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="assets/dkbanner.jpg" style="width:100%" onclick="currentSlide(1)" alt="DK Banner">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/blocker.png" style="width:100%" onclick="currentSlide(2)" alt="B-Locker">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/angryaztec.png" style="width:100%" onclick="currentSlide(3)" alt="Angry Aztec">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/dktreehouse.png" style="width:100%" onclick="currentSlide(4)" alt="DK Tree House">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/funkyarmory.png" style="width:100%" onclick="currentSlide(5)" alt="Funky Armory">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/crankyslab.png" style="width:100%" onclick="currentSlide(6)" alt="Cranky's Laboratory">
    </div>
  </div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<div class="siteFooterBar">
  <div class="content">
      <img src="assets/footer_symbol.png" >
          <div class="foot">2021 @</div>
          <div class="foot">Taulant Xhakli</div>
  </div>
</div>
</body>
</html>
<!--<div class="banan">BANAN</div>-->