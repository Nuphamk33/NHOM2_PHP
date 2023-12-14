<?php
require('DB2.php');

class BlogEditor {
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
        return $this->connection->query("SELECT * FROM `news` WHERE `news_id` = '$id'")->fetch_assoc();
    }

    public function updateBlog($id, $title, $image, $category, $tagname, $summary, $content, $status_news) {
        $sql = "UPDATE `news` SET `title`='$title', `image`='$image', `summary`='$summary', `content`='$content', `category_id`='$category', `tagname_id`='$tagname', `status_news`='$status_news' WHERE `news`.`news_id` = '$id'";
        return $this->connection->query($sql);
    }    
}

$blogEditor = new BlogEditor($connect);

$categories = $blogEditor->getCategories();
$tagnames = $blogEditor->getTagnames();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];
    $tagname = $_POST['tagname'];
    $content = $_POST['content'];
    $status_news = $_POST['status_news'];
    if ($blogEditor->updateBlog($id, $title, $image, $category, $tagname, $summary, $content, $status_news)) {
        header('location:table-data-new.php');
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $news = $blogEditor->getBlogByID($id);
}
?>
<!-- ... Rest of your HTML code remains unchanged ... -->




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sửa tin tức NHÓM 2</title>
    <!-- <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Favicons -->

    <link href="sidebars.css" rel="stylesheet">
</head>

<body>
    <main>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Sửa tin tức</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mx-auto">

            <form action="" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $news['news_id'] ?>">
                        <div class="form-group">
                            <label for="title">Tiêu đề bài viết</label>
                            <input type="text" class="form-control" id="title" name="title" required value="<?php echo $news['title'] ?>">
                            <div class="invalid-feedback">
                                Vui lòng không để trống trường này
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Danh mục</label>
                            <select class="custom-select" id="category" name="category" required>
                                <option selected disabled value="">Chọn ...</option>
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?php echo $category['category_id'] ?>" <?php echo $category['category_id'] == $news['category_id'] ? 'selected' : '' ?>><?php echo $category['name'] ?></option>
                                <?php  } ?>
                            </select>
                            <div class="invalid-feedback">
                                Vui lòng chọn trường này
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tagname">Tagname</label>
                            <select class="custom-select" id="tagname" name="tagname" required>
                                <option selected disabled value="">Chọn ...</option>
                                <?php foreach ($tagnames as $tagname) { ?>
                                    <option value="<?php echo $tagname['tagname_id'] ?>" <?php echo $tagname['tagname_id'] == $news['tagname_id'] ? 'selected' : '' ?>><?php echo $tagname['content_tag'] ?></option>
                                <?php  } ?>
                            </select>
                            <div class="invalid-feedback">
                                Vui lòng chọn trường này
                        </div>
                        <div class="form-group">
                        <label for="status_news">Trạng thái</label>
                        <select class="custom-select" id="status_news" name="status_news" required>
                            <option value="Hiện" <?php echo $news['status_news'] === 'Hiện' ? 'selected' : ''; ?>>Hiện</option>
                            <option value="Ẩn" <?php echo $news['status_news'] === 'Ẩn' ? 'selected' : ''; ?>>Ẩn</option>
                            <!-- Thêm các option khác nếu cần -->
                        </select>
                        <div class="invalid-feedback">
                            Vui lòng chọn trường này
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="image">Ảnh nổi bật</label>
                        <input type="url" class="form-control" id="image" name="image" required value="<?php echo $news['image'] ?>">
                        <div class="invalid-feedback">
                            Vui lòng chọn một file hình ảnh
                        </div>
                    </div>


                        <div class="form-group">
                            <label for="summary">Mô tả</label>
                            <textarea type="text" class="form-control" id="summary" name="summary" rows="3" required><?php echo $news['summary'] ?></textarea>
                            <div class="invalid-feedback">
                                Vui lòng không để trống trường này
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">Nội dung</label>
                            <textarea type="text" class="form-control" id="content" name="content" required><?php echo $news['content'] ?></textarea>
                            <div class="invalid-feedback">
                                Vui lòng không để trống trường này
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Sửa Tin</button>
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
            plugins: 'image imagetool',
            toolbar: "undo redo | styleselect | fontselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | image",
            height: '700px',
            content_style: "@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');",

        });
    </script>
</body>
</html>