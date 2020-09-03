<?php
// An associative array containing references  to all variables which are currently defined in the global scope of the script.  The variable names are the keys of the array.

function show_variable()
{
    $foo = "This is local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "This is a global variable";
show_variable();
