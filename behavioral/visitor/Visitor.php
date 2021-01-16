<?php


namespace behavioral\visitor;


interface Visitor
{
    public function visitA(ComponentA $component);

    public function visitB(ComponentB $component);
}