<?php

use Creational\StaticFactory;
class StaticFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateBMWCar()
    {
        $this->assertInstanceOf(StaticFactory\BMWCar::class,StaticFactory\StaticFactory::factory('BMW'));
    }

    public function testCanCreateBENZCar()
    {
        $this->assertInstanceOf(StaticFactory\BENZCar::class,StaticFactory\StaticFactory::factory('BENZ'));
    }

}