<?php 
class Tienda{
    public function __construct(protected string $producto, protected int $precio, protected int $stockinicial)
    {
        
    }

    public function venderProductos($producto, $cantidad){

    }
    public function registrarVentas(){}
}

