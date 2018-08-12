<?php
	function verificRepeat($word){
		$verific = explode(' ',$word);
		for($i=0; $i<sizeof($verific); $i++){
			for($j = $i+1; $j< sizeof($verific); $j++){
				if(strcasecmp($verific[$i], $verific[$j])==0){
					return "yes";
				}
			}
		}
		return "no";
	}
	echo verificRepeat("Não estar chovendo");//=> no
	echo "<br>";
 	echo verificRepeat("Não estar chovendo não");//=> yes
?>