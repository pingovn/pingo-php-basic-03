<?php 
	// step 1: get data from request
	$data = (isset($_POST['year']))?$_POST['year']:null;
	// step 2: checking data
	$checking_data = 0;
	if ($data == null) {
		$checking_data = 1;
	}
	else // data != null
	{
		// checking ....
		// 
		$checking_data = 2;
	}
	// step 3: data ok
	$year = $data;
	$result = null;
	if (isset($year)) {
		 $year = $_POST['year'];		
        $chi = array( "Tý", "Sửu", "Dần", "Mão", "Thìn", 
        	"Tị", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi" );
        $can = array("Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Ðinh", 
        	"Mậu", "Kỷ");
        $result = "<h1>Ðó là năm " . $can[$year % 10] . " " . $chi[($year + 8) % 12]."</h1>";
	}
	else 
	{
		$result = null;
	}

?>

<html>
	<head>
		<title>PINGO - Solution excercise 1</title>
		<meta charset="UTF-8">
		<style>
			table, td, th {
			    border: 1px solid green;
			    font-size: 20px;
			    background-color: yellow;
			}

			th {
			    background-color: green;
			}
		</style>
	</head>
	<body>
		<div align="center"><h1>TITLE: SOLUTION FOR EXERCISE 2</h1></div>
		<div align="center">
			<form action="solutionEx2.php" method="POST">
			  <h3>Mời bạn nhập năm:</h3>
			  <input type="text" name="year" value=<?php echo "'".$year."'" ?>>			  
			  <br><br>
			  <input type="submit" value="Tính năm can chi">
			</form>
		</div>
		<div class="separate-line" align="center" style="border-top: solid 1px #111223;">			
		</div>
		<div class="solution-mesage" align="center">
			<?php 
				if ($result === null) {
					echo "<h1>Nhập dữ liệu năm...</h1><br/>";
				}
				else
				{
					echo $result;
				}
			 ?>
		</div>		
	</body>
</html>