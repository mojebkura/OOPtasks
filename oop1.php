<?php
class Car{

private $color;
private $year;
private $izgotovitel;
private $engine;

public function __construct($color,$year,$izgotovitel, $newEngine){
$this->color = $color;
$this->year = $year;
$this->izgotovitel = $izgotovitel;
$this->$newEngine = $newEngine;

} 
public function startEngine(){
    $this->engine->on();
}
}
class Engine{
    public function on(){

    }
    public function off(){
        
    }
}
$engine = new Engine();
$myCar = new Car('красный','1812', 'копийка', $engine);
$myCar->startEngine();