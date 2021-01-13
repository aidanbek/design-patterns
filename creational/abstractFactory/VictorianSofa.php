<?php


namespace creational\abstractFactory;


class VictorianSofa implements ISofa
{
    public function __construct()
    {
        echo 'create VictorianSofa<br>';
    }

    public function isSolid(): bool
    {
        return false;
    }
}