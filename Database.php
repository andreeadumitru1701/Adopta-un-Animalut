<?php
class Database 
{
    private $conex;
    private $username;
    private $password;
    private $hostname;
    private $dbName;

    public function __construct($username, $password, $hostname, $dbName)
    {
        $this->username=$username;
        $this->password=$password;
        $this->hostname=$hostname;
        $this->dbName=$dbName;

        $this->conex=mysqli_connect($hostname, $username, $password, $dbName);
    }

    public function getConnection() 
    {
        return $this->conex;
    }
}
