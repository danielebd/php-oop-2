<?php 

require_once __DIR__.'/../Traits/Name.php';

class Animal {
    
    use Name;

    private $name;
    private $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }


    //ICON
    public function get_icon(){
        return $this->icon; 
    }
    public function set_icon($_icon){
        $this->icon = $_icon; 
    }

    //ANIMAL
    public function get_category(){
        $icon = $this->icon;
        $name = $this->name;
        return "{$icon} {$name}";

    }
    

    
};

