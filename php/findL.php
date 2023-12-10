
<?php 
     
    session_start();
    echo $dem = $_SESSION['dem'];
    require_once "./DanhMuc.php";
    $GetNew = DM::GetNew();

?>