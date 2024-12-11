<?php
class Animal {
    public $name;
    public $age;

    function set_name($name) {
        $this->name = $name;
}

    function get_name() {
         return $this->name;
    }
}
class Human {
    public $name;
    public $age;

    function set_age($age) {
        $this->age = $age;
}

    function get_age() {
         return $this->age;
    }
}

$animal = new Animal();
$animal->set_name( "foxy");

$human = new Human();
$human ->set_age( 20);

echo "Hello my name is M.Ahmad end my dog name is ". $animal->get_name(). "and my dog age is " . $human->get_Age();
?>