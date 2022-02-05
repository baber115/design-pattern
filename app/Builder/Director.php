<?php

namespace App\Builder;

use App\Builder\CarBuilder\BenzBuilder;
use App\Builder\CarBuilder\BMWBuilder;

class Director
{
    public function getBMWModel()
    {
        $BMWBuilder = new BMWBuilder();
        $BMWBuilder->setSequence([
            'engineBoom',
            'start',
            'stop',
        ])->run();
    }

    public function getBenzModel()
    {
        $BenzBuilder = new BenzBuilder();
        $BenzBuilder->setSequence([
            'alarm',
            'start',
            'stop',
        ])->run();
    }
}
