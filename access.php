<?php

class  Cars {
    private $wheel = 4;   // only this class
    public $wheel_pb = 4;  // available everywhere
    protected $wheel_pr = 4; // inside extended sub class
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
