<?php
class Database
{
    public $hostname;
    public $dbname;
    public $username;
    public $password;


    public function dbconnection()
    {
        try {
            $database = new Database();
            $database->hostname = "localhost";
            $database->dbname = "skill_up";
            $database->username = "root";
            $database->password = "";

            $connection = new PDO("mysql:host={$database->hostname};dbname={$database->dbname}", $database->username, $database->password);
            return $connection;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}


?>














