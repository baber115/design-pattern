<?php

namespace App\Factory\Handle;

class WhiteHuman implements Human
{
    public function color()
    {
        echo('白人的皮肤是白色的');
    }

    public function talk()
    {
        echo('白人说话，一般是单字节');
    }
}
