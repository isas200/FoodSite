<?php
    const CONF_DB_HOST = "mysql"; // localhost
    const CONF_DB_USER = "root";
    const CONF_DB_PASS = "asdf1234"; //Isabela2006@
    const CONF_DB_NAME = "db_food_site"; // aqui deve ser alterado para o nome do banco de dados
    const CONF_URL_TEST = "http://localhost/food-site";
    const CONF_URL_BASE = "http://localhost/food-site";

/*class Database {
    private $host = "localhost";
    private $db_name = "db_site";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}*/