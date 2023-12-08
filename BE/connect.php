<?php
    $server = '127.0.0.1:3307';
    $user = 'root';
    $pass = '';
    $database = 'webtintuc_n2';

    $conn = new mysqli($server, $user, $pass, $database);

    if ($conn) {
        mysqli_query($conn, "SET NAMES 'utf8'");
        // echo 'Kết nối thành công';
    } else {
        echo 'Kết nối không thành công';
    }
?>