<?php
function pageController(){
  session_start();

  $data = [];

  if (isset($_SESSION['logged_in_user'])) {
    $data['name'] = 'Guest';
  } else {
    header('Location: login.php');
  }

  return $data;
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Authorized</title>
  </head>
  <body>
    <h1>Authorized to continue</h1>
    <h2>Welcome: <?= $name ?></h2>
    <h3>This is a psuedo facebook page</h3>
    <br>

    <a href="login.php">Logout</a>

    <a href="logout.php">Logout</a>

  </body>
</html>
