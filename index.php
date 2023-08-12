<?php
require_once "components/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="components/style.css">
    <title>Kämppä.fi</title>
  </head>
  <body>
    <h1>Kämppä.fi</h1>
    <h2>Vapaana olevat asunnot</h2>
    <?php
    $apartments = getAllApartments();
    echo "<div id='main-container'>";
    foreach ($apartments as $apartment) {
      echo "<div id='sub-container'>";
      echo "<h3><b> Osoite: </b>" . $apartment['osoite'] . "</h3>";
      echo "<img src='" . $apartment['kuva'] . "' alt='Kuva osoitteen " . $apartment['osoite'] . " asunnosta'>";
      echo "<p><b> Kohteen numero: </b>" . $apartment['asuntoID'] . "</p>";
      echo "<p><b> Alue: </b>" . $apartment['alue'] . "</p>";
      echo "<p><b> Vuokra: </b>" . $apartment['vuokra'] . "</p>";
      echo "</div>";
    }
    echo "</div>";
    ?>
  </body>
</html>
