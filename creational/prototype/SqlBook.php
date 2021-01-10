<?php


namespace creational\prototype;


class SqlBook extends AbstractBook
{
    public function __construct()
    {
        $this->topic = 'SQL';
    }

    public function __clone()
    {

    }
}