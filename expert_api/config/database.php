<?php
class Database{
  
    // Database Settings credentials
    private $host = "localhost";
    private $db_name = "ksn"; // Database Name
    private $username = "root";
    private $password = "";
    public $conn;
  
    // Database Connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>