<?php

namespace Behavioral\MediatorV2;

interface Mediator
{
    public function getUser(string $username): string;
}