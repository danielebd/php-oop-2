<?php
trait Price
{
    private $price;

    //PREZZO
    public function get_price()
    {
        return $this->price;
    }
    public function set_price($_price)
    {
        {
            if($_price <= 0){
                throw new Exception('cifra troppo bassa');
            }
            $this->price = $_price;
        }
    }
}
