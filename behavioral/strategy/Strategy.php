<?php


namespace behavioral\strategy;


interface Strategy
{
    public function goAlgorithm(array $data): array;
}