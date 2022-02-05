<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Singleton\Minister;

class SingletonTest extends TestCase
{
    public function testMain()
    {
        Minister::main();
    }
}
