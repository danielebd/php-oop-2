<?php 
class Food extends Product{
    protected $weigth;
    protected $ingridient;

    public function __construct(string $_name, float $_price, $_animal, string $_img, float $_weigth, string $_ingridient)
    {
        parent::__construct($_name, $_price, $_animal, $_img);
        $this->weigth = $_weigth;
        $this->ingridient = $_ingridient;
    }
}