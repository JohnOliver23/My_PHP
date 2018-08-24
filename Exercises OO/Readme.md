# Exercises OO

### Triangle
Determine if a triangle is **equilateral, isosceles, or scalene**.

An equilateral triangle has all three sides the same length.

An isosceles triangle has at least two sides the same length. (It is sometimes specified as having exactly two sides the same length, but for the purposes of this exercise we'll say at least two.)

A scalene triangle has all sides of different lengths.

Note
For a shape to be a triangle at all, all sides have to be of length **> 0**, and the sum of the lengths of any two sides must be greater than or equal to the length of the third side. See Triangle Inequality.

Dig Deeper
The case where the sum of the lengths of two sides equals that of the third is known as a degenerate triangle - it has zero area and looks like a single line. Feel free to add your own code/tests to check for degenerate triangles.

```php
echo new Triangle(2, 2, 2)->kind();//=> equilateral
echo new Triangle(10, 10, 10)->kind();//=> equilateral
echo new Triangle(3, 4, 4)->kind();//=> isosceles
echo new Triangle(3, 4, 4)->kind();//=> isosceles
echo new Triangle(4, 3, 4)->kind();//=> isosceles
echo new Triangle(4, 4, 3)->kind();//=>isosceles
echo new Triangle(4, 4, 7)->kind();//=> isosceles
echo new Triangle(3, 4, 5)->kind();//=> scalene
echo new Triangle(5, 4, 6)->kind();//=> scalene
echo new Triangle(10, 11, 12)->kind();//=> scalene
echo new Triangle(5, 4, 2)->kind();//=> scalene
echo new Triangle(0.4, 0.6, 0.3)->kind();//=> scalene
echo new Triangle(0, 0, 0)->kind();//=> expectedException
echo new Triangle(1, 1, 3)->kind();//=> expectedException
echo new Triangle(7, 3, 2)->kind();//=> expectedException
echo new Triangle(1, 3, 1)->kind();//=> expectedException
```

### Bob
Bob is a lackadaisical teenager. In conversation, his responses are very limited.

- Bob answers **'Sure.'** if you ask him a question.

- He answers **'Whoa, chill out!'** if you yell at him.

- He answers **'Calm down, I know what I'm doing!'** if you yell a question at him.

- He says **'Fine. Be that way!'** if you address him without actually saying anything.

- He answers **'Whatever.'** to anything else.

The commented tests at the bottom of the bob_test.php are **Stretch Goals**, they are optional. They may be easier to solve if you are using the mb_string functions, which aren't installed by default with every version of PHP.

```php

$bob = new Bob;

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
echo $->bob->respondTo("");//=> Fine. Be that way!
echo $bob->respondTo("         ");//=> Fine. Be that way!
echo $bob->respondTo("\t\t\t\t\t\t\t\t\t\t");//=> Fine. Be that way!
echo $bob->respondTo("\nDoes this cryogenic chamber make me look fat?\nno");//=> Whatever.
echo $bob->respondTo("        hmmmmmmm...");//=> Whatever.
echo $bob->respondTo("Okay if like my  spacebar  quite a bit?   ");//=> Sure.
echo $bob->respondTo("This is a statement ending with whitespace      ");//=> Whatever.
```
### Grade School
Given students' names along with the grade that they are in, create a roster for the school.

In the end, you should be able to:

1. Add a student's name to the roster for a grade
  - "Add Jim to grade 2."
  - "OK."
2. Get a list of all students enrolled in a grade
  - "Which students are in grade 2?"
  - "We've only got Jim just now."
3. Get a sorted list of all students in all grades. Grades should sort as 1, 2, 3, etc., and students within a grade should be sorted alphabetically by name.
  - "Who all is enrolled in school right now?"
  - "Grade 1: Anna, Barb, and Charlie. Grade 2: Alex, Peter, and Zoe. Grade 3…"
 
Note that all our students only have one name. (It's a small town, what do you want?)

```php
$school = new School();

echo $school->numberOfStudents();//=> 0

$school->add("Claire", 2);

echo $school->grade(2);//=> Claire

$school = new School();
$school->add("Marc", 2);
$school->add("Virginie", 2);
$school->add("Claire", 2);
echo $school->grade(2);//=> ['Claire', 'Marc', 'Virginie']

$school = new School();

$school->add("Marc", 3);
$school->add("Claire", 6);

echo $school->grade(3));//=>Marc
echo $school->grade(6);//=>Claire

$school = new School();

$school->add("Marc", 5);
school->add("Virginie", 5);
$school->add("Claire", 5);
$school->add("Mehdi", 4);

school->studentsByGradeAlphabetical();/*=>= [
            4 => ['Mehdi'],
            5 => ['Claire', 'Marc', 'Virginie']
        ];*/

```
