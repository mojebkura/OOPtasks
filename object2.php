<?php

class headphones
{
    public $name;
    public $price;
    public $type;

    public function getHeadphones()
    {
        echo 'Наушники' . $this->name . '<br>' . '2550руб' . $this->price . '<br>' . 'проводные' . $this->type . '<br>';
    }
}

$newHeadphones = new Headphones();
$newHeadphones->getHeadphones();