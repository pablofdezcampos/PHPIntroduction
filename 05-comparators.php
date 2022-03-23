<?php include 'includes/header.php';

//Comparators
$number1 = 10;
$number2 = 20;
$number3 = 20;
$number4 = "20";

var_dump($number1 > $number2);
echo "</br>";

var_dump($number1 < $number2);
echo "</br>";

var_dump($number1 >= $number2);
echo "</br>";

var_dump($number1 <= $number2);
echo "</br>";

var_dump($number2 === $number4);
echo "</br>";

//Return -1 if first number is lowee, 0 if it is equals and 1 if it is bigger
var_dump($number1 <=> $number2);
echo "</br>";

include 'includes/footer.php';
