<?php


namespace structural\bridge;


interface IDevice
{
    public function isEnabled(): bool;

    public function enable(): void;

    public function disable(): void;
}