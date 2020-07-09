<?php
class Database{
 
    // specify your own database credentials
    private $host = "172.17.0.3";
    private $db_name = "test_db";
    private $username = "app";
    private $password = "CJEdTMGTc6{C6pLMkjE]";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";port=3306;dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>