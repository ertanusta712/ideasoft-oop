<?php


namespace Model;


class BountyHunterShip extends AbstractShip
{
use ShipTrait;


    public function getType()
    {
        return 'Bounty Hunter';
    }

    public function isUnserRepair()
    {
        return true;
    }


}