<?php


class RebelShip extends Ship
{
    public function getFavoriteJedi()
    {
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);
        return $coolJedis[$key];
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'Rebel';
    }

    public function getNameAndSpecs($useShortFormat = false)
    {

        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Jedi)';
        return $val;
    }
}