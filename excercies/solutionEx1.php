<?php 
	// step 1: get data from request
	$data = (isset($_POST['matrix_length']))?$_POST['matrix_length']:null;
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
	$matrix_length = $data;
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
		<div align="center"><h1>TITLE: SOLUTION FOR EXERCISE 1</h1></div>
		<div align="center">
			<form action="solutionEx1.php" method="POST">
			  <h3>Mời bạn nhập số chiều ma trận:</h3>
			  <input type="text" name="matrix_length" value=<?php echo "'".$matrix_length."'" ?>>			  
			  <br><br>
			  <input type="submit" value="Vẽ ma trận">
			</form>
		</div>
		<div class="separate-line" align="center" style="border-top: solid 1px #111223;">			
		</div>
		<div class="solution-mesage" align="center">
			<?php 
				if ($checking_data == 1) {
					echo "<h1>Nhập dữ liệu ma trận...</h1><br/>";
				}
				else
				{
					echo "<h1>Ma trận được vẽ như sau:</h1><br/>";
				}
			 ?>
		</div>
		<div class="solution-matrix"  align="center">
			<?php 
				if ($checking_data != 1) {
					 echo ("<table>") ;
		 
					  for ($i=1;$i<=$matrix_length;$i++)
					     {
						   echo ("<tr>") ;
						     for ($j=1;$j<=$matrix_length;$j++)
						     {  
							     $s =$i*$j ;
						         //echo ("<td> $s </td>") ;
						         echo "<td>" . ($i * $j) . "</td>";
						     }
						   echo ("</tr>") ;
					     }
		  				echo ("</table>") ;
				}
			 ?>
		</div>
	</body>
</html>