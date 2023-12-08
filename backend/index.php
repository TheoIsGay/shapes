<?php
header('Access-Control-Allow-Origin: *');

$data = ["message"=> "Message from PHP"];
echo json_encode($data);

abstract class Shape{
    public $color;
    abstract public function calculateArea();
}
