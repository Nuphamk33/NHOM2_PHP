<!-- //model.php -->
<?php 
require_once 'DB.php';
    Class Model extends DBConnection{
 
      
        public function fetch(){
            $data = null;
 
            $query = "SELECT users.user_id, users.full_name, users.phone_number, users.email, 
            accounts.username, accounts.password, roles.role
            FROM users
            INNER JOIN accounts ON users.user_id = accounts.user_id
            INNER JOIN roles ON users.user_id = roles.user_id";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        public function delete($id){
 
            $query = "DELETE FROM users where user_id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
 
        public function edit($id){
 
            $data = null;
 
            $query = "SELECT users.*, roles.role, accounts.username, accounts.password 
            FROM users 
            INNER JOIN roles ON users.user_id = roles.user_id 
            INNER JOIN accounts ON users.user_id = accounts.user_id 
            WHERE users.user_id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function update($data){
 
            $query = "UPDATE users
            JOIN accounts ON users.user_id = accounts.user_id
            JOIN roles ON users.user_id = roles.user_id
            SET users.full_name = '$data[full_name]',
                users.email = '$data[email]',
                users.phone_number = '$data[phone_number]',
                accounts.username = '$data[username]', 
                accounts.password = '$data[password]',
                roles.role = '$data[role]'
            WHERE users.user_id = '$data[user_id]'";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
       
    }
    Class Comment extends DBConnection{
        public function comment(){
            $data = null;
 
            $query = "SELECT comments.comment_id, comments.content_cmt, comments.status_cmt, users.full_name, news.title
            FROM comments
            INNER JOIN users ON comments.user_id = users.user_id
            INNER JOIN news ON comments.news_id = news.news_id;
            ";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        public function delete($id){
 
            $query = "DELETE FROM comments where comment_id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
        public function edit($id){
 
            $data = null;
 
            $query = "SELECT comments.comment_id, comments.content_cmt, comments.status_cmt, users.full_name, news.title
            FROM comments
            INNER JOIN users ON comments.user_id = users.user_id
            INNER JOIN news ON comments.news_id = news.news_id;";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function update($data){
            $status_cmt = $data['status_cmt'];
            $comment_id = $data['comment_id'];
         
            $query = "UPDATE comments 
            SET status_cmt = '$status_cmt'
            WHERE comment_id = '$comment_id'";
         
            if ($sql = $this->conn->query($query)) {
                return true;
            } else {
                return false;
            }
        }
    }
    Class News extends DBConnection{
        public function fetch(){
            $data = null;
 
            $query = "SELECT news.news_id, news.title, news.status_news, news.date,
            users.full_name, categories.name, tagnames.content_tag
            FROM news
            JOIN users ON news.user_id = users.user_id
            JOIN categories ON news.category_id = categories.category_id
            JOIN tagnames ON news.tagname_id = tagnames.tagname_id;";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        public function delete($id){
 
            $query = "DELETE FROM news where news_id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
        
        public function edit($id){
 
            $data = null;
 
            $query = "SELECT news.title, categories.name, tagnames.content_tag, news.image, news.summary, news.content
            FROM news
            JOIN users ON news.user_id = users.user_id
            JOIN categories ON news.category_id = categories.category_id
            JOIN tagnames ON news.tagname_id = tagnames.tagname_id;";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
        public function update($data){
            $news_id = $data['news_id'];
            $title = $data['title'];
            $name = $data['name'];
            $content_tag = $data['content_tag'];
            $image = $data['image'];
            $summary = $data['summary'];
            $content = $data['content'];

            $query = "UPDATE news 
            SET title = '$title',
                name = '$name',
                content_tag = '$content_tag',
                image = '$image',
                summary = '$summary',
                content = '$content'


            WHERE news_id = '$news_id'";
         
            if ($sql = $this->conn->query($query)) {
                return true;
            } else {
                return false;
            }
        }
        public function getCategory() {
            $categorys = array(); // Khởi tạo mảng để lưu trữ
        
            // Thực hiện truy vấn để lấy danh sách từ cơ sở dữ liệu
            $query = "SELECT name FROM categories"; 
            $result = $this->conn->query($query);
        
            if ($result->num_rows > 0) {
              // Lặp qua kết quả truy vấn và lấy dữ liệu từ mỗi hàng
                while ($row = $result->fetch_assoc()) {
                    $categorys[] = $row['name']; // Thêm vào mảng
                }
            }
        
            return $categorys; // Trả về mảng
        }
        public function getTag() {
            $tagnames = array(); // Khởi tạo mảng để lưu trữ vai trò
        
            // Thực hiện truy vấn để lấy danh sách vai trò từ cơ sở dữ liệu
            $query = "SELECT content_tag FROM tagnames"; 
            $result = $this->conn->query($query);
        
            if ($result->num_rows > 0) {
                // Lặp qua kết quả truy vấn và lấy dữ liệu từ mỗi hàng
                while ($row = $result->fetch_assoc()) {
                    $tagnames[] = $row['content_tag']; // Thêm vào mảng
                }
            }
        
            return $tagnames; // Trả về mảng
        }
        public function insert(){
            if (isset($_POST['submit'])) {
                if (isset($_POST['title'], $_POST['category_id'], $_POST['tagname_id'], $_POST['image'], $_POST['summary'], $_POST['content'])) {
                    if (!empty($_POST['title']) && !empty($_POST['category_id']) && !empty($_POST['tagname_id']) && !empty($_POST['image']) && !empty($_POST['summary']) && !empty($_POST['content'])) {
                        // Lấy thông tin từ form
                        $title = $_POST['title'];
                        $category_id = $_POST['category_id'];
                        $tagname_id = $_POST['tagname_id'];
                        $image = $_POST['image'];
                        $summary = $_POST['summary'];
                        $content = $_POST['content'];
        
                        // Thực hiện truy vấn để chèn dữ liệu vào bảng news
                        $query = "INSERT INTO news (title, category_id, tagname_id, image, summary, content) VALUES ('$title', '$category_id', '$tagname_id', '$image', '$summary', '$content')";
                        if ($sql = $this->conn->query($query)) {
                            echo "<script>alert('Records added successfully');</script>";
                            echo "<script>window.location.href = 'table-data-news.php';</script>";
                        } else {
                            echo "<script>alert('Failed to add records');</script>";
                            echo "<script>window.location.href = 'table-data-news.php';</script>";
                        }
                    } else {
                        echo "<script>alert('Please fill in all fields');</script>";
                        echo "<script>window.location.href = 'table-data-news.php';</script>";
                    }
                }
            }
        }
        }
        Class Categories extends DBConnection{
            public function fetch(){
                $data = null;
     
                $query = "SELECT * FROM categories";
                if ($sql = $this->conn->query($query)) {
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $data[] = $row;
                    }
                }
                return $data;
            }
            public function delete($id){
     
                $query = "DELETE FROM categories where category_id = '$id'";
                if ($sql = $this->conn->query($query)) {
                    return true;
                }else{
                    return false;
                }
            }
            public function edit($id){
     
                $data = null;
     
                $query = "SELECT * FROM categories";
                if ($sql = $this->conn->query($query)) {
                    while($row = $sql->fetch_assoc()){
                        $data = $row;
                    }
                }
                return $data;
            }
     
            public function update($data){
                $status = $data['status'];
                $category_id = $data['category_id'];
                $name = $data['name'];
             
                $query = "UPDATE categories 
                SET status = '$status',
                    name = '$name'
                WHERE category_id = '$category_id'";
             
                if ($sql = $this->conn->query($query)) {
                    return true;
                } else {
                    return false;
                }
            }
            public function insert(){
 
                if (isset($_POST['submit'])) {
                    if (isset($_POST['name']) && isset($_POST['status'])) {
                        if (!empty($_POST['name']) && !empty($_POST['status']) ) {
                            $status = $_POST['status'];
                            $name = $_POST['name'];
                            $query = "INSERT INTO categories (name,status) VALUES ('$name','$status')";
                            if ($sql = $this->conn->query($query)) {
                                echo "<script>alert('records added successfully');</script>";
                                echo "<script>window.location.href = 'table-data-category.php';</script>";
                            }else{
                                echo "<script>alert('failed');</script>";
                                echo "<script>window.location.href = 'table-data-category.php';</script>";
                            }
     
                        }else{
                            echo "<script>alert('empty');</script>";
                            echo "<script>window.location.href = 'table-data-category.php';</script>";
                        }
                    }
                }
            }
        }

        Class Tagnames extends DBConnection{
            public function fetch(){
                $data = null;
     
                $query = "SELECT * FROM tagnames";
                if ($sql = $this->conn->query($query)) {
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $data[] = $row;
                    }
                }
                return $data;
            }
            public function delete($id){
     
                $query = "DELETE FROM tagnames where tagname_id = '$id'";
                if ($sql = $this->conn->query($query)) {
                    return true;
                }else{
                    return false;
                }
            }
            public function edit($id){
     
                $data = null;
     
                $query = "SELECT * FROM tagnames";
                if ($sql = $this->conn->query($query)) {
                    while($row = $sql->fetch_assoc()){
                        $data = $row;
                    }
                }
                return $data;
            }
     
            public function update($data){
                $content_tag = $data['content_tag'];
                $tagname_id = $data['tagname_id'];

             
                $query = "UPDATE tagnames 
                SET   content_tag = '$content_tag'
                WHERE tagname_id = '$tagname_id'";
             
                if ($sql = $this->conn->query($query)) {
                    return true;
                } else {
                    return false;
                }
            }
            public function insert(){
 
                if (isset($_POST['submit'])) {
                    if (isset($_POST['content_tag'])) {
                        if (!empty($_POST['content_tag']) ) {
                  
                            $content_tag = $_POST['content_tag'];
                            $query = "INSERT INTO tagnames (content_tag) VALUES ('$content_tag')";
                            if ($sql = $this->conn->query($query)) {
                                echo "<script>alert('records added successfully');</script>";
                                echo "<script>window.location.href = 'table-data-tag.php';</script>";
                            }else{
                                echo "<script>alert('failed');</script>";
                                echo "<script>window.location.href = 'table-data-tag.php';</script>";
                            }
     
                        }else{
                            echo "<script>alert('empty');</script>";
                            echo "<script>window.location.href = 'table-data-tag.php';</script>";
                        }
                    }
                }
            }
        }
 ?>

