<?php
// не может использоваться напрямую
abstract class Animal {
    protected $name;
    // обязательно хотяб один абстрактный метод
    abstract function makeSound();
    public function jump(){
        
    }
}
// обязаны наследовать или будет ошибка: невозможно добавить переменную
class Cat extends Animal{
        public function makeSound(){
            echo 'meow';
        }
}
class Dog extends Animal{
        public function makeSound(){
            echo 'Israel';
        }
}
$cat = new Cat();
$dog = new Dog();
$cat->makeSound();
$dog->makeSound();
?>