<?php

namespace App\Builder;

use App\Builder\CarModel\BenzModel;

class Client
{
    public function main()
    {
        $benz = new BenzModel();
        $benz->setSequence([
            'engineBoom',
            'start',
            'stop',
        ]);
        $benz->run();
    }
}
