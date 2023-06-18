<?php
class calcultion
{
public $a,$b,$c;
public function sum()
{
    $this->c=$this->a+$this->b;
    return $this->c;
}
}

$sum=new calcultion();
$sum->a=40;
$sum->b=20;
echo $sum->sum();

?>