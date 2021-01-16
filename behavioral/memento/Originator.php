<?php


namespace behavioral\memento;


class Originator
{
    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function doOperation(): void
    {
        echo "originator: do operation<br>";
        $this->state = $this->generateRandomString(32);
        echo "originator: my state changed<br>";
    }

    public function generateRandomString(int $length = 10): string
    {
        return substr(
            str_shuffle(
                str_repeat(
                    $x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    ceil($length/strlen($x))
                )
            ),
            1,
            $length
        );
    }

    public function save(): Memento
    {
        return new ConcreteMemento($this->state);
    }

    public function restore(Memento  $memento): void
    {
        $this->state = $memento->getState();
    }
}