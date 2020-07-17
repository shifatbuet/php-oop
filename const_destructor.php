<?php

class  Cars {
    static $wheel = 4;
    private $wheelpr = 4;

    /**
     * Cars constructor.
     */
    public function __construct()
    {
        self::$wheel++; // it will increment coz it tracks last instances
        $this->wheelpr++; //it will not increase
    }

    /**
     * @return int
     */
    static function getWheel()
    {
        return self::$wheel;
    }

    /**
     * @return int
     */
    function  getWheelPr()
    {
        return $this->wheelpr;
    }





}

class  Truck extends Cars{

}


$cars= new Truck();

echo  "OKKK --------";
echo  "<br>";
echo  $cars->getWheel();
echo  $cars->getWheelPr();
$cars1= new Truck();
echo  "OKKK --------";
echo  "<br>";
echo  $cars1->getWheel();
echo  $cars1->getWheelPr();
