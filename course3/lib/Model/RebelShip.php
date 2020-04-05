<?php


class RebelShip extends AbstractShip
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

    public function getJediFacotr()
    {
        return mt_rand(10, 30);
    }

    /**
     * @return bool
     */
    public function isUnserRepair()
    {
        return true;
    }
}