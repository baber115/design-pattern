<?php

namespace App\Singleton;

class Emperor
{
    public static function getInstance()
    {
        return new self();
    }

    public function say()
    {
        echo '我是皇帝';
    }
}
