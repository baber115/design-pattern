<?php

namespace App\AbstractFactory\Human;

abstract class AbstractWhiteHuman implements Human
{
    public function color()
    {
        return '白色人种的皮肤是白色的';
    }

    public function talk()
    {
        return '白色人种会说话，一般说单字节';
    }
}
