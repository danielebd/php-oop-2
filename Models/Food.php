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

    //WEIGTH
    public function get_weigth(){
        return $this->weigth; 
    }
    public function set_weigth($_weigth){
        $this->weigth = $_weigth; 
    }

    //INGRIDIENT
    public function get_ingridient(){
        return $this->ingridient; 
    }
    public function set_name($_ingridient){
        $this->ingridient = $_ingridient; 
    }
}