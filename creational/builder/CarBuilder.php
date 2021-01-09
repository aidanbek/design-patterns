<?php


namespace creational\builder;


class CarBuilder implements ICarBuilder
{
    private Car $car;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->car = new Car();
    }

    public function setSeats(int $number): void
    {
        $this->car->addPart("seats: {$number}");
    }

    public function setEngine(string $engine): void
    {
        $this->car->addPart("engine: {$engine}");

    }

    public function setTripComputer(): void
    {
        $this->car->addPart("trip computer: not needed");

    }

    public function setGPS(): void
    {
        $this->car->addPart("GPS: Galileo");
    }

    public function getResult(): Car
    {
        $result = $this->car;
        $this->reset();
        return $result;
    }
}