<?php include 'includes/header.php';

//Creation of an array -> Larabel
$shoppingCard = ['Tablet', 'TV', 'PC'];

//Elements for position
echo "</br>";
echo $shoppingCard[1];

//Add element to the array
echo "</br>";
echo $shoppingCard[3] = 'Computer';

//Add element to the end
array_push($shoppingCard, 'MAC');
//Add element to the start 
array_unshift($shoppingCard, 'PS4');

//Run array
echo "<pre>";
var_dump($shoppingCard);
echo "</pre>";

//Creation of an array -> WordPress
$food = array('Meat', 'Fish', 'Vegetables');
echo "<pre>";
var_dump($food);
echo "</pre>";

include 'includes/footer.php';
