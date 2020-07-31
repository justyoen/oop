<?php

class Animal{
    public $name;
    public $legs;
    public $cold_blooded;


    function __construct($name, $legs=2, $cold_blooded = "false"){
        $this -> name = $name;
        $this -> legs = $legs;
        $this -> cold_blooded = $cold_blooded;
    }

    public function get_name(){
        return $this -> name;
    }

    public function set_legs($legs){
        $this -> legs = $legs;
    }
    public function get_cold_blooded($cold_blooded){
        return $this -> cold_blooded = $cold_blooded;
    }





}
?>