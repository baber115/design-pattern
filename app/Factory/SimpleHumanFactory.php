<?php

namespace App\Factory;

class SimpleHumanFactory
{
    public static function createHuman($human)
    {
        try {
            return $human;
        } catch (\Exception $e) {
            die('人种错误');
        }
    }
}
