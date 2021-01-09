<?php


namespace creational\factoryMethod;

require_once 'ICreator.php';
require_once 'IProduct.php';
require_once 'MeatProduct.php';

class MeatProductCreator implements ICreator
{

    public function createProduct(): IProduct
    {
        return new MeatProduct();
    }
}