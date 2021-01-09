<?php


namespace creational\abstractFactory;


class Printer
{
    private  function printChairInfo(IChair $chair): void
    {
        echo "chair<br>";
        echo "->hasArmrests {$chair->hasArmrests()}<br>";
        echo "->hasLegs {$chair->hasLegs()}<br>";
    }

    private  function printSofaInfo(ISofa $sofa): void
    {
        echo "sofa<br>";
        echo "->isSolid {$sofa->isSolid()}<br>";
    }

    private function printTableInfo(ITable $table): void
    {
        echo "table<br>";
        echo "->isRound {$table->isRound()}<br>";
    }

    public function print(IChair $chair, ISofa $sofa, ITable $table)
    {
        $this->printChairInfo($chair);
        $this->printSofaInfo($sofa);
        $this->printTableInfo($table);
    }
}