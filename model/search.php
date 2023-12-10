<?php
class NewsSearch
{
    private $db;

    public function __construct() {
        $this->db = $this->db();
    }

    public function searchNewsByTitle($searchTerm)
    {
        $query = "SELECT * FROM news WHERE title LIKE :searchTerm";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':searchTerm', '%' . $searchTerm . '%');
        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    private function db() {
        $servername = "127.0.0.1:3307";
        $username = "root";
        $password = "";
        $dbname = "webtintuc_n2";

        try {
            $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}





// Sử dụng lớp NewsSearch để tìm kiếm dữ liệu
    //$newsSearch = new NewsSearch();

// if (isset($_GET['searchTerm'])) {
//     $searchTerm = $_GET['searchTerm'];
//     $searchResults = $newsSearch->searchNewsByTitle($searchTerm);

//     if (!empty($searchResults)) {
//         foreach ($searchResults as $result) {
//             echo "<h2>" . $result['title'] . "</h2>";
//             echo "<p>" . $result['content'] . "</p>";
//             // Hiển thị thông tin khác...
//         }
//     } else {
//         echo "Không tìm thấy kết quả.";
//     }
// }else {
//     echo "Không tìm thấy kết quả.";
// }

// Sử dụng lớp NewsSearch để tìm kiếm dữ liệu
// $newsSearch = new NewsSearch();

// Xử lý tìm kiếm khi có yêu cầu từ người dùng
// if (isset($_GET['searchTerm'])) {
//     $searchTerm = $_GET['searchTerm'];
//     $searchResults = $newsSearch->searchNewsByTitle($searchTerm);

    // Xử lý kết quả tìm kiếm
//     if (!empty($searchResults)) {
//         foreach ($searchResults as $result) {
//             echo "<h2>" . $result['title'] . "</h2>";
//             echo "<p>" . $result['content'] . "</p>";
//             // Hiển thị thông tin khác...
//         }
//     } else {
//         echo "Không tìm thấy kết quả.";
//     }
// }

?>