<?php
function encode($word){
    $text = preg_replace("/[^a-z0-9]/","", strtolower($word));//tira os caracteres especiais, espaços e transforma os carcteres em minusculos
    $keys = range('a', 'z');//indices de a-z
    $values = range('z', 'a');//valores de z-a
    $replace_pairs = array_combine($keys, $values);//concocatena os dois arrays onde => 'a'=>'z', 'b'=>'x' e etc. 
    $translation = strtr($text, $replace_pairs);//retorna apenas os valores que satisfazem os indices
    $formatted = chunk_split($translation, 5, ' ');//a cada 5 carcteres a string ganha um espaço
    return $formatted;
}
echo "TESTING ONE=====> ";
echo encode('no');//=> ml
echo "<br>";
echo "TESTING TWO=====>";
echo encode('yes');//=> bvh
echo "<br>";
echo "TESTING THREE=====>";
echo encode('OMG');//=> lnt
echo "<br>";
echo "TESTING FOUR=====>";
echo encode('O M G');//=> lnt
echo "<br>";
echo "TESTING FIVE=====>";
echo encode('mindblowingly');//=> nrmwy oldrm tob
echo "<br>";
echo "TESTING SIX=====>";
echo encode('Testing, 1 2 3, testing.');//=> gvhgr mt123 gvhgr mt
echo "<br>";
echo "TESTING SEVEN=====>";
echo encode('Truth is fiction.');//=> gifgs rhurx grlm
echo "<br>";
?>