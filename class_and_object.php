<?php
class calc{
    public $a,$b;
    function sum(){
        return ($this->a+$this->b);
    }
}
$cal=new calc();
$cal->a=12;
$cal->b=12;
echo $cal->sum();

?>