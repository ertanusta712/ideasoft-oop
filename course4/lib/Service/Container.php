<?php
namespace Service;


class Container
{

    /** @var array $config */
    private $config;

    /** @var \PDO $pdo */
    private $pdo;

    /** @var ShipLoader $shipLoader */
    private $shipLoader;

    /** @var BattleManager $battleManager */
    private $battleManager;

    private $shipStorage;

    /**
     * Container constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getShipStorage()
    {
        if ($this->shipStorage === null) {
            $this->shipStorage = new PdoShipStorage($this->getPDO());
            //$this->shipStorage=new JsonFileShipStorage(__DIR__.'/../../resources/ships.json');
        }
        return $this->shipStorage;
    }


    /**
     * @return \PDO
     */
    public function getPDO()
    {
        if ($this->pdo === null) {
            $this->pdo = new \PDO (
                $this->config['db_dsn'],
                $this->config['db_user'],
                $this->config['db_pass']);

            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        }
        return $this->pdo;

    }

    /**
     * @return ShipLoader
     */
    public function getShipLoader()
    {
        if ($this->shipLoader === null) {
            $this->shipLoader = new ShipLoader($this->getShipStorage());
        }
        return $this->shipLoader;
    }

    /**
     * @return BattleManager
     */
    public function getBattleManager()
    {
        if ($this->battleManager === null) {
            $this->battleManager = new BattleManager();
        }
        return $this->battleManager;
    }
}