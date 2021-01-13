<?php


namespace behavioral\command;


class Invoker
{
    private Commandable $onStart;
    private Commandable $onFinish;

    public function setOnStart(Commandable $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(Commandable $command): void
    {
        $this->onFinish = $command;
    }

    public function invoke(): void
    {
        echo "invoker: if on start command exists...<br>";
        if ($this->onStart instanceof Commandable) {
            $this->onStart->execute();
        }
        echo "invoker: if on finish command exists...<br>";
        if ($this->onFinish instanceof Commandable) {
            $this->onFinish->execute();
        }
    }
}