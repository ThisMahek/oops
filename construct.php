<?php
class person
{
    function __construct($name="No name", $age=22)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function show()
    {
        echo $this->name . "_" . $this->age;
    }

}
$person = new person("Mahek", 22);
$person->show();

$a=5;
$b=10;
echo $a=$b;

?>