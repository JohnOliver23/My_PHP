<?php

function isIsogram($word){
    $word = strtolower(preg_replace('/[^a-zA-Z]/',"",$word));
    $letters = array_unique(str_split($word));
    return sizeof($letters) == strlen($word)? "true<br>": "false<br>";
    
}

echo isIsogram('duplicates');//=> true
echo isIsogram('eleven');//=> false
echo isIsogram('subdermatoglyphic');//=> true
echo isIsogram('Alphabet');//=> false
echo isIsogram('thumbscrew-japingly');//=> true
echo isIsogram('Hjelmqvist-Gryb-Zock-Pfund-Wax');//=> true
echo isIsogram('Heizölrückstoßabdämpfung');//=> true
echo isIsogram('the quick brown fox');//=> false
echo isIsogram('Emily Jung Schwartzkopf');//=> true
echo isIsogram('elephant');//=> false

?>