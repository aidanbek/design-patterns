<?php


namespace behavioral\memento;


class ConcreteMemento implements Memento
{
    private string $state;
    private string $date;

    public function __construct(string $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    public function getName(): string
    {
        return $this->date . "/(" . $this->state . ")";
    }

    public function getState(): string
    {
        return $this->state;
    }
}