<?php


namespace behavioral\mediator;


class ComponentB extends BaseComponent
{
    public function doC(): void
    {
        echo "component b does C<br>";
        $this->mediator->notify($this, 'C');
    }

    public function doD(): void
    {
        echo "component b does D<br>";
        $this->mediator->notify($this, 'D');
    }
}