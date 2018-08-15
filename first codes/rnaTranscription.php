<?php
function toRna($word){
	$dnaToRna = [
		"G"=>"C",
		"C"=>"G",
		"T"=>"A",
		"A"=>"U"
	];
	$resp=[];
	foreach (str_split($word) as $key => $value) {
		array_push($resp, $dnaToRna[$value]);
	}
	return implode('',$resp);
}
echo "testing one = ";
echo toRna('C');//=> G
echo "<br>";
echo "testing two = ";
echo toRna('G');//=> C
echo "<br>";
echo "testing three = ";
echo toRna('T');//=> A
echo "<br>";
echo "testing four = ";
echo toRna('A');//=> U
echo "<br>";
echo "testing five = ";
echo toRna('ACGTGGTCTTAA');//=>UGCACCAGAAUU

?>