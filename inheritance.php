<?php
class employee{
    private $name,$age,$salary;
    //   function __construct($n,$a,$s){
    //     $this->name=$n;
    //     $this->age=$a;
    //     $this->salary=$s;
    //   }
      public function show_employee_data()
      {
        echo "Employee name is: ".$this->name."<br/>";
        echo "Employee age is: ".$this->age."<br/>";
        echo "Employee salary is: ".$this->salary."<br/>";
      }
}
class manager extends employee{

  
      public  $total_salary,$phone=300,$transport=3000;
    public function show_manager_data()
    {
        $this->total_salary=$this->salary+$this->phone+$this->transport;
      echo "Employee name is: ".$this->name."<br/>";
      echo "Employee age is: ".$this->age."<br/>";
      echo "Employee salary is: ".$this->total_salary."<br/>";
    }

}
// $e1=new manager('Mahek',22,2000);
// $e1->show_employee_data();
$e2=new manager();
$e2->name='mahek';
$e2->age=22;
$e2->salary=2000;
$e2->show_manager_data();
?>