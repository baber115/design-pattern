<?php

namespace App\AbstractFactory\Human;

class MaleYellowHuman extends AbstractYellowHuman
{
    public function sex()
    {
        return '黄色男性人种';
    }
}
