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

function escape($input) {
  return htmlspecialchars(strip_tags($input));
}

?>
