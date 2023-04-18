<?php 
class Acessorie extends Product {
    protected $material;
    protected $dimension ;

    public function __construct(string $_name, float $_price, $_animal, string $_img, string $_material, string $_dimension = 'ND')
    {
        parent::__construct($_name, $_price, $_animal, $_img);
        $this->material = $_material;
        $this->dimension = $_dimension;
    }

    //MATERIAL
    public function get_material(){
        return $this->material; 
    }
    public function set_material($_material){
        $this->material = $_material; 
    }

    //DIMENSION
    public function get_dimension(){
        return $this->dimension; 
    }
    public function set_dimension($_dimension){
        $this->dimension = $_dimension; 
    }
}