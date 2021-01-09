<?php

namespace creational\builder;


class CarManual
{
    private string $properties = '';

    public function addProperty(string $property)
    {
        $this->properties .= $property." ";
    }

    public function getInfo()
    {
        return $this->properties;
    }
}