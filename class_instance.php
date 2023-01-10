<?php
class Vehicle{

}

class Bike extends Vehicle {

    function getting()
    {
        echo "Hello Student";
    }

    function getting2()
    {
        echo "Hello guy";
    }
}
class Cars extends Vehicle {

    function getting()
    {
        echo "Hello Student";
    }

    function getting2()
    {
        echo "Hello guy";
    }

}


$bmw = new Cars();
$mecedes = new Cars();

$bmw->getting2()."<br>";

$mecedes->getting();