<?php

//Builds TR and its TD FOREACH PARK
function formatTable($parks)
{
    $table = "";
    foreach ($parks as $park) {
      $table .= "<tr>"
          . "<td>" . $park['id'] . "</td>"
          . "<td>" . $park['name'] . "</td>"
          . "<td>" . $park['location'] . "</td>"
          . "<td>" . $park['area'] . "</td>"
          . "<td>" . $park['date_established'] . "</td>"
      . "</tr>";
    }
    return $table;
}

?>
