<?php

namespace Structural\AdapterThirdPartyExample;

class BasicAuthAdapter implements AuthenticatorInterface
{
    /**
     * @var BasicAuthenticator
     */
    private $authenticator;

    public function __construct(BasicAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
        return $this->authenticator->basicLogin($params['username'],$params['password']);
    }

}