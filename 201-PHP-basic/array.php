<?php
echo "Arrays -----------------" . PHP_EOL;

$names = array("Fateh", "cherif ", "ali", "sami", "lyes ", "mohamed", "salah");
$names = ["Fateh", "cherif ", "ali", "sami", "lyes ", "mohamed", "salah"];

//echo "Arrays -----------------";
echo $names[0] . PHP_EOL;
echo $names[3] . PHP_EOL;

$profs = ["fateh" => "bouderouaz", "cherif" => "adour"];

echo $profs["fateh"] . PHP_EOL;
echo $profs["cherif"] . PHP_EOL;

echo "Array Operators examples \n";

$Students = array("Cherif" => "Adour", "Mohamed" => "Bensadi");
$Teachers = array("Fateh" => "Bouderouaz", "Samy" => "Layachi", "Ali" => "Aberkane");

$all = $Students + $Teachers; // Union of $students and $Teachers
echo "Union of \$Students and \$Teachers: \n";
var_dump($all);

$all = $Teachers + $Students; // Union of $Teacher and $Students
echo "Union of \$Teachers and \$Students: \n";
var_dump($all);

$Students += $Teachers; // Union of $a += $b is $a and $b
echo "Union of \$Students += \$Teachers: \n";
var_dump($Students);

echo "Comparing arrays \n";

$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");

echo "\$a == \$b \n";
var_dump($a == $b); // bool(true)
echo "\$a === \$b \n";
var_dump($a === $b); // bool(false)
