<?php


namespace creational\prototype;


abstract class AbstractBook
{
    protected string $title;
    protected string $topic;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }


    public function getTopic(): string
    {
        return $this->topic;
    }

}