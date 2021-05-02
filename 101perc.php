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
  <?php
    include 'includes/nav.php';
  ?>
</div>

<div class="row">
  <div class="side">
  <!--Speedrunning information-->
  <h2>Rules</h2>
    <p>These rules apply to every DK64 category:</p>
    <p>• Time starts upon activation of intro story [w/ ISG] or upon starting file [w/o ISG]</p>
    <p>• Time ends upon the start of the cutscene where K. Rool gets punched</p>
    <p>• Start from a fresh file</p>
    <p>• RTA timing MUST be used, NOT the in-game time</p>
    <p>• In-game cheats are BANNED</p>
    <p>• You may only open the VC menu or Home menu to reset the game, change controller settings or open the instruction booklet. However, accidentally opening the VC menu is tolerated as long as no advantage is gained using it.</p>
    <p>• All forms of Wii U VC injects are banned, you must use a copy purchased from the Wii U VC shop to use the Wii U VC version of the game</p>
    <p>• Only official Nintendo releases are allowed, unofficial emulators are banned</p>

    <a href="101get.php?run=101%&follow=File select screen must say 101% after the run">Display Section Rules</a>

  </div>
  <div class="main">
    <?php
      include 'includes/101db.php';

      echo "Database has been reloaded at: ";
      echo date("r");
    ?>
  </div>
</div>

<?php
      include 'includes/footer.php';
?>

</body>
</html>
