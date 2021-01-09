<?php

namespace creational\builder;


interface ICarBuilder
{
    public function reset(): void;

    public function setSeats(int $number): void;

    public function setEngine(string $engine): void;

    public function setTripComputer(): void;

    public function setGPS(): void;
}