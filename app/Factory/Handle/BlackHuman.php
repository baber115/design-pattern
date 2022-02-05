<?php

namespace App\Factory\Handle;

class BlackHuman implements Human
{
    public function color()
    {
        echo('黑人的皮肤是黑色的');
    }

    public function talk()
    {
        echo('黑人说话，一般听不懂');
    }
}
