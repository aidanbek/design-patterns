<?php


namespace behavioral\command;


class SimpleCommand implements Commandable
{
    private string $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        echo "simple command run payload: {$this->payload}<br>";
    }
}