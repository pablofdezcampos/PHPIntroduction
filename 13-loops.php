<?php include 'includes/header.php';

//While
$i = 0;

while ($i < 10) {
    echo $i . "</br>";
    ++$i;
}

//Different syntax
while ($i < 10) :
    echo $i . "</br>";
    ++$i;
endwhile;

echo "</br>";

//Do while
$e = 0;
do {
    echo $e . "</br>";
    ++$e;
} while ($e < 10);

echo "</br>";

//For loop
for ($i = 0; $i < 10; $i++) {
    echo $i . "</br>";
}

echo "</br>";


/**
 * /3 print fizz
 * /5 print buzz
 * /3 and 5 print fizz buzz
 */

for ($i = 0; $i < 35; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . 'FIZZ BUZZ' . "</br>";
    } else if ($i % 3 === 0) {
        echo $i . 'FIZZ' . "</br>";
    } else if ($i % 5 === 0) {
        echo $i . 'BUZZ' . "</br>";
    }
}

//Different syntax
for ($i = 0; $i < 35; $i++) :
    if ($i % 3 === 0 && $i % 5 === 0) :
        echo $i . 'FIZZ BUZZ' . "</br>";
    elseif ($i % 3 === 0) :
        echo $i . 'FIZZ' . "</br>";
    elseif ($i % 5 === 0) :
        echo $i . 'BUZZ' . "</br>";
    endif;
endfor;

include 'includes/footer.php';
