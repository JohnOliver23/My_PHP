<?php
class Series {
    function __construct($string){
        $this->val_number = (String) $string;
        $this->len_string = strlen($this->val_number);
    }
    function largestProduct($limit){
        if($this->len_string < $limit)
            throw new InvalidArgumentException('parameter larger than the size of the array ');
        $array_values =[]; 
        foreach (str_split($this->val_number) as $key => $value) {
            array_push($array_values, intval($value));
        }
        $maior = 0;
        foreach ($array_values as $key => $value) {
            $array = array_slice($array_values,$key,$limit);
            if(sizeof($array) == $limit){
            $iterate = array_product(array_slice($array_values,$key,$limit));
            }
            if($iterate > $maior)
                $maior = $iterate;
        }
        echo "$maior<br>";
    }
}

?>