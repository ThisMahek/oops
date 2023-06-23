<?php
require 'first.php';
require 'second.php';
function wow(){
    echo "Wow from name space";
}
//use test\v1 as cmd;
$obj =new pro\product();
// pro\wow();
// echo "<br>";
 $obj2=new test\product();
// wow();


?>