<?php
echo "condtion & test " . PHP_EOL;

$isProf = false;

if($isProf ){
	echo "This is Fateh bouderouaz " . PHP_EOL;
}
else{
	echo "Wrooooooong This is not Fateh bouderouaz " . PHP_EOL;
}
$name = "fateh";

if($name =="fateh"){
	echo "This is the amaing Fateh bouderouaz ";
}
echo "Learn swithc " . PHP_EOL;
$name = "mohamed";
switch($name){
	case 'fateh': 
		echo "This is the amaing Fateh bouderouaz ";
		break;	
	case 'lyes': 
		echo "This is the amazing Lyes Khier ";
		break;	
	case 'salah': 
		echo "This is the amazing Salah ";
		break;	
	default: 
		echo "I have no idea may be this cherif ";

}
echo "ternary operator -------------------- )" . PHP_EOL;
$name ="fateh";
echo $name == 'fateh' ? "Well done -)":"Wrong answer (-";

echo "ternary  -------------------- )" . PHP_EOL;

$exist ="exist";

echo $exist ?? "ou cas ou !!!!";


?>
