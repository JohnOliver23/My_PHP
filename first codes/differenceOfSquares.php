<?php
function squareOfSums($number){
	$count =0;
	for($i =1; $i <=$number;$i++){
		$count+=$i;
	}
	return pow($count, 2);
}
function sumOfSquares($number){
	$count = 0;
	for ($i=0; $i <=$number ; $i++) { 
		$count+= pow($i, 2);
	}
	return $count;
}


echo squareOfSums(5);//=> 225
echo "<br>";
echo sumOfSquares(5);//=> 55
/*
echo difference(5);//=> 170
echo squareOfSums(10);//=> 3025
echo sumOfSquares(10);//=> 385
echo difference(10);//=> 2640
echo squareOfSums(100);//=> 25502500
echo sumOfSquares(100);//=> 338350
echo difference(100);//=> 25164150
*/

?>