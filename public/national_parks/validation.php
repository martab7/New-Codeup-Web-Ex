<?php

function checkRequest($dbc, $request){
  if($request < 1) {
    $request = 1;
    return $request;
  }
  if($request > countParksPages($dbc)) {
    $request = countParksPages($dbc);
    return $request;
  }
}

function escape($input) {
  return htmlspecialchars(strip_tags($input));
}

function isDate($newDate){
  if($newDate >= date('Y-m-d')){
    return NULL;
  } else {
    return $newDate;
  }
}
