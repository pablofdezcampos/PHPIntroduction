<?php include 'includes/header.php';

//Associative array
$persons = [
    'name' => 'Pablo',
    'dni' => '2343234A',
    'address' => [
        'country' => 'Spain',
        'postalCode' => 3456
    ]
];

echo "<pre>";
var_dump($persons);
echo "</pre>";

//Access to field
echo $persons['name'];
echo $persons['address']['country'];

//Add elements
$persons['gender'] = "male";

echo "<pre>";
var_dump($persons);
echo "</pre>";

include 'includes/footer.php';
