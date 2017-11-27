<?php

use App\Collections\Collection;

class CollectionTest extends \PHPUnit\Framework\TestCase
{

    public function testIfEmptyCollectionReturnsNoItems()
    {
        $collection = new Collection([]);

        $this->assertEmpty($collection->getItems());
    }

    public function testNumberOfItems()
    {
        $collection = new Collection([
            '1', 'idemo', 39.2, 'matora'
        ]);

        $this->assertEquals($collection->count(), 4);
    }

    public function testSumOfNumericItems()
    {
        $collection = new Collection([
            '1', 'idemo', 39.345, 'matora'
        ]);

        $this->assertEquals($collection->returnSumOfAllNumbers(), 40.345);
        $this->assertInternalType('double', $collection->returnSumOfAllNumbers());
    }

    public function testMergingCollections()
    {
        $strings = new Collection([
            'idemo', 'matora'
        ]);

        $numbers = new Collection([
            5, 100, 45
        ]);

        $strings->merge($numbers);

        $this->assertCount(5, $strings->getItems());
        $this->assertEquals(5, $strings->count());

    }

    public function testJsonEncoding()
    {
        $collection = new Collection([
            ['firstName' => 'Rajko'],
            ['lastName' => 'Mitic']
        ]);

        $this->assertEquals('[{"firstName":"Rajko"},{"lastName":"Mitic"}]', $collection->toJson());
        $this->assertInternalType('string', $collection->toJson());
    }

}