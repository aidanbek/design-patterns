<?php


namespace structural\decorator;


class EncryptionDecorator extends Decorator
{
    public function operation(): string
    {
        return "encrypted (" . parent::operation() . ")";
    }
}