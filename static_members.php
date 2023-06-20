<?php
class base{
    public static $name='yahoo baba';
    // public function show()
    // {
    //     echo self::$name;
    // }
    // public function __construct($n){
    //     // self::show();
    //     self::$name=$n;
    // }
}
//direct access without object creating
// echo base::$name;
// base::show();
class derived extends base{
    public static function show()
    {
        echo parent::$name;
    }

}
 derived::show();
// $test =new derived();
// $test->show();
?>