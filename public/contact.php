<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"><link href="css_bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/resume2.css" rel="stylesheet" type="text/css">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/resume2.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Login dropdown</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Already have an account?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Contact Us</h1>
        <p class="lead blog-description">This is the most efficient way to contact your favorite people here at Codeup!</p>
      </div>
		<div class="col-md-5">
		    <div class="form-area">  
		        <form role="form">
		        <br style="clear:both">
		                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
		    				<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
							</div>
		                    <div class="form-group">
		                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
		                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
		                    </div>
		            
		        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
		        </form>
		    </div>
		    <!-- This is the JS for the form: 
			$(document).ready(function(){ 
			    $('#characterLeft').text('140 characters left');
			    $('#message').keydown(function () {
			        var max = 140;
			        var len = $(this).val().length;
			        if (len >= max) {
			            $('#characterLeft').text('You have reached the limit');
			            $('#characterLeft').addClass('red');
			            $('#btnSubmit').addClass('disabled');            
			        } 
			        else {
			            var ch = max - len;
			            $('#characterLeft').text(ch + ' characters left');
			            $('#btnSubmit').removeClass('disabled');
			            $('#characterLeft').removeClass('red');            
			        }
			    });    
			});
			-->
		</div>
        </div><!-- /.blog-main -->
		<div class="sidebar-group">
		        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
		          <div class="sidebar-module sidebar-module-inset">
		            <h4>About</h4>
		            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		          </div>
		          <div class="sidebar-module">
		            <h4>Archives</h4>
		            <ol class="list-unstyled">
		              <li><a href="#">March 2014</a></li>
		              <li><a href="#">February 2014</a></li>
		              <li><a href="#">January 2014</a></li>
		              <li><a href="#">December 2013</a></li>
		              <li><a href="#">November 2013</a></li>
		              <li><a href="#">October 2013</a></li>
		              <li><a href="#">September 2013</a></li>
		              <li><a href="#">August 2013</a></li>
		              <li><a href="#">July 2013</a></li>
		              <li><a href="#">June 2013</a></li>
		              <li><a href="#">May 2013</a></li>
		              <li><a href="#">April 2013</a></li>
		            </ol>
		          </div>
		          <div class="sidebar-module">
		            <h4>Elsewhere</h4>
		            <ol class="list-unstyled">
		              <li><a href="#">GitHub</a></li>
		              <li><a href="#">Twitter</a></li>
		              <li><a href="#">Facebook</a></li>
		            </ol>
		          </div>
		        </div><!-- /.blog-sidebar -->
		    </div><!-- /.container -->
		</div>
    <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
