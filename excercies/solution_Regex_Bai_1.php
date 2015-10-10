<?php
$isValid;
$checkingState;
$pattern = '([0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4})';
$phone_card = (isset($_POST['phone_card']) ? $_POST['phone_card'] : null);
var_dump($phone_card);
if(isset($phone_card))
{	
	if (preg_match($pattern, $phone_card)) {
    $isValid = true;
	$checkingState = 2;
} else {
    $isValid = false;
	$checkingState = 1;
}
}
else
{
	$checkingState = 0;
	$isValid = false;
}

?>
<html>
	<head>		
	</head>
	<body>
		<form action="solution_Regex_Bai_1.php" method="post">
			Phone card: <input type="text" name="phone_card" id="phone_card">			
			<br>
			<?php
				if (!$isValid) {
					echo "<h1> Vui long nhap lai du lieu!</h1>";
				}
				else
				{
					echo "<h1> OK Du lieu dung...</h1>";
				}
				if ($checkingState == 0) {
					echo "<h1> Vui long nhap du lieu!</h1>";
				}
				else if ($checkingState == 1)
				{
					echo "<h1> Du lieu khong hop le</h1>";
				}
				else
				{
					echo "<h1> OK Du lieu dung...</h1>";
				}
			?>
			<br>
			<input type="submit" value="submit">
		</form>
	</body>
</html>