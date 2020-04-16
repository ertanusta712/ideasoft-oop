<?php

spl_autoload_register(function($className) {
    $path = __DIR__.'/lib/'.str_replace('\\', '/', $className).'.php';
    if (file_exists($path)) {
        require $path;
    }
    // we don't support this class!
});


$config=array(
    'db_dsn'  => 'mysql:host=localhost;dbname=oop_ogreniyorum',
    'db_user' => 'OOP',
    'db_pass' => '12345678',
);



