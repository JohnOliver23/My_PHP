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

### Largest Series Product
Given a string of digits, calculate the largest product for a contiguous substring of digits of length n.

For example, for the input **'1027839564'**, the largest product for a series of **3** digits is **270 (9 * 5 * 6)**, and the largest product for a series of 5 digits is **7560 (7 * 8 * 3 * 9 * 5)**.

Note that these series are only required to occupy adjacent positions in the input; the digits need not be numerically consecutive.

For the input **'73167176531330624919225119674426574742355349194934'**, the largest product for a series of **6** digits is **23520**.

```php
$series = new Series("0123456789");
$series->largestProduct(2));//=> 72

$series = new Series(576802143);
$series->largestProduct(2);//=> 48

$series = new Series(29);
$series->largestProduct(2);//=> 18
 
$series = new Series(123456789);
$series->largestProduct(3);//=> 504

$series = new Series(1027839564);
$series->largestProduct(3);//=> 270

$series = new Series("0123456789");
$series->largestProduct(5);//=>15120

$series = new Series("73167176531330624919225119674426574742355349194934");
$series->largestProduct(6);//=>23520

$digits = "731671765313306249192251196744265747423553491949349698352031277450632623957831801698480186947"
      "8851843858615607891129494954595017379583319528532088055111254069874715852386305071569329096"
      "3295227443043557668966489504452445231617318564030987111217223831136222989342338030813533627"
      "6614282806444486645238749303589072962904915604407723907138105158593079608667017242712188399"
      "8797908792274921901699720888093776657273330010533678812202354218097512545405947522435258490"
      "7711670556013604839586446706324415722155397536978179778461740649551492908625693219784686224"
      "8283972241375657056057490261407972968652414535100474821663704844031998900088952434506585412"
      "2758866688116427171479924442928230863465674813919123162824586178664583591245665294765456828"
      "4891288314260769004224219022671055626321111109370544217506941658960408071984038509624554443"
      "6298123098787992724428490918884580156166097919133875499200524063689912560717606058861164671"
      "0940507754100225698315520005593572972571636269561882670428252483600823257530420752963450";
$series = new Series($digits);
$series->largestProduct(13);//=> 23514624000

$series = new Series("0000");
$series->largestProduct(2);//=> 0

$series = new Series(99099);
$series->largestProduct(3);//=> 0

$series = new Series(123);
$series->largestProduct(4);//=> InvalidArgumationException

$series = new Series("");
$series->largestProduct(0);//=> 1

$series = new Series("123");
$series->largestProduct(0);//=> 1

$series = new Series("");
$series->largestProduct(1);//=> InvalidArgumentException

$series = new Series("1234a5");
$series->largestProduct(2);//=> InvalidArgumentException

$series = new Series("12345");
$series->largestProduct(-1);//=> InvalidArgumentException
```

### Beer Song
Recite the lyrics to that beloved classic, that field-trip favorite: 99 Bottles of Beer on the Wall.

Note that not all verses are identical.

> 3 bottles of beer on the wall, 3 bottles of beer.
> Take one down and pass it around, 2 bottles of beer on the wall.

> 2 bottles of beer on the wall, 2 bottles of beer.
> Take one down and pass it around, 1 bottle of beer on the wall.

> 1 bottle of beer on the wall, 1 bottle of beer.
> Take it down and pass it around, no more bottles of beer on the wall.

> No more bottles of beer on the wall, no more bottles of beer.
> Go to the store and buy some more, 99 bottles of beer on the wall.

```php
$song = new BeerSong();
$song->verse(99);/*=> "99 bottles of beer on the wall, 99 bottles of beer." .
                      "Take one down and pass it around, 98 bottles of beer on the wall.<br>";*/
           
$song = new BeerSong();
$song->verse(2);/*=> "2 bottles of beer on the wall, 2 bottles of beer." .
                      "Take one down and pass it around, 1 bottle of beer on the wall.<br>"; */

$song = new BeerSong();
$song->verse(1);/*=> "1 bottle of beer on the wall, 1 bottle of beer." .
                     "Take it down and pass it around, no more bottles of beer on the wall.<br>";*/

$song = new BeerSong();
$song->verse(0);/*=> "No more bottles of beer on the wall, no more bottles of beer.\n" .
                      "Go to the store and buy some more, 99 bottles of beer on the wall.";*/
$song = new BeerSong();
$song->verse(-1);//=>Invalid Parameter

```
### Answers
- [x] Triangle
- [ ] Bob
- [ ] Grade School
- [ ] Largest Series Products
- [x] Beer Song
