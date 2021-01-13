<?php


namespace behavioral\mediator;


class ConcreteMediator implements Mediator
{
    private ComponentA $componentA;
    private ComponentB $componentB;

    public function __construct(ComponentA $componentA, ComponentB $componentB)
    {
        $this->componentA = $componentA;
        $this->componentA->setMediator($this);
        $this->componentB = $componentB;
        $this->componentB->setMediator($this);
    }

    public function notify(object $sender, string $event): void
    {
        if ($event === 'A') {
            echo 'mediator reacts on A and triggers:<br>';
            $this->componentA->doB();
        }

        if ($event === 'D') {
            echo 'mediator reacts on D and triggers:<br>';
            $this->componentB->doC();
        }
    }
}