<?php


namespace behavioral\memento;


use Exception;

class Caretaker
{
    /**
     * @var Memento[]
     */
    private array $mementos = [];

    private Originator $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backup(): void
    {
        echo "caretaker: saving originator state<br>";
        $this->mementos[] = $this->originator->save();
    }

    public function undo(): void
    {
        if (count($this->mementos) === 0) {
            return;
        }

        $memento = array_pop($this->mementos);

        echo "caretaker: restoring state to " . $memento->getName() . "<br>";
        try {
            $this->originator->restore($memento);
        } catch (Exception $exception) {
            $this->undo();
        }
    }

    public function showHistory()
    {
        echo "caretaker: shows history<br>";
        foreach ($this->mementos as $memento) {
            echo $memento->getName()."<br>";
        }
    }
}