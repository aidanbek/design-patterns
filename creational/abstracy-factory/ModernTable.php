<?php


namespace creational\abstractFactory;


class ModernTable implements ITable
{
    public function __construct()
    {
        echo 'create ModernTable<br>';
    }

    public function isRound(): bool
    {
        return true;
    }
}