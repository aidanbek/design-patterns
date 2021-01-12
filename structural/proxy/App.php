<?php

namespace structural\proxy;


class App
{
    private Cacheable $cache;

    public function __construct(Cacheable $cache)
    {
        $this->cache = $cache;
    }

    public function createRecord(string $id, string $value): void
    {
        $this->cache->store($id, $value);
    }

    public function getRecord($id): string
    {
        return $this->cache->getValue($id);
    }

    public function updateRecord(string $id, $newValue): void
    {
        $this->cache->setValue($id, $newValue);

    }

    public function deleteRecord($id): void
    {
        $this->cache->unset($id);
    }
}