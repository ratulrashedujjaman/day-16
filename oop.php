<?php

class DemoOne{
    public $name='Ratul';
    public $city='Dhaka';

    function  add(){
        echo 'In Add ';
    }

    function  hello(){
        echo 'In Hello';
    }
}

$demo= new DemoOne;

echo $demo->city;