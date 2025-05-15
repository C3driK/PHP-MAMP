<?php
session_start();

// Base Pet class
abstract class Pet
{
    public $name;
    public $age;
    public $type;

    public function __construct($name, $age, $type)
    {
        $this->name = $name;
        $this->age = $age;
        $this->type = $type;
    }

    abstract public function speak();
}

// Subclasses for each type of pet
class Dog extends Pet
{
    public function speak()
    {
        return "Woof! I'm $this->name and I love bones!";
    }
}

class Cat extends Pet
{
    public function speak()
    {
        return "Meow! I'm $this->name and I love naps!";
    }
}

class Bird extends Pet
{
    public function speak()
    {
        return "Tweet! I'm $this->name and I can sing!";
    }
}

// PetShop class
class PetShop
{
    public function addPet($pet)
    {
        $_SESSION['pets'][] = $pet;
    }

    public function getPets()
    {
        return $_SESSION['pets'] ?? [];
    }
}

// Initialize pet shop
$shop = new PetShop();

// Add pet from form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $type = $_POST['type'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    if ($type && $name && $age) {
        switch ($type) {
            case 'dog':
                $pet = new Dog($name, $age, $type);
                break;
            case 'cat':
                $pet = new Cat($name, $age, $type);
                break;
            case 'bird':
                $pet = new Bird($name, $age, $type);
                break;
            default:
                $pet = null;
        }

        if ($pet) {
            $shop->addPet($pet);
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Pet Shop</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            padding: 20px;
        }

        form {
            margin-bottom: 30px;
        }

        .pet {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px auto;
            width: 300px;
        }
    </style>
</head>

<body>

    <h2>Welcome to the Pet Shop 🐶🐱🐦</h2>

    <form method="POST">
        <label>Type:</label>
        <select name="type" required>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
        </select><br>

        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Age:</label>
        <input type="number" name="age" min="0" required><br>

        <button type="submit">Add Pet</button>
    </form>

    <h3>Current Pets in the Shop:</h3>

    <?php
    $pets = $shop->getPets();
    if (count($pets) === 0) {
        echo "<p>No pets yet. Add one above!</p>";
    } else {
        foreach ($pets as $pet) {
            echo "<div class='pet'>
                <strong>Type:</strong> " . ucfirst($pet->type) . "<br>
                <strong>Name:</strong> $pet->name<br>
                <strong>Age:</strong> $pet->age<br>
                <em>" . $pet->speak() . "</em>
              </div>";
        }
    }
    ?>

</body>

</html>