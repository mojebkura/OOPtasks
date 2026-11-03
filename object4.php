<?php

class CD
{
    public $name;
    public $price;
    public $length;
    public $publisher;

    public function getCD()
    {
        echo 'Linkin Park: Hybrid Theory' . $this->name . '<br>' . '350руб' . $this->price . '<br>' . '37:40' . $this->length . '<br>' . 'WarnerBros' . $this->publisher . '<br>';
    }
}

$newCD = new CD();
$newCD->getCD();