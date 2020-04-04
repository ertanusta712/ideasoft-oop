<?php


class ShipLoader
{
    public function getShips()
    {
        $ships = array();
        $ship = new Ship('constructer çok iyiymiş');
        $ship->setWeaponPower(5);
        $ship->setJediFacotr(10);
        $ship->setStrength(30);
        $ships['startfigther'] = $ship;

        $ship2 = new Ship('boşverrr');
        $ship2->setJediFacotr(3);
        $ship2->setStrength(0);
        $ship2->setWeaponPower(1);
        $ships['ne fark eder'] = $ship2;

        $ship3 = new Ship('oop güzelmiş');
        $ship3->setJediFacotr(3);
        $ship3->setStrength(0);
        $ship3->setWeaponPower(1);
        $ships['oop güzelmiş'] = $ship3;
        return $ships;

    }
}