<?php


namespace structural\adapter;


interface INotificationEngine
{
    public function send(string $title, string $message): void;
}