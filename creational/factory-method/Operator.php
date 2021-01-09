<?php


namespace creational\factoryMethod;

require_once 'IProduct.php';
require_once 'ICreator.php';
require_once 'Operator.php';

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