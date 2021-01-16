<?php


namespace behavioral\visitor;


class ComponentA implements Component
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitA($this);
    }

    public function methodA(): string
    {
        return "A";
    }
}