<?php


namespace creational\abstractFactory;


class ModernFurnitureFactory implements IFurnitureFactory
{
    public function makeChair(): IChair
    {
        return new ModernChair();
    }

    public function makeSofa(): ISofa
    {
        return new ModernSofa();
    }

    public function makeTable(): ITable
    {
        return new ModernTable();
    }
}