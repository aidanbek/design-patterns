<?php


namespace structural\bridge;


class Remote
{
    private IDevice $device;

    public function __construct(IDevice $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }
}