<?php

class Database
{
    protected $conn;
    
    function __construct()
    {
        $serverName = "localhost";
        $username = "mkk";
        $password = "asdffdsa";
        $dbname = "wad_school";

        $this->conn = new mysqli($serverName, $username, $password, $dbname);
    }

    function __destruct()
    {
        $this->conn->close();
    }
}
