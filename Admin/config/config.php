<?php
class Config{
   private $host="localhost";
    private $data="datntoan7";
    private $username="root";
    private $pass="";
    public $conn;
   
    public function Connect() {
        $this->conn=new mysqli($this->host, $this->username, $this->pass, $this->data) or die('not connect database');
        $this->conn->query("SET NAMES UTF8");
        return $this->conn;
    }
}
?>

