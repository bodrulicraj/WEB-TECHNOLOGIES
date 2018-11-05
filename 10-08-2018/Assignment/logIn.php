<?php ?>
<html>
<head>
<style>
	.error {color: #FF0000;}
	a{
		text-decoration: none;
	}
</style>
</head>
<body>
	<h2>Login Form</h2>
	<form name="login" method="post" action="loguser.php">  
		Username: <input type="text" name="username"></br></br>
		Password: <input type="password" name="password"></br></br>

		<input type="submit" value="Submit">
		<button><a href='home.php'>Home</a></button>
	</form>
</body>
</html>