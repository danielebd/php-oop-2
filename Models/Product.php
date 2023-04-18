<?php

require_once __DIR__.'/../Traits/Name.php';
require_once __DIR__.'/../Traits/Price.php';
require_once __DIR__.'/../Traits/Img.php';
class Product
{    
    
    use Name;
    use Price;
    use Image;
   

    private $animal;
    private $image;
    
    public function __construct(string $_name, float $_price, $_animal, string $_img)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->animal = $_animal;
        $this->image = $_img;
    }

    //ANIMALE
    public function get_animal(){
        return $this->animal; 
    }
    public function set_animal($_animal){
        $this->animal = $_animal; 
    }

}

