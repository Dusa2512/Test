<?php
class cars{

    var $wheel =4;
    function getting(){
        return "hello";
    }

}
$bmw = new cars();

class truck extends cars {
//var $wheel=10;
}
$ben =new truck();
echo $ben->wheel;