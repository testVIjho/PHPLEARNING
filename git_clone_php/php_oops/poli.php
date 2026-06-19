<?php
class Learn{
    public function sound(){
        echo"Learn sound method  in parent class";
    }
    public function amound(){
        echo"Learn amound method in parent class";
    }
}
class Dog extends Learn{
    public function sound(){
    echo $this->amound();
    echo'<br>';
    parent::sound();
    echo'<br>';
    echo"Bark Bark";
}
}
class Cat extends Learn{
    public function sound(){
        echo"Meow Meow";
    }

}
$test = new Dog();
$test->sound();
// $animals = [new Dog(),new Cat()];
// foreach($animals as $ani){
//     $ani->sound();
//     echo'<br>';
// }

//loop did not not which object nu php will decide 
// Dog object->Dog::sound()
// Cat object->Cat::sound()

// it is called runtime polymorphism
?>