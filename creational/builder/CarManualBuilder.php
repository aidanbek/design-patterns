<?php


namespace creational\builder;


class CarManualBuilder implements ICarBuilder
{
    private CarManual $car;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->car = new CarManual();
    }

    public function setSeats(int $number): void
    {
        $this->car->addProperty("Seats: {$number}");
    }

    public function setEngine(string $engine): void
    {
        $this->car->addProperty("Engine: {$engine}");
    }

    public function setTripComputer(): void
    {
        $this->car->addProperty("Trip Computer: default");
    }

    public function setGPS(): void
    {
        $this->car->addProperty("GPS: Glonass");
    }

    public function getResult(): CarManual
    {
        $result = $this->car;
        $this->reset();
        return $result;
    }
}