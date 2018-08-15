<?php

  function nucleotideCount($word){
  	$nucleotideo = [
  		"A"=>0,
  		"C"=>0,
  		"T"=>0,
  		"G"=>0
  	];
  	if(strlen($word)==0)
  		return $nucleotideo;

  	foreach (str_split($word) as $key => $value) {
  		$nucleotideo[$value]+=1;
  	}
  	return $nucleotideo;
  }
  echo "----------TESTING ONE---------------------<br>";
  foreach (nucleotideCount('') as $key => $value) {
  	echo "$key => $value <br>";
  };//=>['a' => 0, 'c' => 0, 't' => 0, 'g' => 0]
  echo "----------TESTING TWO---------------------<br>";
   foreach (nucleotideCount('AAAAAAAAA') as $key => $value) {
  	echo "$key => $value <br>";
  };//=> ['a' => 9, 'c' => 0, 't' => 0, 'g' => 0]
  echo "----------TESTING THREE---------------------<br>";
  foreach (nucleotideCount('AGCTTTTCATTCTGACTGCAACGGGCAATATGTCTCTGTGTGGATTAAAAAAAGAGTGTCTGATAGCAGC') as $key => $value) {
  	echo "$key => $value <br>";
  };//=>['a' => 20, 'c' => 12, 't' => 21, 'g' => 17] 
 
?>