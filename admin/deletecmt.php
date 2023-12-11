<?php 
    include 'model.php';
    $model = new Comment();
    $id = $_REQUEST['id'];
    $delete = $model->delete($id);
 
    if ($delete) {
        echo "<script>alert('Xóa thành công');</script>";
        echo "<script>window.location.href = 'table-data-comment.php';</script>";
    }
 ?>