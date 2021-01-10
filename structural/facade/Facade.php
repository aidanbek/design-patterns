<?php


namespace structural\facade;


class Facade
{
    private FirstSubsystem $firstSubsystem;
    private SecondSubsystem $secondSubsystem;

    public function __construct()
    {
        $this->firstSubsystem = new FirstSubsystem();
        $this->secondSubsystem = new SecondSubsystem();
    }

    public function operation()
    {
        echo 'first system runs<br>';
        echo $this->firstSubsystem->operationX();
        echo 'second system runs<br>';
        echo $this->secondSubsystem->operationZ();
    }
}