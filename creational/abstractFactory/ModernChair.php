<?php

namespace creational\abstractFactory;


class ModernChair implements IChair
{
    public function __construct()
    {
        echo 'create ModernChair<br>';
    }

    public function hasLegs(): bool
    {
        return false;
    }

    public function hasArmrests(): bool
    {
        return false;
    }
}