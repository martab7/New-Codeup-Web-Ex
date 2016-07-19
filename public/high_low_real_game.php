<?php
function pageController() {
  session_start();

  if (isset($_SESSION['randomNumber'])) {
    $data['status'] = "started";
  } else {
    header('Location: High_Low_Home.php');
  }
  $data = [];

  $data['guess'] = isset($_POST['guess']) ? $_POST['guess'] : '';
  $guess = $data['guess'];

  if($guess) {
    if($guess < $_SESSION['lowNumber']) {
      $data['hint'] = "{$guess} is less than the minimum. Please select a number that is greater than {$_SESSION['lowNumber']}";
    } elseif($guess > $_SESSION['highNumber']) {
      $data['hint'] = "{$guess} is higher than the max. Please select a number that is greater than {$_SESSION['highNumber']}";
    } else {
      if($guess < $_SESSION['randomNumber']) {
        $data['hint'] = "The answer is greater than {$guess}";
      } elseif ($guess > $_SESSION['randomNumber']) {
        $data['hint'] = "The answer is less than {$guess}";
      } else {
        $data['hint'] = "Correct!";
      }
    }
  } else {
    $data['hint'] = 'Guess!';
  }
return $data;
}

extract(pageController());
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
    <?php if($guess) { ?>
      <h2><?= $hint ?></h2>
    <?php } ?>
    <form accept-charset="UTF-8" role="form" method="POST">
                <div class="form-group" >
                  <input class="form-control" placeholder="Your guess goes here" name="guess" type="text" value="">
                </div>

                <input autofocus class="btn btn-lg btn-success btn-block" type="submit" value="Guess">
            </fieldset>
    </form>
    <a href="endgame.php">End Game / Give Up</a>
  </div>
  </body>
</html>
