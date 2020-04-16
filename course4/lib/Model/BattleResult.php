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


}