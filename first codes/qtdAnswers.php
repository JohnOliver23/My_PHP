<?PHP

function verificQtdAnswers($array, $position){
$limit = $array[$position -1];
$answers = array_filter($array,function($x) use($limit){
	return $x >= $limit;
});
	return sizeof($answers);
}
echo verificQtdAnswers([10,9,7,7,5], 3);//=> 4;
echo "<br>";
echo verificQtdAnswers([10,9,7,7,5], 2);//=> 2;


?>