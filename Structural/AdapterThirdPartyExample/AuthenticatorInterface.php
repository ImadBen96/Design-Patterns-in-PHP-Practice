<?php

namespace Structural\AdapterThirdPartyExample;
use BasicAuth\BasicAuthenticator;
interface AuthenticatorInterface
{

    public function login(array $params);
}