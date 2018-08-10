<?PHP
$n = 5;
$values = [10,9,7,7,5];

function verificQtdAnswers($array, $position){
$limit = $array[$position -1];
$answers = array_filter($array,function($x) use($limit){
	return $x >= $limit;
});
	return sizeof($answers);
}
echo verificQtdAnswers($values, 2);


?>