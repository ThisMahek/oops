<?php
abstract class parentclass
{
    abstract protected function cals($a, $b);
}
class childclass extends parentclass
{
    public function cals($a, $b)
    {
       echo $a+$b;
    }
}
$test = new childclass();
$test->cals(20,3);
/*
we can use this type of class this type of project
personal_info
fees_dept
library dept
cycle stand
*/
?>