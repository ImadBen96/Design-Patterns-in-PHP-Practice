<?php

namespace Behavioral\MediatorV2;

abstract class Colleague
{

    protected Mediator $mediator;

    final public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

}