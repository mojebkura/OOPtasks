<?php
class Bread{
    public $name;
    public $price;
    public $type;
    public function  getBread(){
        echo 'Хлеб' . $this->name . '<br>' . '50руб' . $this->price . '<br>' . 'батон' . $this->type . '<br>';
    }
}
$newBread = new Bread();
$newBread->getBread();