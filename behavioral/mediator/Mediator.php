<?php


namespace behavioral\mediator;


interface Mediator
{
    public function notify(object $sender, string $event): void;
}