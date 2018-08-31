<?php
function encode($string){
  return preg_replace_callback('/(.)\1*/',function($matches){
      $len =  strlen($matches[0]);
      return $len==1?$matches[1]:$len.$matches[1];
  },$string)."<br>";
}

function decode($string){
    return preg_replace_callback('/(\d+)?(.)/',function($matches){
        $len = $matches[1]?:1;
        return str_repeat($matches[2], $len);
    },$string)."<br>";
}
echo encode('');//=> ''

echo encode('XYZ');//=> 'XYZ'

echo decode('');//=> ''
echo decode('XYZ');//=> XYZ'

echo encode('AABBBCCCC');//=> '2A3B4C'

echo decode('2A3B4C');//=> 'AABBBCCCC'

echo decode('12WB12W3B24WB');//=> 'WWWWWWWWWWWWBWWWWWWWWWWWWBBBWWWWWWWWWWWWWWWWWWWWWWWWB'

echo decode('2 hs2q q2w2 ');//=>  '  hsqq qww  '

echo decode(encode('zzz ZZ  zZ'));//=> 'zzz ZZ  zZ'

?>