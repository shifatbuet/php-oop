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


class BMW extends Cars {

}
$bmw = new BMW();

echo  $bmw->wheel;
