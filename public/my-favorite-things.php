<?php

$favoriteThings = ['Pizza', 'Movies', 'Baking', 'Rubber Ducks', 'Old School Music'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Favorite Things</title>
    <style media="screen" type="text/css">
      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <th>My Favorite Things</th>
      </tr>
      <?php foreach($favoriteThings as $thing) { ?>
      <tr>
        <td><?php echo $thing; ?></td>
      </tr>
      <?php } ?>
      </tr>
    </table>
  </body>
</html>
