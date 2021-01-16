<?php


namespace behavioral\visitor;


class Operator
{
    /**
     * @param Component[] $components
     * @param Visitor $visitor
     */
    public static function operate(array $components, Visitor $visitor)
    {
     foreach($components as $component){
         $component->accept($visitor);
     }
    }
}