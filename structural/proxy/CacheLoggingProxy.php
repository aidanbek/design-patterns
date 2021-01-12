<?php


namespace structural\proxy;


class CacheLoggingProxy implements Cacheable
{
    private Cache $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function store(string $key, string $value): void
    {
        echo "Storing in cache - {$key}: {$value}<br>";
        $this->cache->store($key, $value);
    }

    public function getValue(string $key): string
    {
        echo "Getting cache value by key: {$key} <br>";
        return $this->cache->getValue($key);
    }

    public function setValue(string $key, string $newValue): void
    {
        echo "Setting key {$key} to value {$newValue}<br>";
        $this->cache->setValue($key, $newValue);
    }

    public function unset(string $key): void
    {
        echo "Deleting cached item with key: {$key}<br>";
        $this->cache->unset($key);
    }

    public function isExist(string $key): bool
    {
        echo "Getting if key: {$key} is cached<br>";
        return $this->cache->isExist($key);
    }
}