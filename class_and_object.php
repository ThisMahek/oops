<?php
class calcultion
{
    public $a, $b, $c;
    public function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    public function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$sum = new calcultion();
$sum->a = 10;
$sum->b = 20;
echo "Sum of a and b ".$sum->sum()."<br/>";

$sub =new calcultion();
$sub->a=40;
$sub->b=20;
echo "Sub of a and b ".$sub->sub();



?>