<?php

class News {
    private $conn;

    public function __construct() {
        $this->conn = $this->connectdb();
    }

    public function getAllNews() {
        $sql = "SELECT * FROM news where status_news='Hiện' ORDER BY news_id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    private function connectdb() {
        $servername = "127.0.0.1:3308";
        $username = "root";
        $password = "";
        $dbname = "webtintuc_n2";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

// Sử dụng class News
// $news = new News();
// $results = $news->getAllNews();
// foreach ($results as $row) {
//     // Xử lý dữ liệu
//     // ...
// }


?>