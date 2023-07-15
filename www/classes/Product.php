<?php


/**
 * Product
 *
 * Abstract class
 */
abstract class Product
{
    /**
    * Unique identifier
    * @var integer
    */
    protected $id;

    /**
     * The  product sku
     * @var string
     */
    protected $sku;
    /**
    * The  product name
    * @var string
    */
    protected $name;

    /**
    * The  product price
    * @var integer
    */
    protected $price;

    /**
    * Getter method for getting the product id
    *
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Setter method for setting the product id
    *
    */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
    * Getter method for getting the product sku
    *
    */
    public function getSku()
    {
        return $this->sku;
    }

    /**
    * Setter method for setting the product sku
    *
    */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
    * Getter method for getting the product name
    *
    */
    public function getName()
    {
        return $this->name;
    }

    /**
    * Setter method for setting the product name
    *
    */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
    * Getter method for getting the product price
    *
    */
    public function getPrice()
    {
        return $this->price;
    }

    /**
    * Setter method for setting the product price
    *
    */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
    * Abstract method for saving details to the db
    *
    */
    abstract public function save();
}
