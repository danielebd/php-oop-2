<?php 
class Animal {
    private $name;
    private $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    //NAME
    public function get_name(){
        return $this->name; 
    }
    public function set_name($_name){
        $this->name = $_name; 
    }

    //ICON
    public function get_icon(){
        return $this->icon; 
    }
    public function set_icon($_icon){
        $this->icon = $_icon; 
    }
}