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
  <h2>Music and Gallery</h2>
</div>

<div class="navbar">
  <a href="main.php">Characters</a>
  <a href="maps.php">Levels</a>
  <a href="secrets.php">Secrets</a>
  <a href="gallery.php" class="active">Media</a>
</div>

<div class="row">
  <div class="side">
    <h2>Donkey Kong 64 OST Preview</h2>
    <img src="assets/ostcover.jpg" style="height:500px;">
    <p>Main Menu</p>
    <audio controls>
      <source src="ost_sample/Main Menu.mp3" type="audio/mpeg">
    </audio>
    <p>DK's Treehouse</p>
    <audio controls>
      <source src="ost_sample/DK's Treehouse.mp3" type="audio/mpeg">
    </audio>
    <p>Cranky's Lab</p>
    <audio controls>
      <source src="ost_sample/Cranky's Lab.mp3" type="audio/mpeg">
    </audio>
    <p>Pause Menu</p>
    <audio controls>
      <source src="ost_sample/Pause Menu.mp3" type="audio/mpeg">
    </audio>
    <p>Dk Isles</p>
    <audio controls>
      <source src="ost_sample/DK Isle.mp3" type="audio/mpeg">
    </audio>
    <p>K. Lumsy</p>
    <audio controls>
      <source src="ost_sample/K. Lumsy.mp3" type="audio/mpeg">
    </audio>
    <p>Jungle Japes Lobby</p>
    <audio controls>
      <source src="ost_sample/Jungle Japes Lobby.mp3" type="audio/mpeg">
    </audio>
    <p>Jungle Japes</p>
    <audio controls>
      <source src="ost_sample/Jungle Japes.mp3" type="audio/mpeg">
    </audio>
    <p>Angry Aztec Lobby</p>
    <audio controls>
      <source src="ost_sample/Angry Aztec Lobby.mp3" type="audio/mpeg">
    </audio>
    <p>Angry Aztec</p>
    <audio controls>
      <source src="ost_sample/Angry Aztec.mp3" type="audio/mpeg">
    </audio>
    <p>Creepy Castle</p>
    <audio controls>
      <source src="ost_sample/Creepy Castle.mp3" type="audio/mpeg">
    </audio>
  </div>

  
  <div class="main">
<div class="container">

  <h2>Donkey Kong 64 Gallery</h2>
  <div class="mySlides">
    <img src="assets/dkbanner.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/blocker.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/angryaztec.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/dktreehouse.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/funkyarmory.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/crankyslab.png" style="width:100%">
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
</div>


<div class="siteFooterBar">
    <div class="content">
        <img src="assets/footer_symbol.png" >
            <div class="foot">2021 @</div>
            <div class="foot">Taulant Xhakli</div>
    </div>
</div>

</body>
</html>
