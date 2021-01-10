<?php


namespace structural\adapter;


class EmailNotificationEngine implements INotificationEngine
{
    public function send(string $title, string $message): void
    {
        echo "email with title: ${title}, message: {$message}";
    }
}