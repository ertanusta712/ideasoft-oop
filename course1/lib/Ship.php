<?php

/**
 * Class Ship
 */
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

    public function getNameAndSpecs($useShortFormat = false)
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