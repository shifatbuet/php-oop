<?php

class  Cars {
    function engine(){

    }

    function machine(){

    }
}

$methods = get_class_methods("Cars");

foreach ($methods as $method) {
    echo $method."<br>";
}
