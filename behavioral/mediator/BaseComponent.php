<?php


namespace behavioral\mediator;


class BaseComponent
{
    protected ?Mediator $mediator;

    public function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}