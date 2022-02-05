<?php

namespace tests;

use App\Factory\Client;
use PHPUnit\Framework\TestCase;

final class FactoryTest extends TestCase
{
    public function testMain()
    {
        Client::factory();
    }

    public function testSimpleFactory()
    {
        Client::simpleFactory();
    }
}
