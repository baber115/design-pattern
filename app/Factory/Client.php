<?php

namespace App\Factory;

use App\Factory\Handle\BlackHuman;
use App\Factory\Handle\WhiteHuman;
use App\Factory\Handle\YellowHuman;

class Client
{
    public static function factory()
    {
        $human = (new HumanFactory())->createHuman(new YellowHuman());
        $human->color();
        $human->talk();
        $human = (new HumanFactory())->createHuman(new WhiteHuman());
        $human->color();
        $human->talk();
        $human = (new HumanFactory())->createHuman(new BlackHuman());
        $human->color();
        $human->talk();
    }

    public static function simpleFactory()
    {
        $human = SimpleHumanFactory::createHuman(new YellowHuman());
        $human->color();
        $human->talk();
        $human = SimpleHumanFactory::createHuman(new WhiteHuman());
        $human->color();
        $human->talk();
        $human = SimpleHumanFactory::createHuman(new BlackHuman());
        $human->color();
        $human->talk();
    }
}
