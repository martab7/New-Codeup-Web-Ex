<?php
function inputHas($key) {
  if(isset($_POST["$key"])) {
    return true;
  } else {
    return false;
  }
}

function inputGet($key) {
  if(inputHas($key) == true) {
    return escape($_POST["$key"]);
  } else {
    return null;
  }
}

function escape($input) {
  return htmlspecialchars(strip_tags($input));
}

?>
