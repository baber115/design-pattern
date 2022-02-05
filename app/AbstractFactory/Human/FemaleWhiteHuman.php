<?php

namespace App\AbstractFactory\Human;

class FemaleWhiteHuman extends AbstractYellowHuman
{
    public function sex()
    {
        return '白色女性人种';
    }
}
