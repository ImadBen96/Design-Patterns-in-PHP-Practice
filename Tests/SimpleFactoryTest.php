<?php

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\CarFactory;

class SimpleFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateCar()
    {
        $factory = new CarFactory();
        $BMWCare = $factory->createCar('BMW');
        $this->assertInstanceOf(Car::class,$BMWCare);
    }

}