<?php

use Structural\DependencyInjection\DataBaseConfig;
use Structural\DependencyInjection\DataBaseConnection;

class DependencyInjectionTest extends \PHPUnit\Framework\TestCase
{

    public function testCanGetDatabaseStringURLFromDataBaseConnection(): void
    {
        $databaseConfig = new DataBaseConfig('localhost','root','root','3306','admin');
        $databaseConn = new DataBaseConnection($databaseConfig);

        $this->assertEquals('mysql://root:root@localhost:3306/admin',$databaseConn->getConnectionString());
    }

}