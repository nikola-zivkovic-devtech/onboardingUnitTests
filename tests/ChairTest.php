<?php

use App\Models\Chair;

class ChairTest extends \PHPUnit\Framework\TestCase
{
    protected $chair;

    public function setUp()
    {
        $this->chair = new Chair();
    }


    public function testGetChairName()
    {
        $this->chair->setName('Nada');
        $this->assertEquals($this->chair->getName(), 'Nada');
    }

    /**
     * @test
     */
    public function getChairPrice()
    {
        $this->chair->setPrice(50);
        $this->assertEquals($this->chair->getPrice(), 50);
    }
}