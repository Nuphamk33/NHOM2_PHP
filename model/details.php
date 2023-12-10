<?php

class Details {
    private $conn;

    public function __construct() {
        $this->conn = $this->connectdb();
    }

    public function getDetails($detailId) {
        // Thực hiện truy vấn để lấy chi tiết của bài báo từ cơ sở dữ liệu
        $sql = "SELECT * FROM news WHERE news_id = :detailId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':detailId', $detailId);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra xem có bài báo tương ứng hay không
        if ($result) {
            return $result;
        }

        return null;
    }

    private function connectdb() {
        $servername = "127.0.0.1:3307";
        $username = "root";
        $password = "";
        $dbname = "webtintuc_n2";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit(); // Dừng việc thực thi nếu không thể kết nối đến cơ sở dữ liệu
        }
    }
}

// Sử dụng class Details
// $details = new Details();
// $result = $details->getDetails($detailId);
// if ($result) {
//     // Xử lý dữ liệu
//     // ...
// }

?>