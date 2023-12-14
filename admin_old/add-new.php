<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Thêm tin tức</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <!-- <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
/* màu bên trái */
        .custom-color {
            background-color: #FFC0CB;
            color:  rgb(16, 58, 113);;
        }

        body {
            background-color:  rgb(0, 28, 64);;
        }
    </style>
    <link href="css/sidebars.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="mx-5 my-5 card w-100">
            <div class="card-header">
                <h3>Thêm Tin tức</h3>
            </div>
            <?php
              include 'model.php';
              $model = new News();
              $insert = $model->insert();

          ?>
                    <form action="" method="post">
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" name="title" class="form-control">
            <div class="invalid-feedback">
             Vui lòng không để trống</div>
        </div>
            <div class="form-group">
            <label for="">Danh mục</label>
            <select class="custom-select" id="category" name="category" required>
                            <option selected disabled value="">Chọn danh mục</option>
                             <?php
                            // Gọi hàm để lấy danh sách vai trò từ cơ sở dữ liệu
                            $new = new News(); // Thay thế 'User' bằng tên lớp hoặc phương thức tương ứng của bạn
                            $categorys = $new->getCategory();

                            // Duyệt qua mảng vai trò và tạo các option cho dropdown
                            foreach ($categorys as $category) {
                                $selected = ($category == $row['name']) ? 'selected' : '';
                                echo "<option value='$category' $selected>$category</option>";
                            }
                            ?>
            </select>
            <div class="invalid-feedback">
             Vui lòng không để trống</div>
             <div class="form-group">
            <label for="">Chọn Tags</label>
            <select class="custom-select" id="tagname" name="content_tag" required>
                            <option selected disabled value="">Chọn Tags</option>
                             <?php
                            // Gọi hàm để lấy danh sách vai trò từ cơ sở dữ liệu
                            $new = new News(); // Thay thế 'User' bằng tên lớp hoặc phương thức tương ứng của bạn
                            $tagnames = $new->getTag();

                            // Duyệt qua mảng vai trò và tạo các option cho dropdown
                            foreach ($tagnames as $tagname) {
                                $selected = ($tagnames == $row['content_tag']) ? 'selected' : '';
                                echo "<option value='$tagname' $selected>$tagname</option>";
                            }
                            ?>
            </select>
            <div class="invalid-feedback">
             Vui lòng không để trống</div>
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="text" name="image" class="form-control">
            <div class="invalid-feedback">
             Vui lòng không để trống</div>
        </div>
        <div class="form-group">
            <label for="">Tóm tắt</label>
            <textarea type="text" class="form-control" id="description" name="summary" rows="3" required></textarea>
        <div class="invalid-feedback">
             Vui lòng không để trống</div>
        </div>
             <div class="form-group">
            <label for="">Nội dung</label>
            <textarea type="text" class="form-control" id="content" name="content" rows="3" required></textarea>
            <div class="invalid-feedback">
             Vui lòng không để trống</div>
        </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
                
            </div>
        </div>

    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/sidebars.js"></script>
    <script src="https://cdn.tiny.cloud/1/oqw30ghqa6j0o3dy7d3qoyaa54ug4up3omdgj56z0z7mgifo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#content',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak image imagetool',
            toolbar_mode: 'floating',
            height: 500, // Đổi chiều cao thành 500px để trình soạn thảo rộng hơn
            width: 'auto' // Sử dụng width: 'auto' để trình soạn thảo tự động điều chỉnh chiều rộng
        });
        
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        tinymce.init({
            selector: 'textarea#content',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak image imagetool',
            toolbar_mode: 'floating',
            // toolbar: 'image',
            height: '300px',
            width: '500px'
        });
    </script>
</body>

</html>