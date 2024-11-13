<?php
//connect to MySQL database
class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4;";
        $username = "root";
        $password = "H@pP!n3ss1";

        try {
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    //for OOP approach
    public function query($query, $params = [])
    {
        // preparing the query with parameters for safety
        $statement = $this->connection->prepare($query);

        // execute the statement with provided params
        $statement->execute($params);

        return $statement;
    }


}




?>
