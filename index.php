<!DOCTYPE html>
<html>

<head>
	<title>Login Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form action="home.php" method="POST" autocomplete="off">
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?> </p>
		<?php } ?>
		<input type="text" name="username" placeholder="Username" /><br />

		<!-- change type to text when testing the attack change back when done-->
		<input type="text" name="password" placeholder="********" /><br />
		<input type="submit" name="login" value="LOGIN" />
	</form>
</body>

</html>