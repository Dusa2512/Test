<?php
class cars{

    public $wheel_count=4;
    private $door_count=4;
    protected $seat_count=2;

    function car_detail(){
        echo $this->wheel_count."<br/>";
        echo $this->door_count."<br/>";
        echo $this->seat_count."<br/>";
    }

}
$bmw = new cars();
//echo $bmw->wheel_count;
$bmw->car_detail();
