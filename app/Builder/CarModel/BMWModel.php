<?php

namespace App\Builder\CarModel;

class BMWModel extends CarModel
{
    protected function start()
    {
        echo '宝马启动';
    }

    protected function stop()
    {
        echo '宝马停止';
    }

    protected function alarm()
    {
        echo '宝马鸣笛';
    }

    protected function engineBoom()
    {
        echo '宝马发动机声音';
    }
}
