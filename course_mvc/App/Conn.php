<?php

namespace App;


class Conn
{
    static public function getDb()
    {
        $db = new \PDO("mysql:host=localhost;dbname=proexis", "root", "");
        return $db;
    }

}