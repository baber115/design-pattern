<?php

namespace App\AbstractFactory\Human;

class FemaleBlackHuman extends AbstractYellowHuman
{
    public function sex()
    {
        return '黑色女性人种';
    }
}
