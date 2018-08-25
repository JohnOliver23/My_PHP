<?php
class Triangle{
    protected $types = [
        1 => 'equilateral',
        2 => 'isosceles',
        3 => 'scalene',
    ];
    private $sides;
    public function __construct($a, $b, $c){
        $this->sides = [$a, $b, $c];
        sort($this->sides);
        if($this->sides[0]<=0){
            throw new InvalidArgumentException('Triangle sides length should be positive');
        }
        if($this->sides[0] + $this->sides[1] < $this->sides[2] ){
            throw new InvalidArgumentException('Violating Triangle inequality');
        }
        
    }
    public function kind(){
        return $this->types[count(array_unique($this->sides))];
    }
}
?>