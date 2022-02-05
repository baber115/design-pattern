<?php

namespace tests;

use App\Model\HummerH1;
use App\Model\HummerH2;
use PHPUnit\Framework\TestCase;

class HummerTest extends TestCase
{
    public function testMain()
    {
        $hummer1 = new HummerH1();
        $hummer1->setAlarm(false);
        $hummer1->run();
        $hummer2 = new HummerH2();
        $hummer2->run();
    }
}
