<?php

use Behavioral\MediatorV2\Ui;
use Behavioral\MediatorV2\UserRepository;
use Behavioral\MediatorV2\UserRepositoryUiMediator;

class MediatorTestV2 extends \PHPUnit\Framework\TestCase
{
    public function testOutputHelloWorld()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }

}