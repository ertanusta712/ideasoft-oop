<?php

namespace Model;

class DeathStart
{
    public function blastPlanet($planetName)
    {
        echo 'BOOM '.$planetName;
    }

    public function getWeakness()
    {
        return 'Thermal Exhaust Port';
    }
}