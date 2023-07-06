<?php

use Structural\Composite\BigBox;
use Structural\Composite\GiftBox;
use Structural\Composite\SimpleBox;

class CompositeTest extends \PHPUnit\Framework\TestCase
{
    public function testCanGetTotalPriceOfPackageTree()
    {
        $item1 = new SimpleBox(300);
        $item2 = new SimpleBox(200);
        $package = new BigBox([$item2,$item1]);

        $this->assertEquals(500,$package->getPrice());
    }


    public function testCanGetTotalPriceOfPackageTreeWithAddActions()
    {
        $item1 = new SimpleBox(300);
        $item2 = new SimpleBox(200);
        $package = new BigBox([$item2,$item1]); // 500 $package->getPrice() => 500

        $gift1 =  new GiftBox(100,50); // 150
//        print_r($gift1->getPrice()); // $gift1->getPrice() => 150
//        ob_flush();
        $package->add($gift1); // 650
//        print_r();
//        ob_flush();

        $this->assertEquals(650,$package->getPrice());
    }

    public function testCanGetTotalPriceOfPackageTreeWithRemoveActions()
    {
        $item1 = new SimpleBox(300);
        $item2 = new SimpleBox(200);
        $item3 = new SimpleBox(1000);
        $package = new BigBox([$item2,$item1,$item3]);
        $package->remove($item3);

        $this->assertEquals(500,$package->getPrice());
    }

}