<?php
require_once('../src/Auth.php');

function pageController(){
  session_start();

  if(!Auth::check()) {
    header('Location: login.php');
    exit;
  };
}

pageController();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Authorized</title>
  </head>
  <body>
    <h1>Authorized to continue</h1>
    <h2>Welcome: <?= Auth::user() ?></h2>
    <h3>This is a psuedo facebook page</h3>
    <br>

    <a href="logout.php">Logout</a>

  </body>
</html>
