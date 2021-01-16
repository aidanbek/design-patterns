<?php


namespace behavioral\state;


class ConcreteStateB extends State
{
    public function handle2(): void
    {
        echo "state b: handles request2<br>";
        echo "state b changes state of context<br>";
        $this->context->transitionTo(new ConcreteStateA());
    }

    public function handle1(): void
    {
        echo "state b: handles request1<br>";
    }
}