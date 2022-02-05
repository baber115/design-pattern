<?php

namespace App\Factory;

class HumanFactory extends AbstractHumanFactory
{
    public function createHuman($human)
    {
        try {
            return $human;
        } catch (\Exception $e){
            die('人种错误');
        }
    }
}
