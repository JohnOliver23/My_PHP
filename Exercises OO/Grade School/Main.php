<?php
include 'GradeSchool.php';

$school = new School();
echo $school->numberOfStudents()."<br>";//=> 0

$school->add("Claire", 2);
echo $school->grade(2)."<br>";//=> Claire

$school = new School();
$school->add("Marc", 2);
$school->add("Virginie", 2);
$school->add("Claire", 2);
foreach ($school->grade(2) as $key => $value) {
    echo " $value";
}//=> ['Claire', 'Marc', 'Virginie']
echo "<br>";
$school = new School();

$school->add("Marc", 3);
$school->add("Claire", 6);

echo $school->grade(3)."<br>";//=>Marc
echo $school->grade(6)."<br>";//=>Claire

$school = new School();

$school->add("Marc", 5);
$school->add("Virginie", 5);
$school->add("Claire", 5);
$school->add("Mehdi", 4);

foreach ($school->studentsByGradeAlphabetical() as $key => $value) {
    echo "$key => ";
    foreach ($value as $k => $v) {
        echo "$v, ";
    }
    echo "<br>";
};/*=>= [
            4 => ['Mehdi'],
            5 => ['Claire', 'Marc', 'Virginie']
        ];*/

?>