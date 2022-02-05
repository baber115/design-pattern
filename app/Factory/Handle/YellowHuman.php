<?php

namespace App\Factory\Handle;

class YellowHuman implements Human
{
    public function color()
    {
        echo('黄人的皮肤是黄色的');
    }

    public function talk()
    {
        echo('黄人说话，一般是双字节');
    }
}
