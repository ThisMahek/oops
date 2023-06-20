<?php
trait hello
{
    public function sayhello()
    {
        echo "hello";
    }
}
trait bye
{
    public function saybye()   
    {
        echo "bye";
    }
}
class base
{
    use hello, bye;
}
class base2
{
    use hello, bye;
}
$test = new base();
$test->sayhello();
$test->saybye();
echo "<br>";
$test2 = new base2();
$test2->sayhello();
$test2->saybye();

?>