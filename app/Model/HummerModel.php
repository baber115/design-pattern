<?php

namespace App\Model;

abstract class HummerModel
{
    protected abstract function start();

    protected abstract function stop();

    protected abstract function alarm();

    protected abstract function engineBoom();

    final public function run()
    {
        $this->start();
        echo PHP_EOL;
        $this->engineBoom();
        echo PHP_EOL;
        if ($this->isAlarm()) {
            $this->alarm();
            echo PHP_EOL;
        }
        $this->stop();
        echo PHP_EOL;
    }

    protected function isAlarm()
    {
        return true;
    }
}
