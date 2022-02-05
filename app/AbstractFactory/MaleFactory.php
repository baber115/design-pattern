<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Human\MaleBlackHuman;
use App\AbstractFactory\Human\MaleWhiteHuman;
use App\AbstractFactory\Human\MaleYellowHuman;

class MaleFactory implements HumanFactory
{
    public function createBlackHuman()
    {
        return new MaleBlackHuman();
    }

    public function createYellowHuman()
    {
        return new MaleYellowHuman();
    }

    public function createWhiteHuman()
    {
        return new MaleWhiteHuman();
    }
}
