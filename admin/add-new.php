<?php
require('DB2.php');
class Blog {
    private $connection;
    public function __construct($dbConnection) {
        $this->connection = $dbConnection;
    }

    public function getCategories() {
        return $this->connection->query("SELECT * FROM `categories`")->fetch_all(MYSQLI_ASSOC);
    }
    public function getTagnames() {
        return $this->connection->query("SELECT * FROM `tagnames`")->fetch_all(MYSQLI_ASSOC);
    }
    public function getBlogByID($id) {
        return $this->connection->query("SELECT * FROM `news`")->fetch_assoc();
    }
    public function getUser() {
        return $this->connection->query("SELECT * FROM `users`")->fetch_assoc();
    }
    public function addBlog($title, $image, $category, $tagname, $summary, $content, $status_news) {
        $sql = "INSERT INTO `news` (`title`, `image`, `category_id`, `tagname_id`, `summary`, `content`, `status_news`)
                VALUES ('$title', '$image', '$category', '$tagname', '$summary', '$content', '$status_news')";

        return $this->connection->query($sql);
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Thêm tin tức cho WEBSITE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="theme-color" content="#7952b3">
</head>

<body>
<?php


$blogHandler = new Blog($connect);
$categories = $blogHandler->getCategories();
$tagnames = $blogHandler->getTagnames();
$authors = $blogHandler->getUser();
if (isset($_POST['submit'])) {
    // $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $tagname = $_POST['tagname'];
    $image = $_POST['image'];
    $summary = $_POST['summary'];
    $status_news = $_POST['status_news'];
    $content = $_POST['content'];

    if ($blogHandler->addBlog($title, $image, $category, $tagname, $summary, $content, $status_news)) {
        header('location:table-data-new.php');
    }
}
?>

<!-- Rest of your HTML remains unchanged -->
<main>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Thêm tin tức</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mx-auto">

            <form class="needs-validation" method="POST" novalidate>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="title">Tiêu đề bài viết</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                            <div class="invalid-feedback">
                                Vui lòng không để trống trường này
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Danh mục</label>
                            <select class="custom-select" id="category" name="category" required>
                            <option selected disabled value="">Chọn</option>
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?php echo $category['category_id'] ?>"><?php echo $category['name'] ?></option>
                                <?php  } ?>
                            </select>
                            <div class="invalid-feedback">
                                Vui lòng chọn trường này
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tagname">Thể loại</label>
                            <select class="custom-select" id="tagname" name="tagname" required>
                            <option selected disabled value="">Chọn</option>
                                <?php foreach ($tagnames as $tagname) { ?>
                                    <option value="<?php echo $tagname['tagname_id'] ?>"><?php echo $tagname['content_tag'] ?></option>
                                <?php  } ?>
                            </select>
                            <div class="invalid-feedback">
                                Vui lòng chọn trường này
                        </div>
                        <div class="form-group">
                        <label for="status_news">Trạng thái</label>
                        <select class="custom-select" id="status_news" name="status_news" required>
                        <option value="Hiện" >Hiện</option>
                        <option value="Ẩn" >Ẩn</option>
                            <!-- Thêm các option khác nếu cần -->
                        </select>
                        <div class="invalid-feedback">
                            Vui lòng chọn trường này
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="image">Ảnh chính - Link Ảnh</label>
                        <input type="url" class="form-control" id="image" name="image" required>
                        <div class="invalid-feedback">
                            Vui lòng chọn một file hình ảnh
                        </div>
                    </div>


                        <div class="form-group">
                            <label for="summary">Mô tả</label>
                            <textarea type="text" class="form-control" id="summary" name="summary" rows="3" required></textarea>
                            <div class="invalid-feedback">
                                Vui lòng không để trống trường này
                            </div>
                        </div>
                        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea type="text" class="form-control" id="content" name="content" rows="3" required></textarea>
            <div class="invalid-feedback">
             Vui lòng không để trống</div>
        </div>
                    <button class="btn btn-primary" type="submit" name="submit">Thêm bài viết</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./sidebars.js"></script>
    <script src="https://cdn.tiny.cloud/1/oqw30ghqa6j0o3dy7d3qoyaa54ug4up3omdgj56z0z7mgifo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
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
            // toolbar: 'image'
            height: '700px',
        });
    </script>
</body>

</html>