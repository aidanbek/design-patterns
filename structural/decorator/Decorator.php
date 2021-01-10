<?php


namespace structural\decorator;


class Decorator implements IComponent
{
    protected IComponent $component;

    public function __construct(IComponent $component)
    {
        $this->component = $component;
    }

    public function operation(): string
    {
        return $this->component->operation();
    }
}