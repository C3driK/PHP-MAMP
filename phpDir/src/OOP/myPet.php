<?php
class Pet
{
    public $name; // Property
    public $age;
    private $health; //Only the class can access this property

    //Constructor: sets up the pet when created
    public function __construct($name, $health)
    {
        $this->name = $name;
        //$this->age = $age;
        $this->health = $health;
    }


    public function getHealth()
    {
        return $this->health; //getter method
    }

    public function setHealth($newHealth)
    {
        if ($newHealth >= 0 && $newHealth <= 100) {
            $this->health = $newHealth; //setter with validation
        }
    }
    //Method: what the pet can do
    public function sayHello()
    {
        echo "Hi, I'm $this->name, and I'm $this->health percent healthy\n";
    }
}
$myPet = new Pet("Rishu", 5);
$myPet->sayHello();

$pet2 = new Pet("mai", 18);
$pet2->sayHello();
echo $myPet->setHealth(50);
echo $myPet->getHealth();
