<?php
require_once('./connectdb.php');


class Comments {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getById($news_id) {
        $query = "SELECT * FROM comments";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $news_id);
        $stmt->execute();
        $result = $stmt->get_result();

        $comments = [];
        while ($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }

        return $comments;
    }

    static public function addComment() {
        session_start();
        echo $cmt = $_POST["content"];
        echo $time_cmt = date("Y-m-d H:i:s");
        echo $status_cmt = 'Hiện';

        // $query = "INSERT INTO comments (content_cmt, time_cmt, user_id, news_id, status_cmt) 
        //           VALUES ($cmt,$time_cmt, ?, ?, ?)";
        // $stmt = $this->conn->prepare($query);
        // $stmt->bind_param("sssis", $content_cmt, $time_cmt, $user_id, $news_id, $status_cmt);

        // return $stmt->execute();
    }
}
?>
