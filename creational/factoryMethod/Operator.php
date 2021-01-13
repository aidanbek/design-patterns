<?php


namespace creational\factoryMethod;


class Operator
{
    private ICreator $creator;

    public function __construct(ICreator $creator)
    {
        $this->creator = $creator;
    }

    public function changeCreator(ICreator $creator): Operator
    {
        echo "changing creator<br>";
        $this->creator = $creator;
        return $this;
    }

    public function getProduct(): IProduct
    {
        return $this->creator->createProduct();
    }
}