<?php

namespace Behavioral\MediatorV2;

class UserRepository extends Colleague
{
    public function getUserName(string $user): string
    {
        return 'User: ' . $user;
    }

}