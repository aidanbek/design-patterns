<?php


namespace creational\factoryMethod;

require_once 'IProduct.php';

interface ICreator
{
    public function createProduct(): IProduct;
}