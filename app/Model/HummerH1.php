<?php

namespace App\Model;

class HummerH1 extends HummerModel
{
    private bool $isAlarm = true;

    protected function start()
    {
        echo '悍马1启动';
    }

    protected function stop()
    {
        echo '悍马1停止';
    }

    protected function alarm()
    {
        echo '悍马1鸣笛';
    }

    protected function engineBoom()
    {
        echo '悍马1发动机声音';
    }

    protected function isAlarm()
    {
        return $this->isAlarm;
    }

    public function setAlarm(bool $isAlarm)
    {
        $this->isAlarm = $isAlarm;
    }
}
