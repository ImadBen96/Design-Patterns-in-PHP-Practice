<?php

use Structural\Decorator\BlackPainitngDecorator;
use Structural\Decorator\BluePainitngDecorator;
use Structural\Decorator\Car;
use Structural\Decorator\Painting;
use Structural\Decorator\RedPainitngDecorator;

class DecoratorTest extends \PHPUnit\Framework\TestCase
{

    public function testCanPaintCarWithBlackAndBlueColors(): void
    {
        $car = new Car(); // getColor , SetColor($color)

        $painting = new Painting(); // paint(Car $car) return $car
        $painting = new BlackPainitngDecorator($painting);

        $painting = new BluePainitngDecorator($painting);

        $painting->paint($car);




      $this->assertEquals('-blue--black-',$car->getColor());

    }

    public function testCanPaintCarWithRedAndBlueColors(): void
    {
        $car = new Car();
        $painting = new Painting();
        $painting = new BluePainitngDecorator($painting);
        $painting = new RedPainitngDecorator($painting);

        $painting->paint($car);

        $this->assertEquals('-red--blue-',$car->getColor());
    }

}