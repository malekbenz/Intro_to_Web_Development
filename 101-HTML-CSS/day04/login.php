<?php 

$pass = "124578";

$userName = $_POST['userName'];
$passWord = $_POST['passWord'];

if ($passWord == $pass && $userName == "Lyes") {
    echo  "Login with success !";
} else {
    echo " Ahchem choui !!" ;
}



?>