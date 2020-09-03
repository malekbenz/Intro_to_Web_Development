<?php

// Valid constant names
define("AUTHOR",     "Fateh Bouderouaz");
define("EMAIL",    "Fateh137@gmail.com");
define("WEB_SITE", "http://fatehBouderouaz.com"); // RIGHT - Works OUTSIDE of a class definition.

const CONSTANT_HELLO = 'Hello World';

// Invalid constant names
// define("2FOO",    "something");

echo AUTHOR . ' ' . EMAIL . ' ' . WEB_SITE . "\n";
echo "CONSTANT_HELLO  : " . CONSTANT_HELLO . "\n";


const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; 

class Constants
{
    //define('CONST_NAME', 'Fateh');  WRONG - Works OUTSIDE of a class definition.
    const AUTHOR_NAME = "Fateh";      // RIGHT - Works INSIDE of a class definition.
    public static function getAuthorName()
    {
        return self::AUTHOR_NAME;
    }
}

echo "Author Name using class : " . Constants::AUTHOR_NAME . "\n";
echo "Author Name using class methode : " . Constants::getAuthorName() . "\n";

echo " ------------ Magic constants --------------------- \n" ;
echo "https://www.php.net/manual/en/language.constants.predefined.php \n";

echo "The current line number of the file is ${__LINE__} " . __LINE__ . "\n";
echo "FULL Path :  " . __FILE__ . "\n";
echo "The directory of the file :  " . __DIR__ . "\n";

