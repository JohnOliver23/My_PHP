<?php
function wordCount($word){

    $words = str_word_count(strtolower($word), 1, '0123456789');
	return array_count_values($words);
}

echo "TESTING ONE=====>";
foreach (wordCount('word') as $key => $value) {
    echo "$key => $value ";
};//=> ['word' => 1]
echo "<br>";
echo "TESTING TWO=====>";
foreach (wordCount('one of each') as $key => $value) {
    echo "$key => $value ";
} //=> ['one' => 1, 'of' => 1, 'each' => 1]
echo "<br>";
echo "TESTING THREE=====>";
foreach (wordCount('one fish two fish red fish blue fish') as $key => $value) {
    echo "$key => $value";
}//=> ['one' => 1, 'fish' => 4, 'two' => 1, 'red' => 1, 'blue' => 1]
echo "<br>";
echo "TESTING FOUR=====>";
foreach (wordCount('car : carpet as java : javascript!!&@$%^&') as $key => $value) {
    echo "$key => $value ";
};//=> ['car' => 1, 'carpet' => 1, 'as' => 1, 'java' => 1, 'javascript' => 1]
echo "<br>";
echo "TESTING FIVE=====>";
foreach (wordCount('testing, 1, 2 testing') as $key => $value) {
    echo "$key => $value ";
};//=> ['1' => 1, '2' => 1, 'testing' => 2]
echo "<br>";
echo "TESTING SIX=====>";
foreach (wordCount('go Go GO Stop stop') as $key => $value) {
    echo "$key => $value ";
};//=> ['go' => 3, 'stop' => 2]
echo "<br>";
echo "TESTING SEVEN=====>";
foreach (wordCount("hello\nworld") as $key => $value) {
    echo "$key => $value ";
};//=> ['hello' => 1, 'world' => 1]
echo "<br>";
echo "TESTING EIGHT=====>";
foreach (wordCount("hello\tworld") as $key => $value) {
    echo "$key => $value ";
};//=> ['hello' => 1, 'world' => 1]
echo "<br>";
echo "TESTING NINE=====>";
foreach (wordCount('hello  world') as $key => $value) {
    echo "$key => $value ";
};//=> ['hello' => 1, 'world' => 1]
echo "<br>";
echo "TESTING TEN=====>";
foreach (wordCount("\t\tIntroductory Course      ") as $key => $value) {
    echo "$key => $value ";
};//=> ['introductory' => 1, 'course' => 1]
?>