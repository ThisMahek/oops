<?php
class employee{
    public $name,$age,$salary;
    function __construct($name,$age,$salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    
    function info(){
        echo "<h1>Employee profile</h1>";
        echo "Employee name :" .$this->name."<br/>";
        echo "Employee age :" .$this->age."<br/>";
        echo "Employee salary :" .$this->salary."<br/>";
    }

}
class manager extends employee{
    public $ta=1000,$phone=300,$totalSalary;

    function info(){
        $this->totalSalary=$this->ta+$this->phone+$this->salary;
        echo "<h1>Manager profile</h1>";
        echo "Employee name :" .$this->name."<br/>";
        echo "Employee age :" .$this->age."<br/>";
        echo "Employee salary :" .$this->totalSalary."<br/>";
    
    }
}
$e1=new manager('mahek',22,1000);
$e2=new employee('mahek',22,20000);
 $e1->info();
 $e2->info();
?>