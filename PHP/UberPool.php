<?php

require_once('./Car.php');

class UberPool extends Car
{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model)
    {
        parent::__construct($license, $driver, ); #Equivale al super de Java
        $this->brand = $brand;
        $this->model = $model;
    }

    
}

?>