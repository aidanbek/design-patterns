<?php


namespace structural\adapter;


class WindowsNotificationEngine implements INotificationEngine
{
    public function send(string $title, string $message): void
    {
        echo "windows notification with title: ${title}, message: {$message}";
    }
}