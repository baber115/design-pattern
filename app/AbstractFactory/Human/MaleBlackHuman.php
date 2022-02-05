<?php

namespace App\AbstractFactory\Human;

class MaleBlackHuman extends AbstractYellowHuman
{
    public function sex()
    {
        return '黑色男性人种';
    }
}
