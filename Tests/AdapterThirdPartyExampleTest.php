<?php

use Structural\AdapterThirdPartyExample\BasicAuthAdapter;
use Structural\AdapterThirdPartyExample\TokenAuthAdapter;
use Structural\AdapterThirdPartyExample\UserLogin;

class AdapterThirdPartyExampleTest extends  \PHPUnit\Framework\TestCase
{

    public function testCanAuthWithBasicAuthLib()
    {
        $basicAuthAdapter = $this->createMock(BasicAuthAdapter::class);
        $basicAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn('test-test');


        $userLogin = new UserLogin($basicAuthAdapter);
        $userLogin->login(['username'=>'test','password' => 'test']);
    }

    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testCanAuthWithTokenAuthLib()
    {
        $tokenAuthAdapter = $this->createMock(TokenAuthAdapter::class);
        $tokenAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn(base64_encode('test-test'));
        $userLogin = new UserLogin($tokenAuthAdapter);
        $userLogin->login(['key'=>'test','token' => 'test']);
    }

}