<?php


namespace behavioral\visitor;


class Visitor2 implements Visitor
{
    public function visitA(ComponentA $component)
    {
        echo $component->methodA() ." visitor2<br>";
    }

    public function visitB(ComponentB $component)
    {
        echo $component->methodB()." visitor2<br>";
    }
}