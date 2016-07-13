<?php

function pageController() {
  $data = array();

  $adjs = ['great', 'fun', 'crazy', 'lazy', 'funny', 'not funny', 'pompous', 'bombastic'];
  $nouns = ['Anthony', 'Brandon', 'Cam', 'TJ', 'Anna', 'Rob', 'Gavin', 'Allan'];

  $data['randomAdj'] = $adjs[array_rand($adjs, 1)];
  $data['randomName'] = $nouns[array_rand($nouns, 1)];
  return $data;
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Name Generator</title>
  </head>
  <body>
    <hi> <?= "Hey! Did you hear that {$randomName} is {$randomAdj}?"; ?></h1>
  </body>
</html>
