<?php

namespace tests;

use App\Builder\Client;
use App\Builder\Director;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    public function testMain()
    {
        $client = new Client();
        $client->main();
    }

    public function testDirector()
    {
        $director = new Director();
        for ($i = 0; $i <= 100; $i++) {
            $director->getBMWModel();
        }
        for ($i = 0; $i <= 100; $i++) {
            $director->getBenzModel();
        }
    }
}
