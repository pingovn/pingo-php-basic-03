<?php 	
	function sumSubArray($arrSource, $iStartIndex, $iEndIndex)
	{
		// declare variable
		$returnSumValue = 0;
		// process data
		for ($i=$iStartIndex; $i <= $iEndIndex ; $i++) { 
			$returnSumValue = $returnSumValue + $arrSource[$i];
		}
		// return value
		return $returnSumValue;
	}
?>

