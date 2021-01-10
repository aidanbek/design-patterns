<?php


namespace structural\composite;


abstract class AbstractComponent
{
    public function isComposite(): bool
    {
        return false;
    }

    public function add(AbstractComponent $component): void
    {
    }

    public function remove(AbstractComponent $component): void
    {
    }

    abstract public function operation(): void;
}