<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->



<?php
$string = 'Ciao mondo';
$newText = str_replace("Ciao", "***", $string);
$newText = $_GET ["***"]
 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>esercizio php </title>
  </head>
  <body>
    <?php  echo $newText , strlen($string) ,'caratteri'   ?>

  </body>
</html>
