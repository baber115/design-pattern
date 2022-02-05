<?php

namespace App\Model;

class HummerH2 extends HummerModel
{
    protected function start()
    {
        echo '悍马2启动';
    }

    protected function stop()
    {
        echo '悍马2停止';
    }

    protected function alarm()
    {
        echo '悍马2鸣笛';
    }

    protected function engineBoom()
    {
        echo '悍马2发动机声音';
    }
}
