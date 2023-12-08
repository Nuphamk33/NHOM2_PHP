
<?php
    include "ketnoi.php";

    $param = $_GET['param'];
    $sql = "SELECT * FROM news WHERE title LIKE :p ";
    $data = array(':p' => "%$param%");
    $res = DB::execute($sql, $data);

    // if(empty($res)){
    //     echo "<script>alert('not found !');</script>";
    // }else{
    //     echo json_encode($res);
    // }
    echo json_encode($res);
?>



