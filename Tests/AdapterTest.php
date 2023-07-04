<?php

use Structural\Adapter\Car;
use Structural\Adapter\EngineAdapter;
use Structural\Adapter\NormalEngine;
use Structural\Adapter\TurboEngine;

class AdapterTest extends \PHPUnit\Framework\TestCase
{
    public function testCanStartNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);

        $this->assertEquals('normal Engine start',$car->start());
    }

    public function testCanStartTurboEngine()
    {
        $engine = new TurboEngine();
        $adapter = new EngineAdapter($engine);
        $car = new Car($adapter);

        $this->assertEquals('turbo engine start',$car->start());
    }

}