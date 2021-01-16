<?php


namespace behavioral\strategy;


class Context
{
    private Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy): Context
    {
        $this->strategy = $strategy;
        return $this;
    }

    public function doBusinessLogic(array $data): void
    {
        $result = $this->strategy->goAlgorithm($data);
        echo implode(',', $result) . "<br>";
    }
}