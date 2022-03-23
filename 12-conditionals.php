<?php include 'includes/header.php';

$login = true;
$admin = true;

//Conditionals
if ($login || $admin) {
    echo 'Login';
} else {
    echo 'Logout';
}

//Anidated conditionals
$persons = [
    'name' => 'Pablo',
    'dni' => '2343234A',
    'balance' => 1000,
    'address' => [
        'country' => 'Spain',
        'postalCode' => 3456
    ]
];

if ($persons['name'] == 'Pablo') { {
        echo 'Client is Pablo';
        if ($persons['balance'] > 500) {
            echo 'Salary is bigger than 500';
        }
    }
}

if ($persons['balance'] <= 0) {
    echo 'The balance is lower than 0';
} else if ($persons['address']['country'] == 'Spain') {
    echo 'He is spanish';
} else {
    echo 'ERROR';
}

//Switch
echo "</br>";
$lenguaje = 'Java';
switch ($lenguaje) {
    case 'PHP':
        echo 'PHP';
        break;
    case 'JS':
        echo 'JS';
        break;
    case 'Java':
        echo 'Java';
        break;
    default:
        echo 'Default option';
        break;
}

include 'includes/footer.php';
