<?php
//Declare for the typing
declare(strict_types=1);
include 'includes/header.php';

//Functions -> can set type to the variables
//           -> can set default values 
function sum(int $number1, int $number2 = 0)
{
    echo $number1 + $number2;
}

sum(10, 20);

echo "</br>";

//With return and type of return, with ? is optional (: ?int), and with | can return two types of variable
function substraction(int $number1, int $number2 = 0): int | string
{
    $result = $number1 - $number2;
    if ($result < 0) :
        return 'The result is not valid';
    else : return $result;
    endif;
}

echo substraction(10, 5);

//Named parameters
echo "</br>";
sum(number2: 20, number1: 15);

include 'includes/footer.php';
