<!DOCTYPE html>
<html>
<head>
<title>Login Page :BACKEND PHP DEVELOPMENT - NIGERIA</title>
</head>
<body>
<nav>
	<ul>
		<a href="../index.php">Home</a>

	</ul>
</nav>
 <?php
            echo "<p>Hello World!</p>";
        ?>
<h1>Login Page</h1>

<form action="validate.php">
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="password" placeholder="Enter password"><br>
	<button type="submit">Login</button> 
	<a href="forgotpass.php">Forgot password</a> <br>
	<span>Not register? click<a href="register.php"> here</a></span>

</form>

</body>
</html>