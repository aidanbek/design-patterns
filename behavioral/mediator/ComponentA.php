<?php


namespace behavioral\mediator;


class ComponentA extends BaseComponent
{
    public function doA(): void
    {
        echo "component a does A<br>";
        $this->mediator->notify($this, 'A');
    }

    public function doB(): void
    {
        echo "component a does B<br>";
        $this->mediator->notify($this, 'B');
    }
}