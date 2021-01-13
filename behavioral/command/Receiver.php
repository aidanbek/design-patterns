<?php


namespace behavioral\command;


class Receiver
{
    public function makeStartPoint(string $startPoint): void
    {
        echo "receiver: making start point at {$startPoint}<br>";
    }

    public function makeFinishPoint(string $finishPoint): void
    {
        echo "receiver: making finish point at {$finishPoint}<br>";
    }
}