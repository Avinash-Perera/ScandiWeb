<?php

class Book extends Product
{
    /**
    * The  Book  weight
    * @var integer
    */
    private $weight;


    /**
    * Getter method to get the book weight
    * 
    */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
    * Setter method to set the book weight
    * 
    */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function save()
    {
    }
}
