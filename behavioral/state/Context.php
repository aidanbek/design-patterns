<?php


namespace behavioral\state;


class Context
{
    private State $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(State $state): void
    {
        echo "context: transition to " . get_class($state) . " <br>";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function request1(): void
    {
        $this->state->handle1();
    }

    public function request2(): void
    {
        $this->state->handle2();
    }
}