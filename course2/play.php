<?php

require_once __DIR__ . 'lib/Ship.php';

/**
 * @param Ship $someShip
 */
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