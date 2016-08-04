<?php

//Reformats date
function formatDate($input){
  $dateSplice = explode("/", $input);
  $year = array_pop($dateSplice);
  array_unshift($dateSplice, $year);
  $input = implode("-", $dateSplice);
  return $input;
}
