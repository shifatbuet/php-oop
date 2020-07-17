<?php

class  Cars {
    private $wheel = 4;   // only this class
    public $wheel_pb = 4;  // available everywhere
    protected $wheel_pr = 4; // inside extended sub class
    static $wheel_st = 87; // scope resoulution
    function engine(){
        echo "Engine of parent class"."<br>";
    }
    function machine(){
        return "wheels ".$this->wheel." ok";
    }
}


class BMW extends Cars {
    function getProtected(){
        return $this->wheel_pr;
    }
}
$bmw = new BMW();

echo  $bmw->wheel_pb;
echo  "<br>";
echo  $bmw->getProtected();
echo  "<br>";
echo  "Static property:: ";
echo Cars::$wheel_st; //scope resolution with class
echo BMW::$wheel_st; //scope resolution with extended class
