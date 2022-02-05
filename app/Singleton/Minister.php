<?php

namespace App\Singleton;

class Minister
{
    public static function main()
    {
        for ($i = 0; $i <= 10; $i++) {
            $emperor = Emperor::getInstance();
            $emperor->say();
        }
    }
}
