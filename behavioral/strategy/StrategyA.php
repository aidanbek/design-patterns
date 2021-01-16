<?php


namespace behavioral\strategy;


class StrategyA implements Strategy
{

    public function goAlgorithm(array $data): array
    {
        sort($data);
        return $data;
    }
}