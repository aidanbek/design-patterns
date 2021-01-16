<?php


namespace behavioral\strategy;


class StrategyB implements Strategy
{

    public function goAlgorithm(array $data): array
    {
        rsort($data);
        return $data;
    }
}