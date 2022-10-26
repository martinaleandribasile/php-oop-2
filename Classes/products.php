<?php
class Products
{
    public $name;
    public $price;
    public $id = 'xxx111';


    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }

    // settings
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    function setId()
    {
        $this->id = $this->id . $this->name;
    }
}


class Food extends Products
{
    public $animal;
    public $expdate;
    public $ingredients;


    public function __construct($name, $price, $animal, $date, $ingredients)
    {
        parent::__construct($name, $price);
        $this->animal = $animal;
        $this->expdate = $date;
        $this->ingredients = $ingredients;
    }
}

class Game extends Products
{
    public $animal;
    public $material;
    public $age_size_range;


    public function __construct($name, $price, $animal, $material, $size)
    {
        parent::__construct($name, $price);
        $this->animal = $animal;
        $this->material = $material;
        $this->age_size_range = $size;
    }
}

class Kennels extends Products
{
    public $animal;
    public $material;
    public $age_size_range;
    public $howclean;


    public function __construct($name, $price, $animal, $material, $size)
    {
        parent::__construct($name, $price);
        $this->animal = $animal;
        $this->material = $material;
        $this->age_size_range = $size;
    }
}


$fuffy = new Game('fuffy', 35.00, 'cane', 'gomma', 'medium');
$fuffy->setId();
var_dump($fuffy);
