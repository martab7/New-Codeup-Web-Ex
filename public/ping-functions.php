<?php
function inputHas($key) {
  if(isset($_GET["$key"])) {
    return true;
  } else {
    return false;
  }
}

function inputGet($key) {
  $startingValue = 0;
  if(inputHas($key) == true) {
    return escape($_GET["$key"]);
  } else {
    return $startingValue;
  }
}

// if(!isset($_GET['hit'])){
//   $data['value'] = $startingValue;
// } else {
//   $data['value'] = $_GET['hit'];
// }

function escape($input) {
  return htmlspecialchars(strip_tags($input));
}

?>
