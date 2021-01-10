<?php


namespace structural\bridge;


class Radio implements IDevice
{
    private bool $enabled = false;
    private string $model;

    public function __construct(string $model)
    {
        $this->model = $model;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function enable(): void
    {
        echo $this->model.' is enabled<br>';
        $this->enabled = true;
    }

    public function disable(): void
    {
        echo $this->model.' is disabled<br>';
        $this->enabled = false;
    }
}