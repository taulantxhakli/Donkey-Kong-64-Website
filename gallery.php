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
  <a href="bossguide.php">Boss Guide</a>
  <a href="gallery.php" class="active">Media</a>

  <!--Part 2 of website project-->
  <a>| Speed Running Section | </a>
  <a href="anyperc.php">Any%</a>
  <a href="101perc.php">101%</a>
  <a href="nolevelearly.php">No Levels Early</a>
</div>

<div class="row">
  <div class="side">
  <!--Music section for the site. -->
  <!--users are able to control audio, play and download individual songs. -->
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

  <div class="mySlides">
    <img src="assets/dkislesoverview.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/dklogo.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/dk.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/diddy.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/tiny.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/chunky.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/lanky.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/k.rool.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/madjack.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/fly.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/armadillo.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="assets/puftoss.jpg" style="width:100%">
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
    <div class="column">
      <img class="demo cursor" src="assets/dkislesoverview.png" style="width:100%" onclick="currentSlide(7)" alt="Dk Isles Overview">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/dklogo.png" style="width:100%" onclick="currentSlide(8)" alt="Dk Logo">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/dk.jpg" style="width:100%" onclick="currentSlide(9)" alt="Donkey Kong">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/diddy.jpg" style="width:100%" onclick="currentSlide(10)" alt="Diddy Kong">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/tiny.jpg" style="width:100%" onclick="currentSlide(11)" alt="Tiny Kong">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/chunky.jpg" style="width:100%" onclick="currentSlide(12)" alt="Chunky Kong">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/lanky.jpg" style="width:100%" onclick="currentSlide(13)" alt="lanky Kong">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/k.rool.jpg" style="width:100%" onclick="currentSlide(14)" alt="King K. Rool">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/madjack.jpg" style="width:100%" onclick="currentSlide(15)" alt="Mad Jack">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/fly.jpg" style="width:100%" onclick="currentSlide(16)" alt="Dogadon">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/armadillo.jpg" style="width:100%" onclick="currentSlide(17)" alt="Army Dillo">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/puftoss.jpg" style="width:100%" onclick="currentSlide(18)" alt="Puftoss">
    </div>
  </div>
</div>
<script> //java script for gallery
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

<!--Footer for each page-->
<div class="siteFooterBar">
    <div class="content">
        <img src="assets/footer_symbol.png" >
            <div class="foot">2021 @</div>
            <div class="foot">Taulant Xhakli</div>
    </div>
</div>

</body>
</html>
