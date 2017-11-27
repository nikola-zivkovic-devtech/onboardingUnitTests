<?php

use App\Models\Chair;

class ChairTest extends \PHPUnit\Framework\TestCase
{
    public function testGetChairName()
    {
        $chair = new Chair();
        $chair->setName('Nada');
        $this->assertEquals($chair->getName(), 'Nada');
    }

    /**
     * @test
     */
    public function getChairPrice()
    {
        $chair = new Chair();
        $chair->setPrice(50);
        $this->assertEquals($chair->getPrice(), 50);
    }
}