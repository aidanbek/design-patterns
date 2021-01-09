<?php


namespace creational\factoryMethod;

require_once 'ICreator.php';
require_once 'IProduct.php';
require_once 'MilkProduct.php';

class MilkProductCreator implements ICreator
{

    public function createProduct(): IProduct
    {
        return new MilkProduct();
    }
}