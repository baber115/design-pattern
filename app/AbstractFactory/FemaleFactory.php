<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Human\FemaleBlackHuman;
use App\AbstractFactory\Human\FemaleWhiteHuman;
use App\AbstractFactory\Human\FemaleYellowHuman;

class FemaleFactory implements HumanFactory
{
    public function createBlackHuman()
    {
        return new FemaleBlackHuman();
    }

    public function createYellowHuman()
    {
        return new FemaleYellowHuman();
    }

    public function createWhiteHuman()
    {
        return new FemaleWhiteHuman();
    }
}
