<?php
trait Image
{
    private $image;

    //IMMAGINE
    public function get_image(){
        return $this->image; 
    }
    public function set_image($_image){
        $this->image = $_image; 
    }
}
