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
          <h1 class="text-center">Edit Tagname</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Tagnames();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['content_tag']) && isset($_POST['tagname_id'])) {
                  if (!empty($_POST['tagname_id']) && !empty($_POST['content_tag'])) {
                     
                    $data['tagname_id'] = $id;
                    $data['content_tag'] = $_POST['content_tag'];
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('Chỉnh sửa thành công');</script>";
                      echo "<script>window.location.href = 'table-data-tag.php';</script>";
                    }else{
                      echo "<script>alert('Chỉnh sửa thất bại');</script>";
                      echo "<script>window.location.href = 'table-data-tag.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit-tag.php?id=$id");
                  }
                }
              }
          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">ID</label>
              <input type="text" name="tagname_id" value="<?php echo $row['tagname_id']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Tên Tagname</label>
              <input type="text" name="content_tag" value="<?php echo $row['content_tag']; ?>" class="form-control">
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