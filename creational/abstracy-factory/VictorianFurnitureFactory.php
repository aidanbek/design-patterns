<?php


namespace creational\abstractFactory;


class VictorianFurnitureFactory implements IFurnitureFactory
{
    public function makeChair(): IChair
    {
        return new VictorianChair();
    }

    public function makeSofa(): ISofa
    {
        return new VictorianSofa();
    }

    public function makeTable(): ITable
    {
        return new VictorianTable();
    }
}