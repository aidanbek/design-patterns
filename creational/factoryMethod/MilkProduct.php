<?php


namespace creational\factoryMethod;


class MilkProduct implements IProduct
{
    public function doStuff(): void
    {
        echo "getting milk product<br>";
    }
}