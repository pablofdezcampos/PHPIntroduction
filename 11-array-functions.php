<?php include 'includes/header.php';

//Search elements in an array
$numbers = [1, 4, 5, 2, 3, 2, 5];
var_dump(in_array(1, $numbers));
echo "</br>";

//Order elements in an array
sort($numbers);
echo "<pre>";
var_dump($numbers);
echo "/<pre>";

rsort($numbers);
echo "<pre>";
var_dump($numbers);
echo "/<pre>";

//Order associative array
$persons = [
    'name' => 'Pablo',
    'dni' => '2343234A',
    'address' => 'Spain'
];

echo "Order values";
asort($persons); //Order by values
echo "<pre>";
var_dump($persons);
echo "/<pre>";

ksort($persons); //Order by alphabetic
echo "<pre>";
var_dump($persons);
echo "/<pre>";

include 'includes/footer.php';
