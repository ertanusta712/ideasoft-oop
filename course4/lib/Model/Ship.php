<?php

namespace Model;

class Ship extends AbstractShip
{

    private  $jediFacotr;

    private $underRepair;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @return int
     */
    public function getJediFacotr()
    {
        return $this->jediFacotr;
    }
    /**
     * @param int $jediFacotr
     */
    public function setJediFacotr($jediFacotr)
    {
        $this->jediFacotr = $jediFacotr;
    }

    /**
     * @return bool
     */
    public function isUnserRepair()
    {
        return !$this->underRepair;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'Empire';
    }

}