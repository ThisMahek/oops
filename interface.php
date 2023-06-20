<?php
interface parent1
{
    //public $a;
    function calc($a, $b);
}
interface parent2
{
    function sub($c, $d);
}
class Child implements parent1, parent2
{
  function calc($a,$b){
    echo $a+$b;
  }
  function sub($c,$d){
    echo $c-$d;
  }
}
$child=new child();
$child->calc(2,2) ;echo "<br/>";
echo "Subtraction is :";
$child->sub(10,2);
?>