<?php

$censured = $_POST["censurare"];
$description = $_POST["descrizione"];

$lunghezza_stringa_descrizione = strlen($description);


$censured_description = str_replace($censured , '***' , $description);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>


  <h2>Paragrafo:</h2>
  <p>La tua descrizione è: <?php echo $description ?></p>

  <span>Hai utilizzato <?php echo $lunghezza_stringa_descrizione ?> caratteri per la tua descrizione</span>


  <h2>Paragrafo censurato:</h2>
  <p>La tua descrizione è: <?php echo $censured_description ?></p>
  
</body>
</html>