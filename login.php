<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="styleLogin.css">
	<link href="" rel="icon" sizes="16x16" type="image/gif" />
</head>
<body>
	<div class="bg"></div>
	<div class="container">
		<div class="left"></div>
		<div class="right">
			<div class="formBox">
				<h1>Sign In Form</h1>
				<form action="sessionLoginProses.php" method="POST">
					<p>Username</p>
					<input type="text" name="username">
					<p>Password</p>
					<input type="Password" name="password">
					<input type="submit" name="" value="Sign In">
					<a href="#">Forgot Password</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>