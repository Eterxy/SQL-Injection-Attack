<!DOCTYPE html>
<html>

<head>
	<title>Login Portal</title>
	<style type="text/css">
		input[type=text],
		input[type=password] {
			padding: 16px;
			margin: 8px;
			border: 1px solid #f1f1f1;
			letter-spacing: 1px;
			border-radius: 3px;
			width: 240px;
		}

		input[type=submit] {
			margin-left: 8px;
			width: 274px;
			border-radius: 3px;
			border: 1px solid #4285f4;
			background-color: #4285f4;
			padding: 16px;
			color: white;
			font-weight: 600;
			cursor: pointer;
		}
	</style>
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