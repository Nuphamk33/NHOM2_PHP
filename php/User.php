<?php

include './DB.php';

class User
{
    //Phương thức đăng ký
    static public function SignUp()
    {   $name = $_POST["name"];
        $user_name = $_POST["user_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sdt = $_POST["sdt"];

        $dem="select * from accounts";
        $dem1 = DB::demsobanghi($dem);

        $sql3 = "INSERT INTO `users` (`user_id`, `full_name`, `phone_number`, `email`) VALUES
        (concat('N0',$dem1+1), '$name', '$sdt', '$email');";
        $them3 = DB::execute($sql3);

        $sql1 = "INSERT INTO `accounts` (`account_id`, `username`, `password`, `date_create`, `user_id`) VALUES
        (concat('TK0',$dem1+1), '$user_name', '$password', curdate(), concat('N0',$dem1+1));";
        $them1 = DB::execute($sql1);
        
        $sql2 = "INSERT INTO `roles` (`role_id`, `user_id`, `role`) VALUES
        (concat('R0',$dem1+1), concat('N0',$dem1+1), 'reader');";
        $them2 = DB::execute($sql2);

    }


    //Phương thức đăng nhập

    static public function SignIn()
    {   $conn = mysqli_connect('127.0.0.1:3308','root','','webtintuc_n2') or die('connection failed');
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];

        session_start();
        $username = mysqli_real_escape_string($conn, $_POST["user_name"]);
        $pass = mysqli_real_escape_string($conn, md5($_POST["password"]));

        $select_acc = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$user_name' AND password = '$password'") or die('query failed');
       
        if(mysqli_num_rows($select_acc) > 0){
            //kiểm tra tài khoản có tồn tại không

            $row = mysqli_fetch_assoc($select_acc);       
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['username'] = $row['username'];


            $userid= $_SESSION['user_id'];
            $select_users = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$userid' ") or die('query failed');
            $row2= mysqli_fetch_assoc($select_users);       
            $_SESSION['full_name'] = $row2['full_name'];
            $_SESSION['email'] = $row2['email'];
            $_SESSION['phone_number'] = $row2['phone_number'];


            $select_role = mysqli_query($conn, "SELECT * FROM roles WHERE user_id = '$userid' ") or die('query failed');
            $row3= mysqli_fetch_assoc($select_role);       
            $_SESSION['role'] = $row3['role'];
       

            if($_SESSION['role']=="admin"){
            header("Location: /nhom2_php/admin/index.php");
            } else{ header("Location: /nhom2_php/quynh/index.php"); }
        }else{
        echo $message[] = 'Tên đăng nhập hoặc mật khẩu không chính xác!';
        }

    }




        //Phương thức chỉnh sửa thông tin cá nhân
        static public function Update()
        {   echo $name = $_POST["name"];
            echo"<br>";
            echo $user_name = $_POST["user_name"];
            echo"<br>";
            echo $email = $_POST["email"];
            echo"<br>";
            echo $password = $_POST["password"];
            echo"<br>";
            echo $sdt = $_POST["sdt"];
            echo"<br>";

            session_start();
            $user_id=$_SESSION['user_id'];
            echo $user_id;
            echo"<br>";
    
            $dem="select * from accounts";
            echo $dem1 = DB::demsobanghi($dem);
            echo"<br>";
            


            $sql3 = " UPDATE users SET full_name = '$name', phone_number ='$sdt', email =  '$email'  WHERE user_id='$user_id'";
            $sua3 = DB::Upda($sql3);

            $sql1 = " UPDATE accounts
                SET username = '$user_name', password ='$password'  WHERE user_id= '$user_id'";
            $sua1 = DB::Upda($sql1);
    

            

    
        }
}


?>