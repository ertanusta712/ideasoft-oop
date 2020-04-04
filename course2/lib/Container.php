<?php


class Container
{

    /** @var array $config */
    private $config;

    /**
     * Container constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }


    /**
     * @return PDO
     */
    public function getPDO(){



        $pdo= new PDO (
            $this->config['db_dsn'],
            $this->config['db_user'],
            $this->config['db_pass']);
        return $pdo;
    }
}