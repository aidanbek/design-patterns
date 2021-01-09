<?php


namespace creational\factoryMethod;

require_once 'IProduct.php';
require_once 'ICreator.php';

class Operator
{
    private $creator;

    public function __construct(ICreator $creator)
    {
        $this->creator = $creator;
    }

    public function changeCreator(ICreator $creator)
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