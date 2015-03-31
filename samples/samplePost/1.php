<?php
$user_name = (isset($_POST['name']) ? $_POST['name'] : null);
$password = (isset($_POST['password']) ? $_POST['password'] : null);
$year = (isset($_POST['year']) ? $_POST['year'] : null);
var_dump($user_name);
var_dump($password);
var_dump($year);
?>

<html>
	<head>
		
	</head>
	<body>
		<form action="1.php" method="post">
			Username: <input type="text" name="name" id="name">
			<br>
			Password: <input type="password" name="password" id="password">
			<br>
			Year: <input type="text" name="year" id="year">			
			<br>
			<?php
				if ($year == NULL || $year < 1900) {
					echo "<h1> Vui long nhap lai du lieu!</h1>";
				}
			?>
			<br>
			<input type="submit" value="submit">
		</form>
	</body>
</html>