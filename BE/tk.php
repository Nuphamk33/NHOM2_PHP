<?php
include('connect.php');
if(isset($_GET['timkiem'])){
    $tukhoa = $_GET['texttimkiem'];
    $sql_timkiem = "SELECT * FROM 'baivietmoi' WHERE 'bvm_title' LIKE '%" . $tukhoa . "%' ";
    $query_timkiem = mysql_query($conn, $sql_timkiem);
}else{
    $tukhoa = '';
    $sql_timkiem = "SELECT * FROM 'baivietmoi' limit 5";
    $query_timkiem = mysqli_query($conn, $sql_timkiem);
}
?>
