<?php

require_once __DIR__ . '/lib/Ship.php';

function get_ships()
{
    $ships = array();
    $ship = new Ship();
    $ship->setName('Jedi Starfighter');
    $ship->setWeaponPower( 5);
    $ship->setJediFacotr( 10);
    $ship->setStrength(30) ;
    $ships['startfigther'] = $ship;

    $ship2=new Ship();
    $ship2->setJediFacotr(3);
    $ship2->setName('ne fark eder');
    $ship2->setStrength(0);
    $ship2->setWeaponPower(1);
    $ships['ne fark eder']=$ship2;

    $ship3=new Ship();
    $ship3->setJediFacotr(3);
    $ship3->setName('oop güzelmiş');
    $ship3->setStrength(0);
    $ship3->setWeaponPower(1);
    $ships['oop güzelmiş']=$ship3;
    return $ships;

}

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function battle(Ship $ship1, $ship1Quantity,  Ship $ship2, $ship2Quantity)
{
    $ship1Health = $ship1->getStrength() * $ship1Quantity;
    $ship2Health = $ship2->getStrength() * $ship2Quantity;

    $ship1UsedJediPowers = false;
    $ship2UsedJediPowers = false;
    while ($ship1Health > 0 && $ship2Health > 0) {
        // first, see if we have a rare Jedi hero event!
        if (didJediDestroyShipUsingTheForce($ship1)) {
            $ship2Health = 0;
            $ship1UsedJediPowers = true;

            break;
        }
        if (didJediDestroyShipUsingTheForce($ship2)) {
            $ship1Health = 0;
            $ship2UsedJediPowers = true;

            break;
        }

        // now battle them normally
        $ship1Health = $ship1Health - ($ship2->getWeaponPower() * $ship2Quantity);
        $ship2Health = $ship2Health - ($ship1->getWeaponPower() * $ship1Quantity);
    }

    if ($ship1Health <= 0 && $ship2Health <= 0) {
        // they destroyed each other
        $winningShip = null;
        $losingShip = null;
        $usedJediPowers = $ship1UsedJediPowers || $ship2UsedJediPowers;
    } elseif ($ship1Health <= 0) {
        $winningShip = $ship2;
        $losingShip = $ship1;
        $usedJediPowers = $ship2UsedJediPowers;
    } else {
        $winningShip = $ship1;
        $losingShip = $ship2;
        $usedJediPowers = $ship1UsedJediPowers;
    }

    return array(
        'winning_ship' => $winningShip,
        'losing_ship' => $losingShip,
        'used_jedi_powers' => $usedJediPowers,
    );
}

function didJediDestroyShipUsingTheForce(Ship $ship)
{
    $jediHeroProbability = $ship->getJediFacotr() / 100;

    return mt_rand(1, 100) <= ($jediHeroProbability * 100);
}