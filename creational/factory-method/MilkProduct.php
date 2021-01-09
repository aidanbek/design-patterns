<?php


namespace creational\factoryMethod;

require_once 'IProduct.php';

class MilkProduct implements IProduct
{
    public function doStuff(): void
    {
        echo "getting milk product<br>";
    }
}