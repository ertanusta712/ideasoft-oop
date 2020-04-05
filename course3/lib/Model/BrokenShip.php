<?php


class BrokenShip extends AbstractShip
{

    public function getJediFacotr()
    {
        return 0;
    }

    public function getType()
    {
        return 'Broken';
    }

    public function isUnserRepair()
    {
        return false;
    }
}