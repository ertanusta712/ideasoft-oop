<?php


namespace Service;


class LoggableShipStorage implements ShipStorageInterface
{

    private $shipStorage;

    public function __construct(ShipStorageInterface $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

    public function fetchAllShipsData()
    {
        $ship= $this->shipStorage->fetchAllShipsData();
        $this->log('önce bir kaç damla yaşşşşşş, gözlerimden süzülürrrrrr. ');
        return $ship;
    }

    public function fetchSingleShipData($id)
    {
        return $this->shipStorage->fetchSingleShipData($id);
    }

    public function log($message){
        echo $message;
    }
}