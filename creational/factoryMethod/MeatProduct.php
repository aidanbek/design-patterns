<?php


namespace creational\factoryMethod;


class MeatProduct implements IProduct
{
    public function doStuff(): void
    {
        echo "getting meat product<br>";
    }
}