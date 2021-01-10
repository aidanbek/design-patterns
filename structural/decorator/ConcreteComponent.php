<?php


namespace structural\decorator;


class ConcreteComponent implements IComponent
{
    public function operation(): string
    {
        return 'some operation';
    }
}