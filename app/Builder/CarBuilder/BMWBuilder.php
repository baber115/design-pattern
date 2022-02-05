<?php

namespace App\Builder\CarBuilder;

use App\Builder\CarModel\BMWModel;

class BMWBuilder extends CarBuilder
{
    public function setSequence(array $sequence)
    {
        $BMWModel = new BMWModel();

        $BMWModel->setSequence($sequence);

        return $BMWModel;
    }
}
