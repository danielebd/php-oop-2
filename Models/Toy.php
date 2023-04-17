<?php 
class Toy extends Product{
    protected $detail;
    protected $dimension;

    public function __construct(string $_name, float $_price, string $_animal, string $_img, string $_detail, string $_dimension)
    {
        parent::__construct($_name, $_price, $_animal, $_img);
        $this->detail = $_detail;
        $this->dimension = $_dimension;
    }
}
