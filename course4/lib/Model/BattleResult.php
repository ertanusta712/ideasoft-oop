<?php
namespace Model;


class BattleResult implements \ArrayAccess
{
    private $useJediPower;

    private $winningShip;

    private $losingShip;

    /**
     * BattleResult constructor.
     * @param $useJediPower
     * @param $winningShip
     * @param $losingShip
     */
    public function __construct($useJediPower, AbstractShip $winningShip = null, AbstractShip $losingShip = null)
    {
        $this->useJediPower = $useJediPower;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    /**
     * @return boolean
     */
    public function getUseJediPower()
    {
        return $this->useJediPower;
    }

    public function isThereWinner()
    {
        return $this->getWinningShip() !== null;
    }


    public function offsetExists($offset)
    {
        return property_exists($this,$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
       $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
}