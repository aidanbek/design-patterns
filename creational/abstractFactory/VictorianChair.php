<?php

namespace creational\abstractFactory;


class VictorianChair implements IChair
{
    public function __construct()
    {
        echo 'create VictorianChair<br>';
    }

    public function hasLegs(): bool
    {
        return true;
    }

    public function hasArmrests(): bool
    {
        return true;
    }
}