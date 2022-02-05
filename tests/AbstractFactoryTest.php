<?php

namespace tests;

use App\AbstractFactory\NvWa;
use PHPUnit\Framework\TestCase;

final class AbstractFactoryTest extends TestCase
{
    public function testMain()
    {
        NvWa::main();
    }
}
