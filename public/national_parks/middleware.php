<?php

function loadParks($dbc, $offset = 0){

  $stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT 4 OFFSET :offset");
  $stmt->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function countParksPages($dbc) {
  $count = $dbc->query("SELECT count(*) FROM national_parks")->fetchColumn();
  return ceil($count / 4);
}
?>
