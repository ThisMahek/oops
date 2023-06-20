<?php
class base{
    private $name;
    public function __construct($n){
    $this->name=$n;
    }

    public function show()
    {
        echo "Your name :" .$this->name ."<br>";
    }

}
class derived extends base{
    public function get()
    {
        echo "Your name :" .$this->name ."<br>";
    }

}
// $test= new base("mahek");
// $test->name="Bana";
// $test->show();
$test2= new base("mahek verma");
$test2->name="Bana";
$test2->get();
?>