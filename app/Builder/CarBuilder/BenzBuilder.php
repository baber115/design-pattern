<?php

namespace App\Builder\CarBuilder;

use App\Builder\CarModel\BenzModel;

class BenzBuilder extends CarBuilder
{
    public function setSequence(array $sequence)
    {
        $benzModel = new BenzModel();

        $benzModel->setSequence($sequence);

        return $benzModel;
    }
}
