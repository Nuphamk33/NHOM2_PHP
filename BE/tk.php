<?php
// Kết nối tới cơ sở dữ liệu
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "webtintuc_n2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Xử lý tìm kiếm
if (isset($_POST['search'])) {
    $searchTerm = $_POST['searchTerm'];

    // Truy vấn cơ sở dữ liệu để tìm kiếm bài báo theo tên
    $sql = "SELECT * FROM news WHERE title LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Hiển thị danh sách bài báo
        while ($row = $result->fetch_assoc()) {
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
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>

<!-- Form tìm kiếm -->
<form method="POST" action="">
    <input type="text" name="searchTerm" placeholder="Nhập tên bài báo">
    <input type="submit" name="search" value="Tìm kiếm">
</form>