<?php


namespace creational\factoryMethod;


interface ICreator
{
    public function createProduct(): IProduct;
}