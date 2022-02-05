<?php

namespace App\AbstractFactory\Human;

class MaleWhiteHuman extends AbstractYellowHuman
{
    public function sex()
    {
        return '白色男性人种';
    }
}
