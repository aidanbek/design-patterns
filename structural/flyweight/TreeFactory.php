<?php


namespace structural\flyweight;


class TreeFactory
{
    /**
     * @var TreeType[]
     */
    private static array $treeTypes = [];

    public static function getTreeType(string $name, string $color, string $texture): TreeType
    {
        $type = null;

        foreach (self::$treeTypes as $treeType) {
            if (
                ($treeType->getName() === $name) &&
                ($treeType->getColor() === $color) &&
                ($treeType->getTexture() === $texture)
            ) {
                echo "Tree type found...<br>";
                $type = $treeType;
            }
        }

        if (is_null($type)) {
            echo "Tree type not found. Adding...<br>";
            $type = new TreeType($name, $color, $texture);
            self::$treeTypes[] = $type;
        }

        return $type;
    }
}