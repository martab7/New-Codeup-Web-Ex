<?php
require __DIR__ . '/../../park_constants.php';
require __DIR__ . '/../../db_connect.php';
require 'controller-index.php';
require_once('Input.php');

$data = array();
function pageController($dbc){
  $request = escape(Input::get('page', 1));

  checkRequest($dbc, $request);

  $offset = ($request-1) * 4;

  $data['parks'] = loadparks($dbc, $offset);
  $data['pageCount'] = countParksPages($dbc);
  $data['page'] = $request;
  return $data;
}

extract(pageController($dbc));
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
        crossorigin="anonymous"
    >
    <title>National Parks Directory</title>
    <link rel="stylesheet" href="national_parks.css" type="text/css">
    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->
  </head>
  <body>
    <header>
    <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="national_parks.php">National Parks</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="add_park.php">Add Park</a></li>
                <!-- <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
                <li><a href="../navbar-fixed-top/">Fixed top</a></li> -->
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

        <div class="jumbotron">
          <div class="container">
            <h1>Add Park</h1>
            <!-- <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p> -->
            <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
          </div>
        </div>
    </header>  <!-- End of header ----------->

  <div class="main">
    <table class="table-responsive">
      <table class="table table-condensed table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Park Name</th>
            <th>State</th>
            <th>Date Established</th>
            <th>Area (km<sup>2</sup>)</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <!-- Generated Table from DB -->
          <?php foreach($parks as $park):?>
          <tr>
            <td><?= $park['id'] ?></td>
            <td><?= $park['name'] ?></td>
            <td><?= $park['location'] ?></td>
            <td><?= $park['date_established'] ?></td>
            <td><?= $park['area_in_acres'] ?></td>
            <td><?= $park['description'] ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </table>
    <ul class="pagination">
      <li class="disabled"><a href="national_parks.php?page=<?= $page - 1 ?>">&laquo;</a></li>
      <?php foreach(range(1, $pageCount) as $page): ?>
      <li><a href="national_parks.php?page=<?= $page ?>"><?= $page ?></a></li>
    <?php endforeach ?>
      <li><a href="national_parks.php?page=<?= $page + 1 ?>">&raquo;</a></li>
    </ul>
  </div>
    <!-- SCRIPTS ----------->
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"
    ></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"
    ></script>

  </body>
</html>
