<?php

function distance ($wordOne, $wordTwo){
	if(strlen($wordOne) != strlen($wordTwo)){
			return "DNA strands must be of equal length";
	}
	$count = 0;
	for($i = 0; $i< strlen($wordOne);$i++){
		if($wordOne[$i] != $wordTwo[$i])
			$count++;
	}
		return $count;
		
}

echo "testing one = ";
echo distance('A', 'A');//=> 0
echo "<br>";
echo "testing two = ";
echo distance('A', 'G');//=> 1
echo "<br>";
echo "testing three = ";
echo distance('AG', 'CT');//=> 2
echo "<br>";
echo "testing four = ";
echo distance('AT', 'CT');//=> 1
echo "<br>";
echo "testing five = ";
echo distance('GGACG', 'GGTCG');//=> 1
echo "<br>";
echo "testing six = ";
echo distance('GATACA', 'GCATAA');//=> 4
echo "<br>";
echo "testing seven = ";
echo distance('GGACGGATTCTG', 'AGGACGGATTCT');//=>9
echo "<br>";
echo "testing eight = ";
echo distance('GGACG', 'AGGACGTGG');//=> DNA strands must be of equal length*/
echo "<br>";
?>