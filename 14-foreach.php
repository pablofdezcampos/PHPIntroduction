<?php include 'includes/header.php';

//For each
$clients = array('Pepe', 'Pedro', 'Lebron');
foreach ($clients as $client) {
    echo $client . '</br>';
}

$players = [
    'name' => 'Messi',
    'team' => 'Barça',
    'dorsal' => 10
];

foreach ($players as $key => $value) {
    echo $key . " - " . $value . "</br>";
}

//Real example
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

foreach ($products as $product) { ?>
    <li>
        <p>Product: <?php echo $product['name'] ?></p>
        <p>Price: <?php echo $product['price'] ?> </p>
        <p>
            <!-- Ternary opertors -->
            <?php echo ($product['available']) ? 'Avaible' : 'Not avaible'; ?>
        </p>
    </li>
<?php
}

include 'includes/footer.php';
