
<?php 
    require_once "./User.php";
    
    $update = User::Update();
    echo $_SESSION['user_id'];

    
    header("Location: /nhom2_php/php/logout.php");  


?>



