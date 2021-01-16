<?php


namespace behavioral\visitor;


interface Component
{
    public function accept(Visitor $visitor): void;
}