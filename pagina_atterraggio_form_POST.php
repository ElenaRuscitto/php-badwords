<?php

$word = $_POST['parolaccia'];
$description = $_POST['descrizione'];
$lunghezza_stringa_descrizione = strlen($description)


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

<h1>ffff</h1>

 
  <p>La tua descrizione è: <?php echo $description ?></p>
  <span>Hai utilizzato <?php echo $description ?> caratteri per la tua descrizione</span>


  <!-- <span>La parolaccia che hai scritto è: <?php echo $word?></span> -->
  
</body>
</html>