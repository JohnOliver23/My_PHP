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

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadOf B;
    }
}
class Talker2{
    use A, B{
        A::smallTalk insteadof B;
        B::bigTalk insteadof A;
    }
}
$t = new Talker;
echo $t->smallTalk().$t->bigTalk();//=>bA
echo "<br>";
$t2 = new Talker2();
echo $t2->smallTalk().$t2->bigTalk();//aB
echo "<br>";
echo $t->smallTalk().$t2->bigTalk();//=>bB
echo "<br>";
echo $t2->smallTalk().$t->bigTalk();//aA
?>