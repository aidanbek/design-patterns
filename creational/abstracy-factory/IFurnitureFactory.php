<?php


namespace creational\abstractFactory;


interface IFurnitureFactory
{
    public function makeChair(): IChair;
    public function makeSofa(): ISofa;
    public function makeTable(): ITable;
}