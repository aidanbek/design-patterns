<?php


namespace creational\singleton;


class Government
{
    private static ?Government $government = null;

    private function __construct()
    {
    }

    public static function getGovernment(): Government
    {
        if (is_null(self::$government)) {
            self::$government = new static();
        }

        return self::$government;
    }
}