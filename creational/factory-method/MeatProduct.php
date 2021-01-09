<?php


namespace creational\factoryMethod;

require_once 'IProduct.php';

class MeatProduct implements IProduct
{
    public function doStuff(): void
    {
        echo "getting meat product<br>";
    }
}