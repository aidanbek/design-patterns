<?php

namespace creational\builder;


class Car
{
    private array $parts = [];

    public function addPart(string $part)
    {
        $this->parts[] = $part;
    }

    public function getInformation()
    {
        return implode(",", $this->parts);
    }
}