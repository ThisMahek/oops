<?php
class base
{
  public function __construct($a, $b)
  {
    $this->a = $a;
    $this->b = $b;
  }
  function sum(){
    return ($this->a + $this->b);
  }
}
class child extends base
{
  
  function mul(){
    return ($this->a * $this->b);
  }
}

$child= new child(2,6);
echo $child->mul();

?>