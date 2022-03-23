<?php include 'includes/header.php';

$name = "Pablo";

//Length of a variable
echo strlen($name);
echo "</br>";

//Delete white spaces
$nameWithSpaces = "      Pablo Fernandez    ";
echo strlen($nameWithSpaces);
echo "</br>";
$deleteWhiteSpaces = trim($nameWithSpaces);
echo strlen($deleteWhiteSpaces);

//Convert to uppercase
echo "</br>";
echo strtoupper($name);
echo "</br>";

//Convert to lowercase
echo strtolower($name);

$mail = "pablo@correo.com";
$mail2 = "Pablo@correo.com";

//Convert to lowercase for the users that put their email wrong
echo "</br>";
var_dump(strtolower($mail2) === strtolower($mail));

//Change the content of a varible
echo "</br>";
echo str_replace('P', 'p', $name);

//Check if string exits or not
echo "</br>";
echo strpos($name, 'P');

//Concatenation
$client = "Premium";
echo "</br>";
echo "The client name is " . $name . " and he is " . $client;
echo "</br>";
echo "The client name is {$name} and he is ${client}";
include 'includes/footer.php';
