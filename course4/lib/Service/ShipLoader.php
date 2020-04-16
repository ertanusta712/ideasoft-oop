<?php

namespace Service;
use  Model\RebelShip;
use Model\Ship;
use Model\AbstractShip;
class ShipLoader
{
    private $shipStorage;


    /**
     * ShipLoader constructor.
     * @param PdoShipStorage $shipStorage
     */
    public function __construct(ShipStorageInterface $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }


    public function getShips()
    {

        $shipsData = $this->shipStorage->fetchAllShipsData();
        $ships = array();

        foreach ($shipsData as $shipsData) {
            $ships[] = $this->createShipFromData($shipsData);
        }
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

    public function findOneById($id)
    {
        $shipArray= $this->shipStorage->fetchSingleShipData($id);
        return $this->createShipFromData($shipArray);
    }

    public function createShipFromData($shipsData)
    {
        if ($shipsData['team'] == 'rebel') {
            $ship = new RebelShip($shipsData['name']);
        } else {
            $ship = new Ship($shipsData['name']);
            $ship->setJediFacotr($shipsData['jedi_factor']);
        }

        $ship->setId($shipsData['id']);
        $ship->setWeaponPower($shipsData['weapon_power']);
        $ship->setStrength($shipsData['strength']);

        return $ship;
    }

}