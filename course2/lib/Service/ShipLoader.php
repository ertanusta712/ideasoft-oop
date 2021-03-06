<?php


class ShipLoader
{
    private $pdo;


    /**
     * ShipLoader constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function getShips()
    {

        $shipsData = $this->queryForShip();
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
        $pdo = $this->getPdo();
        $statement = $pdo->prepare('SELECT * FROM ship where id= :id');
        $statement->execute(array('id' => $id));
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);
        if (!$shipArray) {
            return null;
        }
        return $this->createShipFromData($shipArray);
    }

    public function createShipFromData($shipsData)
    {
        $ship = new Ship($shipsData['name']);
        $ship->setId($shipsData['id']);
        $ship->setWeaponPower($shipsData['weapon_power']);
        $ship->setJediFacotr($shipsData['jedi_factor']);
        $ship->setStrength($shipsData['strength']);

        return $ship;
    }

    private function queryForShip()
    {
        $pdo = $this->getPdo();
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return PDO
     */
    private function getPdo()
    {
        return $this->pdo;
    }
}