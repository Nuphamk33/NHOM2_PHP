<!-- //edit.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Edit User</title>
 </head>
 <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Sửa thông tin người dùng</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Comment();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['comment_id']) && isset($_POST['content_cmt']) && isset($_POST['status_cmt']) && isset($_POST['full_name'])&& isset($_POST['title'])) {
                  if (!empty($_POST['comment_id']) && !empty($_POST['content_cmt']) && !empty($_POST['status_cmt']) && !empty($_POST['full_name']) && !empty($_POST['title'])) {
                     
                    $data['comment_id'] = $id;
                    $data['content_cmt'] = $_POST['content_cmt'];
                    $data['status_cmt'] = $_POST['status_cmt'];
                    $data['full_name'] = $_POST['full_name'];
                    $data['title'] = $_POST['title'];
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('Chỉnh sửa thành công');</script>";
                      echo "<script>window.location.href = 'table-data-comment.php';</script>";
                    }else{
                      echo "<script>alert('Chỉnh sửa thất bại');</script>";
                      echo "<script>window.location.href = 'table-data-comment.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit-cmt.php?id=$id");
                  }
                }
              }
          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">ID</label>
              <input type="text" name="comment_id" value="<?php echo $row['comment_id']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Tác Giả</label>
              <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Nội dung</label>
              <input type="text" name="content_cmt" value="<?php echo $row['content_cmt']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Bài viết</label>
              <input type="text" name="title" value="<?php echo ($row['title']); ?>" class="form-control">

            </div>
            <div class="form-group">
            <label for="status">Trạng thái:</label>
            <select name="status_cmt" class="form-control">
                <option value="Hiện" <?php if ($row['status_cmt'] == 'Hiện') echo 'selected'; ?>>Hiện</option>
                <option value="Ẩn" <?php if ($row['status_cmt'] == 'Ẩn') echo 'selected'; ?>>Ẩn</option>
                <!-- Thêm các option khác nếu cần -->
            </select>
            </div>

            <div class="form-group">
              <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>