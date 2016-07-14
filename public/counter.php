<?php

function pageController() {
  $startingValue = 0;

  if(!isset($_GET['name'])){
    $data['value'] = $startingValue;
  } else {
    $data['value'] = $_GET['name'];
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
    <h4><a href="/counter.php?name=<?= $value + 1 ?>">Up</a></h4>
    <h4><a href="/counter.php?name=<?= $value - 1 ?>">Down</a></h4>
  </body>
</html>
