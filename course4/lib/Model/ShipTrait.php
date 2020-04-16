<?php


namespace Model;


trait ShipTrait
{
    private  $jediFactor;
    public function getJediFacotr()
    {
        return $this->jediFactor;
    }
    /**
     * @param mixed $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }
}