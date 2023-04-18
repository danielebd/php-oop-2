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

}