<?php


namespace behavioral\chainOfResponsibility;


class Feeder
{
    public function feed(array $foods, Handleable $handler)
    {
        foreach ($foods as $food) {
            $result = $handler->handle($food);

            if ($result) {
                echo " ". $result;
            } else {
                echo " ". $food . " wat left untouched<br>";
            }
        }
    }
}