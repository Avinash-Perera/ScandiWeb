<?php

class Furniture extends Product
{
    /**
    * The  Furniture  height
    * @var integer
    */
    private $height;

     /**
    * The  Furniture  width
    * @var integer
    */
    private $width;

     /**
    * The  Furniture  lenght
    * @var integer
    */
    private $length;

    /**
    * Getter method to get the Furniture height
    * 
    */
    public function getHeight()
    {
        return $this->height;
    }

    /**
    * Setter method to set the Furniture height
    * 
    */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
    * Getter method to get the Furniture width
    * 
    */
    public function getWidth()
    {
        return $this->width;
    }

    /**
    * Setter method to set the Furniture width
    * 
    */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
    * Getter method to get the Furniture length
    * 
    */
    public function getLength()
    {
        return $this->length;
    }

    /**
    * Setter method to set the Furniture length
    * 
    */
    public function setLenght($length)
    {
        $this->length = $length;
    }

    public function save()
    {
    }
}