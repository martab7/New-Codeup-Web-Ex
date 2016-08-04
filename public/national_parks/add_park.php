<?php
require __DIR__ . '/../../park_constants.php';
require __DIR__ . '/../../db_connect.php';
require ('Input.php');

function pageController($dbc)
{
    // require('model.php');
    $newPark = [];

    // The player's identifier should be in the query string
    $newParkName = Input::get('name');
    $newLocation = Input::get('location');
    $newDate = Input::get('date');
    $newArea = Input::get('area_in_acres');
    $newDescription = Input::get('description');

    if($newParkName != null && $newLocation != NULL && $newDate != NULL && $newArea != NULL && $newDescription != NULL){
      $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
          VALUES(:name, :location, :date_established, :area_in_acres, :description)');
      $stmt->bindValue(':name', $newParkName, PDO::PARAM_STR);
      $stmt->bindValue(':location', $newLocation, PDO::PARAM_STR);
      $stmt->bindValue(':date_established', $newDate, PDO::PARAM_STR);
      $stmt->bindValue(':area_in_acres', $newArea, PDO::PARAM_STR);
      $stmt->bindValue(':description', $newDescription, PDO::PARAM_STR);
      $stmt->execute();
    };
}
pageController($dbc);

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
            <h1>Search Below</h1>
            <!-- <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p> -->
            <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
          </div>
        </div>
    </header>  <!-- End of header ----------->

  <div class="main">
    <form method="post" class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">
                Park Name
            </label>
            <div class="col-sm-10">
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    placeholder="Park Name"
                >
            </div>
        </div>
        <div class="form-group">
            <label for="position" class="col-sm-2 control-label">
                Location
            </label>
            <div class="col-sm-10">
              <?php include('select_option_partial.php') ?>
            </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">
              Date
          </label>
          <div class="col-sm-10">
              <input
                  type="text"
                  class="form-control"
                  name="date"
                  id="date"
                  placeholder="YYYY-MM-DD"
              >
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">
              Area (km<sup>2</sup>)
          </label>
          <div class="col-sm-10">
              <input
                  type="text"
                  class="form-control"
                  name="area_in_acres"
                  id="area_in_acres"
                  placeholder="km"
              >
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">
              Description
          </label>
          <div class="col-sm-10">
              <input
                  type="text"
                  class="form-control"
                  name="description"
                  id="description"
                  placeholder="Best park in the nation!"
              >
          </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                    </span>
                    Save
                </button>
            </div>
        </div>
    </form>
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
