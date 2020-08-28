<?php
echo "Arrays -----------------" . PHP_EOL;

$names = array("Fateh", "cherif ", "ali", "sami", "lyes ", "mohamed", "salah");
$names = ["Fateh", "cherif ", "ali", "sami", "lyes ", "mohamed", "salah"];

//echo "Arrays -----------------";
echo $names[0] . PHP_EOL;
echo $names[3] . PHP_EOL;

$profs = ["fateh"=> "bouderouaz", "cherif"=>"adour"];

echo $profs["fateh"] . PHP_EOL;
echo $profs["cherif"] . PHP_EOL;


?>
