<?php


namespace behavioral\chainOfResponsibility;


interface Handleable
{
    public function setNext(Handleable $handler): Handleable;

    public function handle(string $request): ?string;
}