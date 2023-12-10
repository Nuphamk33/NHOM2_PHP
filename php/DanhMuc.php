<?php

include './php/DB.php';

class DM
{

    //Phương thức lấy tin tức
    static public function GetNew()
    {   $conn = mysqli_connect('127.0.0.1:3308','root','','webtintuc_n2') or die('connection failed');
        $DM = $_POST["DM"];
     
        $dem="select * from news";
        $dem1 = DB::demsobanghi($dem);

        session_start();
        $select_DM = mysqli_query($conn, "SELECT * FROM categories WHERE name = '$DM' ") or die('query failed');
        $dem="select * from news";
        $_SESSION['dem']=$dem1 = DB::demsobanghi($dem);

        if(mysqli_num_rows($select_DM) > 0){
            //kiểm tra tài khoản có tồn tại không

            $row = mysqli_fetch_assoc($select_DM);       
            $_SESSION['DMid'] = $row['category_id'];


            
            $DMid= $_SESSION['DMid'];
            $select_new = mysqli_query($conn, "SELECT title FROM news WHERE category_id = '$DMid' ") or die('query failed');

            $i=0;
            while($row2= mysqli_fetch_array($select_new)){
            $_SESSION[$i]=$row2[0];
            $row2[0];
            "<br>";
            $i++;
            }
            
             
            $DMid= $_SESSION['DMid'];
            $select_new = mysqli_query($conn, "SELECT title ,image FROM news WHERE category_id = '$DMid' ") or die('query failed');

            $a=0;
            while($row2= mysqli_fetch_array($select_new)){
            $b="a".$a;
            $_SESSION[$b]=$row2[1];
            $row2[1];
            "<br>";
            $a++;
            }
           

           
        }else{
        echo $message[] = 'Không có tin tức trùng khớp!';
        }

    }
}
?>