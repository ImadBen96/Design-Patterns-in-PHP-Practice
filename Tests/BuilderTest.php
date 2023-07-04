<?php

use Creational\Builder\BENZCarBuilder;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\Models\BENZCar;
use Creational\Builder\Models\BMWCar;

class BuilderTest extends \PHPUnit\Framework\TestCase
{

    public  function  testProduceBMWCar()
    {
        $Builder = new BMWCarBuilder();
        $carProducer = new \Creational\Builder\CarProducer($Builder);
        $myCar =$carProducer->ProduceCar();
        $this->assertInstanceOf(BMWCar::class ,$myCar);
    }

    public  function  testProduceBENZCar()
    {
        $Builder = new BENZCarBuilder();
        $carProducer = new \Creational\Builder\CarProducer($Builder);
        $myCar =$carProducer->ProduceCar();
        $this->assertInstanceOf(BENZCar::class ,$myCar);
    }

}