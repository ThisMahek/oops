<?php
abstract class parent_class{

abstract protected function calc($a,$b);

}
class Child_class extends parent_class{
    public function  calc($a,$b){
        echo $a+$b;
    }
}
$test=new Child_class();
$test->calc(2,4);

/*
we can use this type of class this type of project
personal_info
fees_dept
library dept
cycle stand
*/
?>