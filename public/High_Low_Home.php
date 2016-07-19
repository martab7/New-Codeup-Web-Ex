<?php
function pageController() {
  session_start();

  if (isset($_SESSION['randomNumber'])) {
    header('Location: high_low_real_game.php');
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lowNumber = isset($_POST['low']) ? $_POST['low'] : '';
    $highNumber = isset($_POST['high']) ? $_POST['high'] : '';
    checkNumbers($lowNumber, $highNumber);
  }
}

function checkNumbers ($lowNumber, $highNumber){
  if ((is_numeric($lowNumber) && is_numeric($highNumber)) && $lowNumber < $highNumber){
    $generatedNumber = mt_rand($lowNumber, $highNumber);
    $_SESSION['randomNumber'] = $generatedNumber;
    $_SESSION['lowNumber'] = $lowNumber;
    $_SESSION['highNumber'] = $highNumber;
    header('Location: high_low_real_game.php');
  } else {
    header('Location: High_Low_Home.php');
  }
}

pageController();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>High Low Game - Start</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <h1>High Low Game</h1>
    <div class="container-fluid">
    <form accept-charset="UTF-8" role="form" method="POST">
                <div class="form-group" >
                  <input class="form-control" placeholder="low number" name="low" type="text" value="">
                </div>
                <div class="form-group" >
                  <input class="form-control" placeholder="high number" name="high" type="text" value="">
                </div>
                <input autofocus class="btn btn-lg btn-success btn-block" type="submit" value="START">
            </fieldset>
    </form>
  </div>
  </body>
</html>
