
<form method="post">
    <input type="text" name="search">
    <button type="submit" name="btn">tìm kiếm</button>                               
</form>
<?php
    if(isset($_POST['btn'])){
        $search = $_POST['search'];
    }
    else{
        echo $search = false;
    }
?>

<?php
    include "connect.php";
    $sql = "SELECT * FROM news WHERE title LIKE '%$search%' ";
    $result = mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($result)) {
        echo $row['title'];
    }
?>
