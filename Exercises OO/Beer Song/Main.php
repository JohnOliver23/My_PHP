<?php
include 'BeerSong.php';

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
?>