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

function difference($number){
	return squareOfSums($number) - sumOfSquares($number);
}


echo squareOfSums(5);//=> 225
echo "<br>";
echo sumOfSquares(5);//=> 55
echo "<br>";
echo difference(5);//=> 170
echo "<br>";
echo squareOfSums(10);//=> 3025
echo "<br>";
echo sumOfSquares(10);//=> 385
echo "<br>";
echo difference(10);//=> 2640
echo "<br>";
echo squareOfSums(100);//=> 25502500
echo "<br>";
echo sumOfSquares(100);//=> 338350
echo "<br>";
echo difference(100);//=> 25164150


?>