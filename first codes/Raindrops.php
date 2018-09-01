<?php
function raindrops($number){
    $rains = [3=> 'Pling', 5=> 'Plang', 7=> 'Plong'];
    $string = '';
    foreach ($rains as $key => $value) {
        if($number % $key == 0)
            $string .= $value; 
    }
    if (strlen($string)==0){
        echo (String) $number."<br>";
    }else{
        echo $string."<br>";
    }
}

raindrops(1);//=> "1"
raindrops(3);//=> "Pling"
raindrops(5);//=> "Plang"
raindrops(7);//=> "Plong"
raindrops(6);//=> "Pling"
raindrops(9);//=> "Pling"
raindrops(10);//=> "Plang"
raindrops(14);//=> "Plong"
raindrops(15);//=> "PlingPlang"
raindrops(21);//=> "PlingPlong"
raindrops(25);//=> "Plang"
raindrops(35);//=> "PlangPlong"
raindrops(49);//=> "Plong"
raindrops(52);//=> "52"
raindrops(105);//=> "PlingPlangPlong"
raindrops(12121);//=> "12121"

?>