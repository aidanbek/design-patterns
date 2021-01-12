<?php


namespace structural\flyweight;


class TreeType
{
    private string $name;
    private string $color;
    private string $texture;

    public function __construct($name, $color, $texture)
    {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }

    public function draw(string $place, int $x, int $y): void
    {
        echo "Draw tree (type: {$this->name}, color: {$this->color}, texture: {$this->texture}) at {$place}({$x}, {$y})<br>";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTexture(): string
    {
        return $this->texture;
    }
}