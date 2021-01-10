<?php


namespace structural\adapter;


class NotificationSender
{
    private INotificationEngine $engine;

    public function __construct(INotificationEngine $engine)
    {
        $this->engine = $engine;
    }

    public function changeEngine(INotificationEngine $engine)
    {
        $this->engine = $engine;
    }

    public function send(string $title, string $message): void
    {
        $this->engine->send($title, $message);
    }
}