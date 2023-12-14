<?php
class DBConnection {
    private $server = "127.0.0.1:3308";
    private $username = "root";
    private $password;
    private $db = "webtintuc_n2";
    protected $conn;

    public function __construct(){
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }
}
?>
