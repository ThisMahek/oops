<?php
class person
{
    function __construct($name,$age){
       $this->name=$name;
       $this->age=$age;

    }
public function show_user_data()
{
 echo  "User name is " .$this->name ." and user age is ".$this->age;
}
}
$person=new person('mahak',22);
$person->show_user_data();


?>