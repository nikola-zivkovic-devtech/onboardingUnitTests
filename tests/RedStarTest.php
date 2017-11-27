<?php

use App\CZ\RedStar;

class RedStarTest extends \PHPUnit\Framework\TestCase
{
    public function testPlayerWithMostClubAppearances()
    {
        $service = Mockery::mock('service');
        $service->shouldReceive('getPlayersWithMostClubAppearances')
            //->times(3)
            ->andReturn([
                'Bosko Djurovski' => '299',
                'Vladica Popovic' => '291',
                'Bora Kostic' => '341',
                'Pavika' => '264',
                'Kule' => '318',
                'Rajo Mitic' => '294',
                'Dujkovic' => '266',
                'Dzaja' => '389',
                'File' => '263',
                'Sele' => '277'
            ]);

        $zvezda = new RedStar($service);

        $this->assertEquals('Dzaja - 389', $zvezda->getPlayerWithMostClubAppearances());
    }

}