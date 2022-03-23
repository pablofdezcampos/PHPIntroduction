<?php include 'includes/header.php';

$products = [
    [
        'name' => 'Tablet',
        'price' => 200,
        'available' => true
    ],
    [
        'name' => 'TV',
        'price' => 250,
        'available' => true
    ],
    [
        'name' => 'Computer',
        'price' => 500,
        'available' => false
    ],
];

//Convert array to json
$json = json_encode($products, JSON_UNESCAPED_UNICODE);
var_dump($json);

//Convert json to array
$array = json_decode($json);
var_dump($array);

include 'includes/footer.php';
