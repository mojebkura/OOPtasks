<?php


class Scissors
{
    public $name;
    public $price;
    public $type;


    public function getScissors()
    {
        echo 'Ножницы' . $this->name . '<br>' . '350руб' . $this->price . '<br>' . 'Педикюрные' . $this->type . '<br>' ;
    }
}

$newScissors = new scissors();
$newScissors->getScissors();