<?php


namespace Model;


use Exception;
use Traversable;

class ShipCollection implements \ArrayAccess, \IteratorAggregate
{
    /** @var  AbstractShip[] */
    private $ship;

    public function __construct(array $ship)
    {
        $this->ship = $ship;
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->ship);
    }

    public function offsetGet($offset)
    {
        return $this->ship[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->ship[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->ship[$offset]);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->ship);
    }

    public function removeAllBrokenShips()
    {
        foreach ($this->ship as $key => $ship){
            if ($ship->isUnserRepair()){
                unset($this->ship[$key]);
            }
        }
    }
}