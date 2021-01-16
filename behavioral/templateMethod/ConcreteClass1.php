<?php


namespace behavioral\templateMethod;


class ConcreteClass1 extends AbstractClass
{
    public function requiredOperation1(): void
    {
        echo "ConcreteClass1: run operation1<br>";
    }

    public function requiredOperation2(): void
    {
        echo "ConcreteClass1: run operation2<br>";
    }
}