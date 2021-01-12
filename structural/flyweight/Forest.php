<?php


namespace structural\flyweight;


class Forest
{
    /**
     * @var Tree[]
     */
    private array $trees;

    public function plantTree(int $x, int $y, $name, $color, $texture)
    {
        echo "Adding new tree<br>";
        $treeType = TreeFactory::getTreeType($name, $color, $texture);
        $this->trees[] = new Tree($x, $y, $treeType);
    }

    public function draw(string $place)
    {
        echo "Starting drawing forest<br>";
        foreach ($this->trees as $tree) {
            $tree->draw($place);
        }
    }
}