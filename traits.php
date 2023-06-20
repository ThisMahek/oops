<?php
trait hello
{
    private function sayhello()
    {
        echo "hello from trait";
    }
}
// trait bye
// {
//     public function sayhello()   
//     {
//         echo "bye";
//     }
// }
class base
{
    use hello{
   // hello::sayhello insteadof bye; //mySayHello->except this
    bye::sayhello as public; //rename function
    }
    // public function sayhello()
    // {
    //     echo "hello from base class";
    // }
}
// class child extends base
// {
//     use hello;
//     public function sayhello()
//     {
//         echo "hello from child class";
//     }
// }
$test = new base();
$test->sayhello();
$test->mySayHello();
// $test->saybye();
// echo "<br>";
// $test2 = new base2();
// $test2->sayhello();
// $test2->saybye();

?>