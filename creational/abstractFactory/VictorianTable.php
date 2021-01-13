<?php


namespace creational\abstractFactory;


class VictorianTable implements ITable
{
    public function __construct()
    {
        echo 'create VictorianTable<br>';
    }

    public function isRound(): bool
    {
        return false;
    }
}