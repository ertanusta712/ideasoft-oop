<?php


class BattleResult
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
    public function __construct($useJediPower,Ship $winningShip, Ship $losingShip)
    {
        $this->useJediPower = $useJediPower;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return Ship
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return Ship
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





}