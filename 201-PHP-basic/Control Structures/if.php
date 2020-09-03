<?php
// https://www.php.net/manual/en/language.control-structures.php
$a = 10;
$b = 15;
if ($a > $b) {
    echo "a is bigger than b";
    $b = $a;
}
?>

<?php if (true) : ?>
    html code to run if condition is true
<?php else : ?>
    html code to run if condition is false
<?php endif ?>