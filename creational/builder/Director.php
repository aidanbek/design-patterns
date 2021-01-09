<?php


namespace creational\builder;


class Director
{
    private ICarBuilder $carBuilder;

    public function setBuilder(ICarBuilder $carBuilder)
    {
        $this->carBuilder = $carBuilder;
    }

    public function constructSportCar()
    {
        $this->carBuilder->setEngine('sport');
        $this->carBuilder->setGPS();
        $this->carBuilder->setSeats(2);
        $this->carBuilder->setTripComputer();
    }
}