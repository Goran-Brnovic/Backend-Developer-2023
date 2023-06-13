<?php

namespace Parcijalni;

use Core\Controller;
use PDO;

class Connector extends Controller
{   
    public function DBConnection()
    {
        $servername = 'DB_DSN';
        $username = 'DB_USERNAME';
        $password = 'DB_PASSWORD';

        try
        {
            $connection = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } 
        catch (PDOException $e) 
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}