<?php 
echo "LOOOOOOOOPs " . PHP_EOL;
$numero  = 10;

while($numero > 0 ){

	echo $numero . PHP_EOL;
	//$numero = $numero -1 ;
	$numero-- ;
}
$counter = 0 ;

echo "LOOOOOOOOPs  with do while " . PHP_EOL;
do{
	echo $counter . PHP_EOL;
	$counter++;
}while($counter <10 ) ;

echo "for LOOOOOOOOOOP " . PHP_EOL;

for($i = 0 ; $i< 10 ; $i++){
	echo $i . PHP_EOL;
}

$tableau = [1,2,3,4,5];

echo "foreach LOOOOOOOOOOP " . PHP_EOL;

foreach($tableau as $number ) {
	echo $number . PHP_EOL;
}

$tableau = ["one","two", "three", "viva l'algerie"];

echo "foreach LOOOOOOOOOOP " . PHP_EOL;

foreach($tableau as $number ) {
	echo $number . PHP_EOL;
}



?>
