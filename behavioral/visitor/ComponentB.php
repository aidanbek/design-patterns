<?php


namespace behavioral\visitor;


class ComponentB implements Component
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitB($this);
    }

    public function methodB(): string
    {
        return "B";
    }
}