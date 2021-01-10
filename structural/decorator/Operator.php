<?php


namespace structural\decorator;


class Operator
{
    private IComponent $component;

    public function __construct(IComponent $component)
    {
        $this->component = $component;
    }

    public function run(): string
    {
        return $this->component->operation();
    }
}