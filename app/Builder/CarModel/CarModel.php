<?php

namespace App\Builder\CarModel;

abstract class CarModel
{
    private array $sequence = [];

    protected abstract function start();

    protected abstract function stop();

    protected abstract function alarm();

    protected abstract function engineBoom();

    final public function run()
    {
        foreach ($this->sequence as $sequence) {
            if (method_exists($this, $sequence)) {
                $this->$sequence();
            }
        }
    }

    final public function setSequence(array $sequence)
    {
        $this->sequence = $sequence;
    }
}
