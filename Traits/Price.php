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
        $this->price = $_price;
    }
}
