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
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['phone_number']) && isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['role'])) {
                  if (!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['phone_number']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['role'])) {
                     
                    $data['user_id'] = $id;
                    $data['full_name'] = $_POST['full_name'];
                    $data['email'] = $_POST['email'];
                    $data['phone_number'] = $_POST['phone_number'];
                    $data['username'] = $_POST['username'];
                    $data['password'] = $_POST['password'];
                    $data['role'] = $_POST['role'];
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('Chỉnh sửa thành công');</script>";
                      echo "<script>window.location.href = 'table-data-user.php';</script>";
                    }else{
                      echo "<script>alert('Chỉnh sửa thất bại');</script>";
                      echo "<script>window.location.href = 'table-data-user.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit-user.php?id=$id");
                  }
                }
              }
          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username" value="<?php echo ($row['username']); ?>" class="form-control">

            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control">
            </div>
            <div class="form-group">
            <label for="role">Trạng thái:</label>
            <select name="role" class="form-control">
                <option value="Admin" <?php if ($row['role'] == 'Admin') echo 'selected'; ?>>Admin</option>
                <option value="Reader" <?php if ($row['role'] == 'Reader') echo 'selected'; ?>>Reader</option>
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