<?php

namespace App\AbstractFactory\Human;

abstract class AbstractYellowHuman implements Human
{
    public function color()
    {
        return '黄色人种的皮肤是黄色的';
    }

    public function talk()
    {
        return '黄色人种会说话，一般说双字节';
    }
}
