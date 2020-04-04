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
