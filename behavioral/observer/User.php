<?php


namespace behavioral\observer;


class User
{
    public array $attributes = [];

    public function update($data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }
}