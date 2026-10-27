<?php

class Pen
{
    public $name;
    public $price;

    public function getPen()
    {
        echo 'Ручка' . $this->name . '<br>' . '250руб' . $this->price . '<br>';
    }
}

$newPen = new Pen();
$newPen->getPen();