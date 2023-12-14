
<?php 
    require_once "./User.php";
    $signup = User::SignUp();
    
    header("Location: /nhom2_php/sign-in.html");  
    // echo $name = $_POST["name"];
    // echo $user_name = $_POST["user_name"];
    // echo $email = $_POST["email"];
    // echo $password = $_POST["password"];
    // echo $sdt = $_POST["sdt"];   

?>



