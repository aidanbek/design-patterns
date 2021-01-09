<?php


namespace creational\abstractFactory;


class Operator
{
    private IFurnitureFactory $factory;

    public function __construct(IFurnitureFactory $factory)
    {
        $this->factory = $factory;
    }

    public function changeFactory(IFurnitureFactory $factory): Operator
    {
        $this->factory = $factory;
        return $this;
    }

    public function getFactory(): IFurnitureFactory
    {
        return $this->factory;
    }
}