<?php
echo "Repetition is mother of skill (tony robins) \n";
echo "O.O.P \n";
//
class Student
{
    private $name;
    public static $count = 0;
    public function __construct($name)
    {
        $this->name = $name;
        echo "New object created  " . ++$this::$count . " \n";
    }
    public function show_info()
    {
        echo $this->name . "\n";
    }

    public function set_name($name)
    {
        // echo strlen($name);
        if (strlen($name) < 3) {
            echo "Sorry name must have more than  3 char \n";
            return;
        }
        $this->name = $name;
    }

}
$chichi = new Student("cherif");
$chichi->set_name("Cherif adour");
$chichi->show_info();

$salah = new Student("salah");
$salah->set_name("Sa");
$salah->show_info();
