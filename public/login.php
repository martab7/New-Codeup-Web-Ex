<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  checkName($name, $password);
}

function checkName ($name, $password){
  if ($name == 'guest' && $password == 'password'){
    header('Location: authorized.php');
  } else {
    header('Location: HTTP/1.0 404 Not Found');
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
    <link rel="stylesheet" href="login.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login via site</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="POST">
                    <fieldset>
        			    	  	<div class="form-group" >
        			    		    <input class="form-control" placeholder="yourmail@example.com" name="name" type="text">
        			    		  </div>
        			    		  <div class="form-group" >
        			    			  <input class="form-control" placeholder="Password" name="password" type="password" value="">
        			    		  </div>
        			    		  <div class="checkbox">
        			    	     	<label>
        			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
        			    	    	</label>
        			    	    </div>
        			    		  <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
        			    	</fieldset>
			      </form>
                      <hr/>
                    <center><h4>OR</h4></center>
                    <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook">
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
