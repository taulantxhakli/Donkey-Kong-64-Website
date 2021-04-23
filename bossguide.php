<!DOCTYPE html>
<html lang="en">
<head>
    <title>DK 64 Wiki</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="design.css">

</head>
<body>

<div class="header">
  <h1>Donkey Kong 64</h1>
  <h2>Boss Guide</h2>
</div>

<div class="navbar">
  <a href="main.php">Characters</a>
  <a href="maps.php">Levels</a>
  <a href="bossguide.php" class="active">Boss Guide</a>
  <a href="gallery.php">Media</a>

  <!--Part 2 of website project-->
  <a>| Speed Running Section | </a>
  <a href="anyperc.php">Any%</a>
  <a href="101perc.php">101%</a>
  <a href="nolevelearly.php">No Levels Early</a>
</div>

<div class="row">
  <div class="side">
    <h2>Playable Characters</h2>
    <h4>Donkey Kong:</h4>
    <img src="assets/dk.jpg" style="height:200px;">
    <p>Below is the list of bosses this Kong faces:
    </p>
    <img src="assets/DK64_ArmyDillo.png" style="height:90px;"><img src="assets/800px-DK64_King_Kut_Out.png" style="height:90px;"><img src="assets/DK64_King_K._Rool_Boxing.png" style="height:90px;">
    <h4>Diddy Kong:</h4>
    <img src="assets/diddy.jpg" style="height:200px;">
    <p>Below is the list of bosses this Kong faces:
    </p>   
    <img src="assets/800px-DK64_Dogadon.png" style="height:90px;"><img src="assets/800px-DK64_King_Kut_Out.png" style="height:90px;"><img src="assets/DK64_King_K._Rool_Boxing.png" style="height:90px;">
    <h4>Tiny Kong:</h4>
    <img src="assets/tiny.jpg" style="height:200px;">
    <p>Below is the list of bosses this Kong faces:
    </p>     
    <img src="assets/Mad_Jack_DK64.png" style="height:90px;"><img src="assets/800px-DK64_King_Kut_Out.png" style="height:90px;"><img src="assets/DK64_King_K._Rool_Boxing.png" style="height:90px;">
    <h4>Chunky Kong:</h4>
    <img src="assets/chunky.jpg" style="height:200px;">
    <p>Below is the list of bosses this Kong faces:
    </p>  
    <img src="assets/800px-DK64_Dogadon.png" style="height:90px;"><img src="assets/800px-DK64_King_Kut_Out.png" style="height:90px;"><img src="assets/DK64_King_K._Rool_Boxing.png" style="height:90px;">
    <h4>Lanky Kong:</h4>
    <img src="assets/lanky.jpg" style="height:200px;">
    <p>Below is the list of bosses this Kong faces:
    </p> 
    <img src="assets/641px-DK64_Puftoss.png" style="height:90px;"><img src="assets/800px-DK64_King_Kut_Out.png" style="height:90px;"><img src="assets/DK64_King_K._Rool_Boxing.png" style="height:90px;">

  </div>
  <div class="main">
    <h2>DK 64 Boss Battle Guide: Provided by ProsafiaGaming</h2>
    <video height="725px" controls>
      <source src="assets/bossvideo.mp4" type="video/mp4">
      Your browser does not support the video tag. <!-- Text to be shown incase browser doesnt support html5 -->
    </video>

    <!-- PHP portion of the website-->
    <?php
    // official description for the video
		echo "<pre>\n";
    echo "Video Descripton from YouTube: \n";
		echo "All bosses compilation of Donkey Kong 64 without taking damage for Nintendo 64 (1080p & 60fps) \n";
    echo "►No Commentary Gameplay by ProsafiaGaming (2017)◄ \n";
    echo '<a href="https://www.youtube.com/channel/UC-2wnBgTMRwgwkAkHq4V2rg">YouTube Channel</a>';
		echo "</pre>\n";
	?>
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
