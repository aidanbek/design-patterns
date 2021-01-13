<?php


namespace behavioral\command;


interface Commandable
{
    public function execute(): void;
}