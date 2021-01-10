<?php


namespace structural\bridge;


class TV implements IDevice
{
    private bool $enabled = false;
    private string $model;
    private float $diagonal;

    public function __construct(string $model, float $diagonal)
    {
        $this->model = $model;
        $this->diagonal = $diagonal;
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