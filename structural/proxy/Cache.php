<?php


namespace structural\proxy;


class Cache implements Cacheable
{
    private array $cache = [];

    public function store(string $key, string $value): void
    {
        $this->cache[$key] = $value;
    }

    public function getValue(string $key): string
    {
        return $this->cache[$key];
    }

    public function setValue(string $key, string $newValue): void
    {
        $this->cache[$key] = $newValue;
    }

    public function unset(string $key): void
    {
        if ($this->isExist($key)) {
            unset($this->cache[$key]);
        }
    }

    public function isExist(string $key): bool
    {
        return isset($this->cache[$key]);
    }
}