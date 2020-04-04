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
}

$myShip = new Ship();
$myShip->name = 'ertan';
$myShip->weaponPower = 10;
echo $myShip->name;
echo '<hr>';
$myShip->sayHello();
echo '<hr>';
$myShip->getName();
echo '<hr>';
var_dump($myShip->weaponPower);
echo '<hr>';
echo $myShip->getNameAndSpecs(false);
echo '<hr>';
echo $myShip->getNameAndSpecs(true);
