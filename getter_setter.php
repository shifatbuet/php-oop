<?php

class  Cars {
    private $wheel = 4;

    /**
     * @return int
     */
    public function getWheel()
    {
        return $this->wheel;
    }

    /**
     * @param int $wheel
     */
    public function setWheel($wheel)
    {
        $this->wheel = $wheel;
    }   // only this class

}


$cars= new Cars();
$cars->setWheel(5);
echo  $cars->getWheel();
