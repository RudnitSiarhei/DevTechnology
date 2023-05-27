<?php
class Database
{
    private $pdo;

    public function __construct()
    {
        $this->connection();
    }
    
    private function connection()
    {
        $connection = require_once "dataOnConnectBD.php";
        $this->pdo = new PDO ("mysql:host=$connection[host];dbname=$connection[nameBD];charset=$connection[charset]", "$connection[loginBD]", "$connection[passwordBD]");
        
        return $this;
    }
    
    public function execute($sql)
    {
        $sth = $this->pdo->prepare($sql);
        
        return $sth->execute();
    }

    public function query($sql)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false)
        {
            return [];
        }
        else
        {
            return $result;
        }
    }
}
?>