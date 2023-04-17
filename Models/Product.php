<?php

class Product
{
    private $name;
    private $price;
    private $animal;
    private $image;

    public function __construct(string $_name, float $_price, string $_animal, string $_img)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->animal = $_animal;
        $this->image = $_img;
        
    }
}

