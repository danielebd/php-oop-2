<?php

class Product
{    
    
    private $name;    
    private $price;
    private $animal;
    private $image;
    
    public function __construct(string $_name, float $_price, $_animal, string $_img)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->animal = $_animal;
        $this->image = $_img;
    }


    //NAME
    public function get_name(){
        return $this->name; 
    }
    public function set_name($_name){
        $this->name = $_name; 
    }

    //PREZZO
    public function get_price(){
        return $this->price; 
    }
    public function set_price($_price){
        $this->price = $_price; 
    }

    //ANIMALE
    public function get_animal(){
        return $this->animal; 
    }
    public function set_animal($_animal){
        $this->animal = $_animal; 
    }

    //IMMAGINE
    public function get_image(){
        return $this->image; 
    }
    public function set_image($_image){
        $this->image = $_image; 
    }
}

