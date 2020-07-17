<?php

class  Cars {
    function engine(){
        echo "Engine of parent class";
    }
    function machine(){

    }
}

$car = new Cars();
$car->engine();
