<?php
echo "comparaison " . PHP_EOL;

$isReal = true;
$isNotReal = false;

$one = 1 ;
$ten = 10;

echo $one == $ten; // false
echo $one != $ten; // true
echo $one >= $ten ; // false
echo $one <= $ten ; // true

echo $isReal && $isNotReal; // false
echo $isReal || $isNotReal; // true
echo !$isReal; // false 

?>
