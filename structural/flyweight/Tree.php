<?php


namespace structural\flyweight;


class Tree
{
    private int $x;
    private int $y;
    private TreeType $treeType;

    public function __construct(int $x, int $y, TreeType $treeType)
    {
        $this->x = $x;
        $this->y = $y;
        $this->treeType = $treeType;
    }

    public function draw(string $place): void
    {
        $this->treeType->draw($place, $this->x, $this->y);
    }
}