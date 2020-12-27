<?php include('server.php') ?>
<html>
<head>
<meta charset="utf-8">

	<title>Login system</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">
		<?php include("errors.php"); ?>

		

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="Register.php">Register</a>
		</p>
	</form>

</body>
</html>
