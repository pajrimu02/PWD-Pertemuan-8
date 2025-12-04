<?php
require_once "database.php";

class Prabotan {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        $sql = "SELECT * FROM prabotan"; 
        return $this->db->conn->query($sql);
    }
}
?>
