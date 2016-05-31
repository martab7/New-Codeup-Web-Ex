<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>
</head>
<body>
<div>
	<h2>User Login</h2>
	<form method="POST" action="/my_first_form.php">
		<div>
			<label for="martab7">Username</label>
			<input id="username" name="username" type="text" placeholder="Username">
		</div>
		<div>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" placeholder="Password">
		</div>
		<div>
			<input type="submit" name="submit" value="Login">
		</div>
	</form method="POST" action="/my_first_form.php">
</div>
<div>
	<h2>Compose an Email</h2>
	<form>
		<div>
			<label for="to">To</label>
			<input id="to" name="to" type="text">
		</div>
		<div>
			<label for="from">From</label>
			<input id="from" type="text" name="from">
		</div>
		<div>
			<label for="subject">Subject</label>
			<input id="subject" type="text" name="subject">
		</div>
		<div>
			<textarea id="email_body" name="email_body" rows="5" cols="40">Content Here</textarea>
		</div>
		<div>
			<input type="submit" name="submit" value="Submit">
			<input type="checkbox" id="save_email" name="save_email" value="yes" checked>
			<label for="save_email">Save this email</label>
		</div>
	</form>
</div>
<div>
	<form>
		<h2>Multiple Choice Test</h2>
		<p>What is my first name?</p>
		<label>
			<input type="radio" name="q1" value="John">
			John
		</label>
		<label>
			<input type="radio" name="q1" value="Anthony">
			Anthony
		</label>
		<label>
			<input type="radio" name="q1" value="Dan">
			Dan
		</label>
		<label>
			<input type="radio" name="q1" value="Larry">
			Larry
		</label>

		<p>What city are we in?</p>
		<label>
			<input type="radio" name="q2" value="San Antonio">
			San Antonio
		</label>
		<label>
			<input type="radio" name="q2" value="Austin">
			Austin
		</label>
		<label>
			<input type="radio" name="q2" value="Boerne">
			Boerne
		</label>
		<label>
			<input type="radio" name="q2" value="Dallas">
			Dallas
		</label>
		<p><input type="submit" name="submit" value="Submit Checked Items"></p>

		<label for="cups">What color cups are on the table?</label>
		<select id="cups" name="cups" multiple>
			<option value="red">Red</option>
			<option value="yellow">Yellow</option>
			<option value="green">Green</option>
		</select>
	</form>
		<p>What operating system have you used?</p>
		<label><input type="checkbox" id="os1" name="os[]" value="linux"> Linux</label>
		<label><input type="checkbox" id="os2" name="os[]" value="osx"> OS X</label>
		<label><input type="checkbox" id="os3" name="os[]" value="windows"> Windows</label>
		<p><input type="submit" name="submit" value="Submit"></p>
	</form>
</div>	
<div>
	<form>
	<h2>Select Testing</h2>
		<label for="happy">Are you happy?</label>
		<select id="happy" name="happy" multiple>
			<option value="1">Yes</option>
			<option value="0">No</option>
		</select>
		<p><input type="submit" name="submit" value="Submit Selection"></p>
	</form>
</div>
</body>
</html>