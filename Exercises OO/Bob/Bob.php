<?php
class Bob{
    public function respondTo($text){
        $text = preg_replace("/[^a-zA-Z?]/","",$text);
        
        if($text == ''){
            return "Fine. Be that way!";
        }else if ($text[strlen($text)-1] =='?'){
            return 'Sure.<br>';
        }else if(ctype_upper($text)){
            return "Whoa, chill out!<br>";
        }else{
            return "Whatever<br>";
        }

        
    }
}
?>