<?php

function pageController() {
  $startingValue = 1;

  if(!isset($_GET['hit'])){
    $data['value'] = $startingValue;
  } else {
    $data['value'] = $_GET['hit'];
  }

  return $data;
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Counter</title>
  </head>
  <body>
    <h1><?= $value ?></h1>
    <h4><a href="/ping.php?hit=<?= $value + 1 ?>">HIT</a></h4>
    <h4><a href="/ping.php?miss=0">Miss</a></h4>
  </body>
</html>