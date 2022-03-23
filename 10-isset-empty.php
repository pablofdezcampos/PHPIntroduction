<?php include 'includes/header.php';

$clients = [];
$clients2 = array();
$clients3 = array('Pablo', 'Raul', 'Pedro');
$persons = [
    'name' => 'Pablo',
    'dni' => '2343234A',
    'address' => [
        'country' => 'Spain',
        'postalCode' => 3456
    ]
];

//Empty -> check if it is empty
var_dump(empty($clients));
var_dump(empty($clients2));
var_dump(empty($clients3));

//Isset -> check if a array or a propiertie are define
echo "</br>";
var_dump(isset($clients));
echo "</br>";
var_dump(isset($persons['dni']));

include 'includes/footer.php';
