<?php

class Ship
{

    public $name;

    public $weaponPower = 0;

    public $jediFacotr = 0;

    public $strength = 0;

    public function sayHello()
    {
        echo 'hello';
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }
}

function printShipSummary($someShip)
{
    echo 'Ship Name: ' . $someShip->getName();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    $someShip->getName();
    echo '<hr>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

$myShip = new Ship();
$myShip->name = 'ertan';
$myShip->weaponPower = 10;

$otherShip = new Ship();
$otherShip->name = 'usta';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

printShipSummary($myShip);
echo '<hr/>';
printShipSummary($otherShip);


echo '<hr/>';
if ($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $otherShip->name.' has more strength';
} else {
    echo $myShip->name.' has more strength';
}