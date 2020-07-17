<?php
include "config.php";

class Databases {
    public $con;

    /**
     * Databases constructor.
     * @param $con
     */
    public function __construct()
    {
        $this->open_connection();
    }


    function open_connection(){
        //$this->con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $this->con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if($this->con->connect_errno){
            die("connection dead".$this->con->connect_error);
        }
    }

    public function query($sql){

        $result =mysqli_query($this->con,$sql);
        if(!$result){
            die("okk failed");
        }
        return $result;
    }
}

$database = new Databases();


