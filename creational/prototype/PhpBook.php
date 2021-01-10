<?php


namespace creational\prototype;


class PhpBook extends AbstractBook
{
    public function __construct()
    {
        $this->topic = 'PHP';
    }

    public function __clone()
    {

    }
}