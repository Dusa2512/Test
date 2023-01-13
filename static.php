<?php
class cars{
    static $wheel_count=4;
    static $door_count =4;
//    protected $seat_count=2;

    static function car_detail(){
        echo cars::$wheel_count;
        echo cars::$door_count;

    }
}


$bmw = new Cars();
//echo $bmw->wheel_count."<br/>";
echo cars::$door_count;
echo cars::car_detail();

