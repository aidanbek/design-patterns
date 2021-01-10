<?php


namespace structural\composite;


class Leaf extends AbstractComponent
{
    private string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function operation(): void
    {
        echo 'Leaf ' . $this->title . ' operation<br>';
    }
}