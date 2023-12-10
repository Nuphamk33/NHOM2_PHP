<?php

class NewsSearch {
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Kết nối tới cơ sở dữ liệu thất bại: " . $this->conn->connect_error);
        }
    }

    public function search($searchTerm) {
        $sql = "SELECT * FROM news WHERE title LIKE '%$searchTerm%'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $newsList = array();
            while ($row = $result->fetch_assoc()) {
                $newsList[] = $row;
            }
            return $newsList;
        } else {
            return array();
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

// Sử dụng class NewsSearch
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "webtintuc_n2";

if (isset($_POST['search'])) {
    $searchTerm = $_POST['searchTerm'];

    $newsSearch = new NewsSearch($servername, $username, $password, $dbname);
    $results = $newsSearch->search($searchTerm);

    if (!empty($results)) {
        foreach ($results as $row) {
            ?>
            <div class="weekly2-single">
                <div class="weekly2-img">
                    <img src="<?php echo $row['image']; ?>" alt="">
                </div>
                <div class="weekly2-caption">
                    <span class="color1"><?php echo $row['summary']; ?></span>
                    <p><?php echo $row['date']; ?></p>
                    <h4><a href="#"><?php echo $row['title']; ?></a></h4>
                    <p><?php echo $row['content']; ?></p>
                </div>
            </div>
            <?php
        }
    } else {
        echo "Không tìm thấy bài báo phù hợp.";
    }

    $newsSearch->closeConnection();
}

?>

<!-- Form tìm kiếm -->
<form method="POST" action="">
    <input type="text" name="searchTerm" placeholder="Nhập tên bài báo">
    <input type="submit" name="search" value="Tìm kiếm">
</form>