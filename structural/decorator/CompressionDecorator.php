<?php


namespace structural\decorator;


class CompressionDecorator extends Decorator
{
    public function operation(): string
    {
        return "compressed (" . parent::operation() . ")";
    }
}