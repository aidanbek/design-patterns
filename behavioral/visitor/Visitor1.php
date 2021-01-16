<?php


namespace behavioral\visitor;


class Visitor1 implements Visitor
{
    public function visitA(ComponentA $component)
    {
        echo $component->methodA() ." visitor1<br>";
    }

    public function visitB(ComponentB $component)
    {
        echo $component->methodB()." visitor2<br>";
    }
}