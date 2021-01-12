<?php


namespace structural\proxy;


interface Cacheable
{
    public function store(string $key, string $value): void;

    public function getValue(string $key): string;

    public function setValue(string $key, string $newValue): void;

    public function unset(string $key): void;

    public function isExist(string $key): bool;
}