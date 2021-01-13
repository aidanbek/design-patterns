<?php


namespace behavioral\chainOfResponsibility;


abstract class AbstractHandler implements Handleable
{
    private ?Handleable $nextHandler = null;

    public function setNext(Handleable $handler): Handleable
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}