<?php

class  Cars {
    static $wheel = 4;

    /**
     * Cars constructor.
     */
    public function __construct()
    {
        self::$wheel_st++;
    }

    /**
     * @return int
     */
    static function getWheel()
    {
        return self::$wheel;
    }




}

class  Truck extends Cars{

}


$cars= new Truck();

echo  $cars->getWheel();
echo  $cars->getWheel();
