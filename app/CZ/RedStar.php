<?php

namespace App\CZ;


class RedStar
{
    private $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    public function getPlayerWithMostClubAppearances()
    {
        $playersAndGoals = $this->service->getPlayersWithMostClubAppearances();

        $player = '';
        $goals = 0;

        foreach ($playersAndGoals as $returnedPlayer => $returnedGoals) {
            if ($returnedGoals > $goals) {
                $player = $returnedPlayer;
                $goals = $returnedGoals;
            }
        }

        return "$player - $goals";
    }
}