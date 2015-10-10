<?php 
	$string = file_get_contents("example.txt"); // Load text file contents
	//$string = "hom nay hoc bai ve regular expression do thienvu@gmail.com huong dan tai pingo@edu.vn";
	// don't need to preassign $matches, it's created dynamically

	// this regex handles more email address formats like a+b@google.com.sg, and the i makes it case insensitive
	$pattern = '/[a-z0-9_\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i';

	// preg_match_all returns an associative array
	preg_match_all($pattern, $string, $matches);

	// the data you want is in $matches[0], dump it with var_export() to see it
	var_dump($matches);
	echo "<br/>";
	var_export($matches[0]);
	echo "<br/>";
	var_dump($matches[0][0]);
	echo "<br/>";
	var_dump($matches[0][1]);

?>

<html>
	<head>
		<title>PINGO - Solution excercise 1</title>
		<meta charset="UTF-8">		
	</head>
	<body>
		<div align="center"><h1>TITLE: SOLUTION FOR REGULAR EXPRESSION</h1></div>
		<div align="center">
			<?php  
				$arrLength = count($matches[0]);
				for ($i=0; $i < $arrLength; $i++) { 
					echo $matches[0][$i];
					echo "<br/>";
				}
			?>
		</div>
		<div class="separate-line" align="center" style="border-top: solid 1px #111223;">			
		</div>
		<div class="solution-mesage" align="center">
			
		</div>		
	</body>
</html>