<?php


namespace behavioral\templateMethod;


abstract class AbstractClass
{
    final public function templateMethod(): void
    {
        $this->baseOperation1();
        $this->requiredOperation1();
        $this->baseOperation2();
        $this->hook1();
        $this->requiredOperation2();
        $this->baseOperation3();
        $this->hook2();
    }

    public function baseOperation1()
    {
        echo "abstract class: base operation1<br>";
    }

    public function baseOperation2()
    {
        echo "abstract class: base operation2<br>";
    }

    public function baseOperation3()
    {
        echo "abstract class: base operation3<br>";
    }

    abstract public function requiredOperation1(): void;

    abstract public function requiredOperation2(): void;

    protected function hook1(): void
    {
    }

    protected function hook2(): void
    {
    }
}