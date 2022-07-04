<?php
require_once('./Car.php');

class UberX extends Car
{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model)
    {
        parent::__construct($license, $driver); #Equivale al super de Java
        $this->brand = $brand;
        $this->model = $model;
    }

    public function printDataCar() 
    {
        echo "
            Licencia: $this->license 
            Driver: {$this->driver->name} 
            Document: {$this->driver->document}
            Número de pasajeros: $this->passenger
            Modelo: $this->model
            Marca: $this->brand"."<br>";
    }
}


?>