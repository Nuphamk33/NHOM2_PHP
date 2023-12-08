<!doctype html>
<html>
<head>
    <title>Tìm kiếm</title>
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/ticker-style.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">24ºc, Sunny </li>
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">Monday, 4th December, 2023</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                       <li> <a href="thongtin.html"><i class="fas fa-user"></i></a></li>
                                       <li>
                                        <a href="NguyenPhucThinh--sign-in.html"><span style="color: white; font-size: 13px;"> Đăng xuất</span></a>
                                        <!-- <span style="color: white; font-size: 13px;"> Đăng xuất</span> -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="assets/img/hero/header_card.png" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>                  
                                        <ul id="navigation">    
                                            <li><a href="index.html">Trang chủ</a></li>
                                            <li><a href="#">Danh mục</a>
                                                <ul class="submenu">
                                                    <li><a href="">Thời sự</a></li>
                                                    <li><a href="">Giải trí</a></li>
                                                    <li><a href="">Thể thao</a></li>
                                                    <li><a href="">Giáo dục</a></li>
                                                    <li><a href="">Sức khỏe</a></li>
                                                </ul>
                                            </li>
                                            <!-- <li><a href="categori.html">Category</a></li> -->
                                            <li><a href="about.html">Về chúng tôi</a></li>
                                            <!-- <li><a href="latest_news.html">Latest News</a></li> -->
                                            <li><a href="contact.html">Liên hệ</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>    
                            <!-- tìm kiếm-->
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                <form method="GET" action="">
                                    <input type="text" name="search_query" placeholder="Nhập từ khóa tìm kiếm">
                                    <input type="submit" value="Tìm kiếm">
                                </form>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <?php
    // Kết nối tới cơ sở dữ liệu
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $database = "webtintuc_n2";
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
    }

    // Xử lý tìm kiếm
    if (isset($_GET['search_query'])) {
        $search_query = $_GET['search_query'];

        // Truy vấn dữ liệu từ database
        $sql = "SELECT * FROM news WHERE title LIKE '%$search_query%'";
        $result = mysqli_query($conn, $sql);

        // Kiểm tra kết quả truy vấn
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<h2>".$row['title']."</h2>";
                echo "<img src='".$row['image']."' alt='Ảnh bài báo'>";
                echo "<p>".$row['content']."</p>";
                echo "<hr>";
            }
        } else {
            echo "<h2>Không tìm thấy kết quả.</h2>";
        }
    }

    // Đóng kết nối
    mysqli_close($conn);
    ?>
</body>
</html>