<?php


class ShipLoader
{
    public function getShips()
    {

        $shipsData=$this->queryForShip();
        $ships = array();

        foreach ($shipsData as $shipsData){
            $ship=new Ship($shipsData['name']);
            $ship->setWeaponPower($shipsData['weapon_power']);
            $ship->setJediFacotr($shipsData['jedi_factor']);
            $ship->setStrength($shipsData['strength']);
            $ships[] = $ship;
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

    private function queryForShip()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=oop_ogreniyorum', 'OOP', '12345678');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}