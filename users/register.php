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
<h1>Users Registeration form </h1>
<form action="validate.php">
	<input type="text" name="username" required placeholder="username"><br>
	<input type="email" name="email" required placeholder="Email"><br>
	<input type="password" name="password" required placeholder="enter password"><br>
	<button type="submit">Register</button>
	<span>Already registered? login<a href="login.php"> here</a></span>


</form>
</body>
</html>