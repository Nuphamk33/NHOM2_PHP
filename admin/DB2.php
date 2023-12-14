<?php
        $servername="127.0.0.1:3308";
        $username="root";
        $password="";
        $dbname="webtintuc_n2";
      
        
        $connect = new mysqli($servername,$username, $password, $dbname );

        if($connect->connect_error)
        {
            die("kết nối thất bại: " . $connect->connect_error);
            exit();
        }
        $connect->set_charset('utf8');
        mysqli_set_charset($connect,"utf8");

  
?>

