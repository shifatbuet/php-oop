<?php

class  Cars {
    var $wheel = 4;
    function engine(){
        echo "Engine of parent class"."<br>";
    }
    function machine(){
        return "wheels ".$this->wheel." ok";
    }
}

$car = new Cars();
$car->engine();
echo  $car->machine();
