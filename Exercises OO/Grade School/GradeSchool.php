<?php

class School{
private $grades=[];

public function numberOfStudents(){
    return sizeof($this->grades);
}

public function add($name, $grade){
    $this->grades[$grade][] = $name;
    sort($this->grades[$grade]);
    ksort($this->grades);
}
public function grade($grade){
    if(sizeof($this->grades[$grade])==1)
        return implode('',$this->grades[$grade]);
    else
        return $this->grades[$grade];
}
public function studentsByGradeAlphabetical(){
    return $this->grades;
}

}
?>