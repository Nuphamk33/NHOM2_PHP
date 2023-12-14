<?php
session_start(); 

require_once('./connectdb.php');
require_once('./comment.php');
require_once('./news.php');

if (isset($_POST['content_cmt'])) {
    if (isset($_SESSION['user'])) {
        $payload['user_id'] = $_SESSION['user']['user_id'];
        $payload['content_cmt'] = $_POST['content_cmt'];
        $payload['news_id'] = $news_id;
        $count = $comments->insert($payload);

        if ($count == 1) {
            header('Location: detail.php?news_id=' . $news_id);
            exit();
        }
    } else {
        echo '<script>alert("Đăng nhập để comment")</script>';
    }
}

if (isset($_GET['news_id']) && isset($_GET['comment_id']) && isset($_GET['reply'])) {
    $data = [
        'reply' => $_GET['reply'],
    ];
    $comments->update('comment', $data, $_GET['comment_id']);
    header('location: ./detail.php?news_id=' . $_GET['news_id']);
}
?>

<!doctype html>
<html class="no-js" lang="zxx">
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Bài đăng </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
<body>
    <!-- Mã HTML của phần header và các phần còn lại của trang -->
        <!-- Preloader Start -->
        <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <?php include "view/header.php"    ?>

    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending</strong>
                                <!-- <p>Ngắm nhìn những bộ trang phục gây sốt của Taylor Swift trong The Eras Tour</p> -->
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <li class="news-item">Taylor Swift khóc như mưa trên sân khấu</li>
                                        <li class="news-item">Drake: "Taylor Swift là người duy nhất khiến tôi đổi ngày ra mắt album"</li>
                                        <li class="news-item">Ngắm nhìn những bộ trang phục gây sốt của Taylor Swift trong The Eras Tour</li>
                                    </ul>
                                </div>
                                
                            </div>
                            <div>
                            <?php
        $servername = "127.0.0.1:3308";
        $username = "root";
        $password = "";
        $dbname = "webtintuc_n2";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Truy vấn dữ liệu từ cơ sở dữ liệu
        $sql = "SELECT * FROM news";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div>';
            echo '<div>';
            echo '<div class="section-tittle mb-30 pt-30">';
            echo '<p class="about-pera1 mb-25">' . (isset($row['category_id']) ? $row['category_id'] : '') . '</p>';
            echo '<h3>' . (isset($row['title']) ? $row['title'] : '') . '</h3>';
            echo '</div>';

            echo '<div class="about-img">';
            echo '<img src="' . (isset($row['image']) ?  $row['image'] : '') . '" alt="IMG">';
            echo '</div>';

            echo '<div class="about-prea">';
            echo '<h4 class="about-pera1 mb-25">' . (isset($row['summary']) ? $row['summary'] . '<br><br>' : '') . '</h4>';
            echo '<p class="about-pera1 mb-25">' . (isset($row['content']) ? $row['content'] : '') . '</p>';
            echo '</div>';
            echo '<div>';
            echo '<div>';
        }
    } else {
        echo "0 kết quả";
    }
        // Đóng kết nối với cơ sở dữ liệu
        $conn->close();
        ?>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div>



                            <div class="social-share pt-30">
                                    <div class="section-tittle">
                                        <h3 class="mr-20">Share:</h3>
                                        <ul>
                                            <li><a href="detail.php"><img src="assets/img/news/icon-ins.png" alt=""></a></li>
                                            <li><a href="detail.php"><img src="assets/img/news/icon-fb.png" alt=""></a></li>
                                            <li><a href="detail.php"><img src="assets/img/news/icon-tw.png" alt=""></a></li>
                                            <li><a href="detail.php"><img src="assets/img/news/icon-yo.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- From -->
                            <div class="row">
                                <div class="my-2">
                                    <div class="container mt-4">
                                      <div class="d-flex">
                                        
                                        </div>
                                        <div class="cmt ms-3" style="width: 500px; height: 150px;">
                                          <form action="addcmt.php" method="post">
                                            <textarea name="content" class="form-control " placeholder="Thêm nhận xét của bạn..." rows="1"
                                              style="border-radius: 1rem; width: 108%; background-color: #f7f7f7;"></textarea>
                                            <button type="submit" class="btn mt-2 d-none" name="btn-cmt" style="border-radius: 2rem" disabled>Nhận xét</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <style>
                                    .btn.mt-2 {
                                      background-color: #fff;
                                      border: 1px solid #ceced2;
                                      color: #191b26;
                                    }
                            
                                    .btn.mt-2:hover {
                                      border: 1px solid #191b26;
                                      color: #191b26;
                                    }
                                  </style>
                                  <script>
                                    document.querySelector('.cmt').addEventListener('input', () => {
                                      if (document.querySelector('.cmt textarea').value == "")
                                        document.querySelector('.cmt button').disabled = true
                                      else
                                        document.querySelector('.cmt button').disabled = false
                                    })
                                    document.querySelector('.cmt textarea').addEventListener("focus", function () {
                                      document.querySelector('.cmt button').classList.remove('d-none')
                                      document.querySelector('.cmt textarea').rows = '2'
                                    });
                                    document.querySelector('.cmt textarea').addEventListener("blur", function () {
                                      if (document.querySelector('.cmt textarea').value == "") {
                                        document.querySelector('.cmt button').classList.add('d-none')
                                        document.querySelector('.cmt textarea').rows = '1'
                                      }
                                    });
                                  </script>
                            </div>
                        </div>
                   </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
             <div class="container">
                 <div class="row d-flex justify-content-between">
                     <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                         <div class="single-footer-caption">
                             <div class="single-footer-caption">
                                 <!-- logo -->
                                 <div class="footer-logo">
                                     <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                 </div>
                                 <div class="footer-tittle">
                                     <div class="footer-pera">
                                         <p>Tòa soạn: V101 79 Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội
                                             Hotline: 19002810 (9-16h30) | 0987654321 (ngoài giờ HC)
                                             © 2003 Tin tức mới nhất. All rights reserved.
                                             Chỉ được phát hành lại thông tin từ website này khi có sự
                                             đồng ý bằng văn bản của báo Minh Nụ Quỳnh Thịnh.</p>
                                     </div>
                                 </div>
                                 <!-- social -->
                                 <div class="footer-social">
                                     <a href="#"><i class="fab fa-facebook"></i></a>
                                     <a href="#"><i class="fab fa-instagram"></i></a>
                                     <a href="#"><i class="fab fa-youtube"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                         <div class="single-footer-caption mt-60">
                             <div class="footer-tittle">
                                 <h4>Liên hệ quảng cáo</h4>
                                 <p>Hotline: 0987 654 321</p>
                                 <!-- Form -->
                                 <div class="footer-form" >
                                     <div id="mc_embed_signup">
                                         <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                         method="get" class="subscribe_form relative mail_part">
                                             <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                             class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                             onblur="this.placeholder = ' Email Address '">
                                             <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                             </div>
                                             <div class="mt-10 info"></div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center justify-content-between">
                         <div class="col-lg-6">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div class="footer-menu f-right">
                                 <ul>                             
                                     <li><a href="#">Điều khoản sử dụng</a></li>
                                     <li><a href="#">Chính sách quyền riêng tư</a></li>
                                     <li><a href="#">Liên hệ</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="./assets/js/jquery.ticker.js"></script>
        <script src="./assets/js/site.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>