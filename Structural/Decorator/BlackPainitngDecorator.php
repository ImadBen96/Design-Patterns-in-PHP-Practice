<?php

namespace Structural\Decorator;

class BlackPainitngDecorator extends PaitingDecorator
{
    private const COLOR = '-black-';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR); // add black color to setColor Method
        return parent::paint($car); ///
    }

}