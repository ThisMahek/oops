<?php
class calculation
{
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    function sum(){
        return ($this->a+$this->b);
    }
}
$test=new calculation(12,12);
echo $test->sum();
exit;
echo die("exit");

?>