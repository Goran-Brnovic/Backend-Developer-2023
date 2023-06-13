<?php

namespace Parcijalni;

class Configuration
{
    public function config()
    {
        $DBConfig = require CONFIG . '/database.php';

        define('DB_DSN',"mysql:host={$DBConfig['host']};dbname={$DBConfig['database']}");
        define('DB_USERNAME', $DBConfig['username']);
        define('DB_PASSWORD', $DBConfig['password']);
    }
}