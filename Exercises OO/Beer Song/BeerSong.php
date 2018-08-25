<?php

class BeerSong {
    function verse($number){
        if($number <0 || $number > 99){
            throw new InvalidArgumentException('Invalid Paramenter');
        }
        else if($number>1){
        $antinumber = $number-1;
        echo "$number bottles of beer on the wall, $number bottles of beer." .
                "Take one down and pass it around, $antinumber bottles of beer on the wall.<br>";
        }else if ($number == 1){
            echo "$number bottle of beer on the wall, $number bottle of beer." .
                "Take it down and pass it around, no more bottles of beer on the wall.<br>";
        }else{
            echo "No more bottles of beer on the wall, no more bottles of beer." .
                "Go to the store and buy some more, 99 bottles of beer on the wall.<br>";
        }
    }
}

?>