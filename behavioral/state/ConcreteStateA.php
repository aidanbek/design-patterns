<?php


namespace behavioral\state;


class ConcreteStateA extends State
{
    public function handle1(): void
    {
        echo "state a: handles request1<br>";
        echo "state a changes state of context<br>";
        $this->context->transitionTo(new ConcreteStateB());
    }

    public function handle2(): void
    {
        echo "state a: handles request2<br>";
    }
}