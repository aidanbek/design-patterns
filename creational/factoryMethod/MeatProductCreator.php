<?php


namespace creational\factoryMethod;


class MeatProductCreator implements ICreator
{

    public function createProduct(): IProduct
    {
        return new MeatProduct();
    }
}