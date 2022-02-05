<?php

namespace App\AbstractFactory;

class NvWa
{
    public static function main()
    {
        $maleHumanFactory = new MaleFactory();
        $maleYellowHuman = $maleHumanFactory->createYellowHuman();
        echo $maleYellowHuman->sex().PHP_EOL;
        echo $maleYellowHuman->color().PHP_EOL;
        echo $maleYellowHuman->talk().PHP_EOL;
        echo '----'.PHP_EOL;
        $femaleHumanFactory = new FemaleFactory();
        $femaleYellowHuman = $femaleHumanFactory->createYellowHuman();
        echo $femaleYellowHuman->sex().PHP_EOL;
        echo $femaleYellowHuman->color().PHP_EOL;
        echo $femaleYellowHuman->talk().PHP_EOL;
    }
}
