<?php 
class Toy extends Product{
    protected $detail;
    protected $dimension;

    public function __construct(string $_name, float $_price, $_animal, string $_img, string $_detail, string $_dimension)
    {
        parent::__construct($_name, $_price, $_animal, $_img);
        $this->detail = $_detail;
        $this->dimension = $_dimension;
    }

    //DETAILS
    public function get_detail(){
        return $this->detail; 
    }
    public function set_detail($_detail){
        $this->detail = $_detail; 
    }

    //DIMENSION
    public function get_dimension(){
        return $this->dimension; 
    }
    public function set_dimension($_dimension){
        $this->dimension = $_dimension; 
    }
}
