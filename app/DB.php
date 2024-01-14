<?php

namespace App;

use mysqli;
use PDOException;

class DB
{
    private static $instance = NULl;

    public static function getInstance()
    {
        $host = 'localhost';
        $dbname = 'staff-mamage';
        $username = 'root';
        $password = '';
        if (!isset(self::$instance)) {
            try {
                self::$instance = new mysqli($host, $username, $password, $dbname);
                if (self::$instance->connect_error) {
                    die("Connection failed: " . self::$instance->connect_error);
                }
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}
