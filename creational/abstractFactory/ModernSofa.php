<?php


namespace creational\abstractFactory;


class ModernSofa implements ISofa
{
    public function __construct()
    {
        echo 'create ModernSofa<br>';
    }

    public function isSolid(): bool
    {
        return true;
    }
}