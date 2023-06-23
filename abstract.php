<?php
abstract class base
{
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    abstract public function sum();
}
class child extends base
{
    //function to override the parent method.
    public function sum()
    {
        return ($this->a + $this->b);
    }

}
$bs=new child(12,23);
echo "sum is " .$bs->sum()."<br/>";
/*
we can use this type of class this type of project
personal_info
fees_dept
library dept
cycle stand
*/
?>