<?php
class base{
protected static $name='Test';
public function show()
{
   echo  static::$name;
}

}
class child extends base{
    protected static $name='Demo';
}
$test =new child();
$test->show();
echo '<br>';



?>