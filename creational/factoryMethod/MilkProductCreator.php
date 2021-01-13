<?php


namespace creational\factoryMethod;


class MilkProductCreator implements ICreator
{

    public function createProduct(): IProduct
    {
        return new MilkProduct();
    }
}