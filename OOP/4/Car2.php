<?php

class Car2
{
    public $brand;
    public $model;
    public $year;
    public $driver;

    private $price=false;

    public function __construct()
    {
        echo "Car created";
    }


    public function setPrice($price)
    {
      $this->price=round($price,2);
    }

        public function getPrice ()
    {

        if ($this->price)
        {
        echo $this->price;
        }
        else
            {
                number_format($this->price);
            }

    }

    public function showBrand()
    {
        echo $this->brand;
    }
    public function showModel()
    {
        echo $this->model;
    }

}