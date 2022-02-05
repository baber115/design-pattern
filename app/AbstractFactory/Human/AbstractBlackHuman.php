<?php

namespace App\AbstractFactory\Human;

abstract class AbstractBlackHuman implements Human
{
    public function color()
    {
        return '黑色人种的皮肤是黑色的';
    }

    public function talk()
    {
        return '黑色人种会说话，一般说话听不懂';
    }
}
