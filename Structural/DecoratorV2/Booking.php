<?php

namespace Structural\DecoratorV2;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;

}