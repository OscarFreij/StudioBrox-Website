<?php

class db
{
    private $container;
    private $pdo;

    public function __construct(container $container)
    {
        $this->container = $container;    
        
        try 
        {
            $credentials = $this->container->credentials()->getDBCredentials();
            $servername = $credentials['servername'];
            $dbname = $credentials['dbname'];
            $username = $credentials['username'];
            $password = $credentials['password'];

            $this->pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            error_log("PDO Connection Astablished", 0);
        }
        catch(PDOException $e)
        {
            throw new Exception("PDO Connection Error: ".$e->getMessage(), 200);
        }   
    }
    
    public function GetPreparedStatement($statementName)
    {
        $stmtString = "";
        switch ($statementName) {
            default:
                throw new Exception("No prepared statement with matching name - (statementName):$statementName", 210);
                return;
        }

        $stmt = $this->pdo->prepare($stmtString);
        return $stmt;
    }

    public function GetLastInsertedId()
    {
        return $this->pdo->lastInsertId();
    }
}
