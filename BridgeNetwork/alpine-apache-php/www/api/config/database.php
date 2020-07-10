<?php
class Database{
 
    // specify your own database credentials
    private $host = "172.25.0.2";
    private $db_name = "hospital_db";
    private $username = "nhanvo";
    private $password = "nhanvo@123";
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