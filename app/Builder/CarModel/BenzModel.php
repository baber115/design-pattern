<?php

namespace App\Builder\CarModel;

class BenzModel extends CarModel
{
    protected function start()
    {
        echo '奔驰启动';
    }

    protected function stop()
    {
        echo '奔驰停止';
    }

    protected function alarm()
    {
        echo '奔驰鸣笛';
    }

    protected function engineBoom()
    {
        echo '奔驰发动机声音';
    }
}
