<?php
trait A {
    public function smallTalk(){
        echo 'a';
    }
    public function bigTalk(){
        echo 'A';
    }
}
trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk(){
        echo 'B';
    }
}
class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigtalk as talk;
    }
}
$t = new Aliased_Talker();
echo $t->talk();//=> B
?>