<?php 
	require_once 'Libraries/ArrayLibs_Sample1.php';	
	//function sumSubArray($arrSource, $iStartIndex, $iEndIndex)
	//{
		// declare variable
		//$returnSumValue = 0;
		// process data
		//for ($i=$iStartIndex; $i <= $iEndIndex ; $i++) { 
			//$returnSumValue = $returnSumValue + $arrSource[$i];
		//}
		// return value
		//return $returnSumValue;
	//}

	// testing source code
	// create array 100 elements
	$arrTestingSource = array();
	for ($i=0; $i < 100 ; $i++) { 
		$arrTestingSource[$i] = $i;
	}
	echo "Sum Sub Array from 10 -> 20:	<b>". sumSubArray($arrTestingSource,10,20) . "</b><br/>";
	echo "Sum Sub Array from 15 -> 35:	<b>". sumSubArray($arrTestingSource,15,35) . "</b><br/>";
	echo "Sum Sub Array from 1 -> 5:	<b>". sumSubArray($arrTestingSource,1,5) . "</b><br/>";
?>

