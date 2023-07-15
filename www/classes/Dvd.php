<?php

class Dvd extends Product
{
    /**
    * The  Dvd  size
    * @var integer
    */
    private $size;


    /**
    * Getter method to get the Dvd size
    *
    */
    public function getSize()
    {
        return $this->size;
    }

    /**
    * Setter method to set the Dvd size
    *
    */
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function save()
    {
    }
}
