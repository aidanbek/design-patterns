<?php


namespace behavioral\templateMethod;


class Operator
{
    private AbstractClass $class;

    public function __construct(AbstractClass $class)
    {
        $this->class = $class;
    }

    public function operate()
    {
        $this->class->templateMethod();
    }

    public function setClass(AbstractClass $class): Operator
    {
        $this->class = $class;
        return $this;
    }
}