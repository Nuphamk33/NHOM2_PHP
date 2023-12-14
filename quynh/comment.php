<?php
// require_once('./connectdb.php');
require_once('./DB.php');


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

    // static public function addComment() {
    //     $conn = mysqli_connect('127.0.0.1:3308','root','','webtintuc_n2') or die('connection failed');
    //     session_start();
    //     echo $cmt = $_POST["content"];
    //     echo $time_cmt = date("Y-m-d H:i:s");
    //     echo $status_cmt = 'Hiện';

    //     $query = "INSERT INTO comments (content_cmt, time_cmt, user_id, news_id, status_cmt) 
    //               VALUES ('$cmt','$time_cmt', '', '', '$status_cmt')";
      
    //     $thucthi=mysqli_fetch_assoc($query );





    //Phương thức gửi cmt
    static public function SendCmt()
    {   $getcmt = $_POST["content"];
        $getcmt = $_POST["content"];
        $time_cmt = date("Y-m-d H:i:s");
        $status_cmt = 'ẩn';
        session_start();
        $per=$_POST['user_id'];
        $nid=$_POST['news_id'];
        echo $_SESSION['newsid']=$_POST['news_id'];
        
        

        $sql="INSERT INTO comments (content_cmt, time_cmt, user_id, news_id, status_cmt) 
        VALUES ('$getcmt','$time_cmt', '$per', '$nid', '$status_cmt')";
        $cmt = DB::execute($sql);
        header('location:/nhom2_php/quynh/detail.php');





    }
        





        

    
}
?>
