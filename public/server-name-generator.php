<?php
$adjs = ['great', 'fun', 'crazy', 'lazy', 'funny', 'not funny', 'pompous', 'bombastic'];
$nouns = ['Anthony', 'Brandon', 'Cam', 'TJ', 'Anna', 'Rob', 'Gavin', 'Allan'];

$randomAdj = array_rand($adjs, 1);
$randomName = array_rand($nouns, 1);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Name Generator</title>
  </head>
  <body>
    <hi> <?php echo "Hey! Did you hear that {$nouns[$randomName]} is {$adjs[$randomAdj]}?"; ?></h1>
  </body>
</html>
