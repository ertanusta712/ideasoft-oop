<?php
require_once __DIR__ . '/lib/Model/AbstractShip.php';
require_once __DIR__ . '/lib/Model/Ship.php';

require_once __DIR__ . '/lib/Model/RebelShip.php';
require_once __DIR__ . '/lib/Model/BrokenShip.php';

require_once __DIR__ . '/lib/Service/ShipStorageInterface.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/PdoShipStorage.php';
require_once __DIR__ . '/lib/Service/JsonFileShipStorage.php';

require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/lib/Service/Container.php';


$config=array(
    'db_dsn'  => 'mysql:host=localhost;dbname=oop_ogreniyorum',
    'db_user' => 'OOP',
    'db_pass' => '12345678',
);



