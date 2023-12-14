<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Danh sách tin tức | Quản trị Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-McP3+4/7+9sjF9tbRu5dFrzK5V6Wz1dV7IOw/ctibcvi8UqbvOi4nayZ77gTo++SGHca2Urqm/ZvJ2g6xg/UA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- or -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      </head>

<body onload="time()" class="app sidebar-mini rtl">
   <!-- Navbar-->
   <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="./images/hay.jpg" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>Nhóm 2</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
        <p class="app-sidebar__user-designation">  <?php session_start(); echo $_SESSION['full_name'] ; ?>    </p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">

      <li><a class="app-menu__item " href="table-data-user.php"><i class='app-menu__icon bx bx-id-card'></i>
          <span class="app-menu__label">Quản lý người dùng</span></a></li>
      <li><a class="app-menu__item active" href="table-data-new.php"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý tin tức</span></a>
      </li>
      <li><a class="app-menu__item" href="table-data-category.php"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý danh mục</span></a></li>
      <li><a class="app-menu__item" href="table-data-tag.php"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý Tag
          </span></a></li>
      <li><a class="app-menu__item" href="table-data-comment.php"><i class='app-menu__icon bx bx-dollar'></i><span
            class="app-menu__label">Quản lý bình luận</span></a></li>

            <li><a class="app-menu__item " href="/nhom2_php/quynh/index.php"><i class='app-menu__icon bx bx-id-card'></i>
          <span class="app-menu__label">Trang chủ</span></a></li>
    </ul>
  </aside>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="table-data-new.php"><b>Danh sách tin tức</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
          
                          <a class="btn btn-add btn-sm" href="add-new.php" title="Thêm" style ="font-weight: bold"><i class="fas fa-plus"> </i>
                            Thêm tin tức</a>
                        </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID tin tức</th>
                                <th>Tiêu đề</th>
                                <th>Mô tả</th>
                                <th>Danh mục</th>
                                <th>Tagname</th>
                                <th>Trạng thái</th>
                                <th>Thời gian</th>
                                <th>Chức năng</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php
 
                        include 'model.php';
                        $model = new News();
                        $rows = $model->fetch();
                        if(!empty($rows)){
                          foreach($rows as $row){ 
                        ?>
                        <tr>
                        <td><?php echo $row['news_id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['summary']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['content_tag']; ?></td>
                        <td><?php echo $row['status_news']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                          <a href="delete-news.php?id=<?php echo $row['news_id']; ?>" class="badge badge-danger">Delete</a>
                          <a href="edit-new.php?id=<?php echo $row['news_id']; ?>" class="badge badge-success">Edit</a>
                        </td>
                        </tr>

                        <?php
                        }
                        }else{
                        echo "no data";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>


    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
        //Thời Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
    </script>
    <script>
        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("myTable").deleteRow(i);
        }
        jQuery(function () {
            jQuery(".trash").click(function () {
                swal({
                    title: "Cảnh báo",
                    text: "Bạn có chắc chắn là muốn xóa sản phẩm này?",
                    buttons: ["Hủy bỏ", "Đồng ý"],
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Đã xóa thành công.!", {

                            });
                        }
                    });
            });
        });
        oTable = $('#sampleTable').dataTable();
        $('#all').click(function (e) {
            $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
            e.stopImmediatePropagation();
        });
        const toggleStatus = document.getElementById('toggle-status');
          const statusIcon = document.getElementById('status-icon');
          const statusText = document.getElementById('status-text');

          toggleStatus.addEventListener('change', function() {
            const statusValue = toggleStatus.checked ? 'Bật' : 'Tắt';
            statusIcon.innerHTML = toggleStatus.checked ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-times-circle text-danger"></i>';
            statusText.innerText =  $statusValue;
            // Bạn có thể thực hiện các hành động khác tương ứng với việc bật/tắt trạng thái ở đây
          });
    </script>
</body>

</html>