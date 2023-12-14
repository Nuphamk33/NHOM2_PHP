<?php

include './php/DB.php';

class DM
{

    //Phương thức lấy tin tức
    static public function GetNew()
    {   $conn = mysqli_connect('127.0.0.1:3308','root','','webtintuc_n2') or die('connection failed');
        $DM = $_POST["DM"];
     


        session_start();
        $select_DM = mysqli_query($conn, "SELECT * FROM categories WHERE name = '$DM' ") or die('query failed');
        


        if(mysqli_num_rows($select_DM) > 0){
            //kiểm tra danh mục có tồn tại không

            $row = mysqli_fetch_assoc($select_DM);       
            $gt=$_SESSION['DMid'] = $row['category_id'];
            
            $tim="select * from news where category_id= '$gt' ";
            echo $_SESSION['dem']= $dem1 = DB::demsobanghi($tim);

            $i=0;

            $DMid= $_SESSION['DMid'];
            $select_new = mysqli_query($conn, "SELECT title FROM news WHERE category_id = '$DMid' ") or die('query failed');

             
            if(mysqli_num_rows($select_new) > 0){
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
            } 
            else{
                echo $message[] = 'không có tin tức nào!';
                $_SESSION['dem']=0;
             }
                      
        }else{
        echo $message[] = 'danh mục ko tồn tại!';
        $_SESSION['dem']=0;


       

        }

    }


    //Phương thức lấy tin tức
    static public function GetDM()
    {   $conn = mysqli_connect('127.0.0.1:3308','root','','webtintuc_n2') or die('connection failed');
        
        session_start();
        $select_DM = mysqli_query($conn, "SELECT name FROM categories where status='hiện' ") or die('query failed');
        $a=0;           
        if(mysqli_num_rows($select_DM) > 0){
            while($row2= mysqli_fetch_array($select_DM)){
                $b="dm".$a;
                $_SESSION[$b]=$row2[0];
                "<br>";
                $a++;
            }
        }
    }
}
?>