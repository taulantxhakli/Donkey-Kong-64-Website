<!DOCTYPE html>
<html lang="en">
<head>
    <title>DK 64 Wiki</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/gal.css">

</head>
<body>

<!--Over the header image-->
<div class="header">
  <h1>Donkey Kong 64</h1>
  <h2>Speedrun</h2>
</div>

<!--Navigate to other pages-->
<div class="navbar">
  <a href="main.php">Characters</a>
  <a href="maps.php">Levels</a>
  <a href="bossguide.php">Boss Guide</a>
  <a href="gallery.php">Media</a>

  <!--Part 2 of website project-->
  <a>| Speed Running Section | </a>
  <a href="anyperc.php">Any%</a>
  <a href="101perc.php">101%</a>
  <a href="nolevelearly.php" class="active">No Levels Early</a>
</div>

<div class="row">
  <div class="side">
  <!--Playable Kongs description and images-->
    <h2>Playable Characters</h2>
    <h4>Donkey Kong:</h4>
    <img src="assets/dk.jpg" style="height:200px;">
    <p>Leader of the bunch. Donkey Kong is a well-rounded ape with the basics for the player to get started. He collects yellow bananas, coins, and blueprints
      (as shown below). 
    </p>
    <img src="assets/yellow_Banana.gif" style="height:90px;"><img src="assets/yellow_Banana_Coin.gif" style="height:90px;"><img src="assets/yellow_Blueprint.gif" style="height:90px;">
  </div>
  <div class="main">
    <?php
      include 'includes/nolevdb.php';
    ?>
  </div>
</div>

<?php
      include 'includes/footer.php';
?>

</body>
</html>
