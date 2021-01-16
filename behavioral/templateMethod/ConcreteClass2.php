<?php


namespace behavioral\templateMethod;


class ConcreteClass2 extends AbstractClass
{
    public function requiredOperation1(): void
    {
        echo "ConcreteClass2: run operation1<br>";
    }

    public function requiredOperation2(): void
    {
        echo "ConcreteClass2: run operation2<br>";
    }

    public function hook1():void
    {
        echo "ConcreteClass2: run hook1<br>";
    }
}