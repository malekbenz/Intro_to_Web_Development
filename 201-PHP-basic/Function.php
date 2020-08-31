<?php
function hello($name)
{
    echo "Welcome Mr $name \n";
}
hello("Maroc");

$add = 5;
$add = function ($num1, $num2) {
    return $num1 + $num2;
};

function add($num1, $num2)
{
    return $num1 + $num2;
}
echo "10 + 15 = " . add(10, 15) . "\n";
echo "12 + 13 = " . $add(12, 13) . "\n";
///// ----------
echo "Counter start here ------------ \n";
// $count = 0;

function increment()
{
    static $count = 0;
    echo "counter value is : " . $count++ . "\n";
}
function increment_chichi()
{
    static $count = 0;
    echo "counter value is : " . $count++ . "\n";
}

increment();
increment();
increment();
increment();
increment();
increment_chichi();
increment_chichi();
