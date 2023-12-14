<?php
require_once('./connectdb.php');

class News {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getById($news_id) {
        $sql = "SELECT * FROM news";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $news_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>
