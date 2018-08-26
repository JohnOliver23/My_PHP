<?php
include 'Bob.php';
$bob = new Bob();
echo $bob->respondTo("Tom-ay-to, tom-aaaah-to.");//=>Whatever.
echo $bob->respondTo("WATCH OUT!");//=> Whoa, chill out!
echo $bob->respondTo("FCECDFCAAB");//=> Whoa, chill out!
echo $bob->respondTo("Does this cryogenic chamber make me look fat?");//=> Sure.
echo $bob->respondTo("You are, what, like 15?");//=> Sure.
echo $bob->respondTo("fffbbcbeab?");//=> Sure.
echo $bob->respondTo("Let's go make out behind the gym!");//=>Whatever.
echo $bob->respondTo("It's OK if you don't want to go to the DMV.");//=> Whatever.
echo $bob->respondTo("1, 2, 3 GO!");//=> Whoa, chill out!
echo $bob->respondTo("1, 2, 3");//=> Whatever.
echo $bob->respondTo("4?");//=> Sure.
echo $bob->respondTo("ZOMG THE %^*@#$(*^ ZOMBIES ARE COMING!!11!!1!");//=> Whoa, chill out!
echo $bob->respondTo("I HATE YOU");//=> Whoa, chill out!
echo $bob->respondTo("Ending with ? means a question.");//=> Whatever.
echo $bob->respondTo(":) ?");//=> Sure.
echo $bob->respondTo("Wait! Hang on. Are you going to be OK?");//=> Sure.
echo $bob->respondTo("");//=> Fine. Be that way!
echo $bob->respondTo("         ");//=> Fine. Be that way!
echo $bob->respondTo("\t\t\t\t\t\t\t\t\t\t");//=> Fine. Be that way!
echo $bob->respondTo("\nDoes this cryogenic chamber make me look fat?\nno");//=> Whatever.
echo $bob->respondTo("        hmmmmmmm...");//=> Whatever.
echo $bob->respondTo("Okay if like my  spacebar  quite a bit?   ");//=> Sure.
echo $bob->respondTo("This is a statement ending with whitespace      ");//=> Whatever.

?>