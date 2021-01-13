<?php


namespace behavioral\command;


class ComplexCommand implements Commandable
{
    private Receiver $receiver;

    private string $startPoint;
    private string $finishPoint;

    public function __construct(Receiver $receiver, string $startPoint, string $finishPoint)
    {
        $this->receiver = $receiver;
        $this->startPoint = $startPoint;
        $this->finishPoint = $finishPoint;
    }

    public function execute(): void
    {
        echo "complex command run should be done by receiver<br>";
        $this->receiver->makeStartPoint($this->startPoint);
        $this->receiver->makeFinishPoint($this->finishPoint);
    }
}