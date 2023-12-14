<?php  
    require "./view/DanhMuc.php";
    // $GetNew = DM::GetDM();
    session_start();
    $mangDM= DM::GetDM();
   
    
    
      
?>


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tin mới giật gân đây </title>
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
                                       <li> <p> <?php echo $_SESSION['full_name'];?>  </p>
                                       <li> <a href="/nhom2_php/infor.php"><i class="fas fa-user"></i></a></li>
                                       <li>
                                        <a href="/nhom2_php/php/logout.php"><span style="color: white; font-size: 13px;"> Đăng xuất</span></a>
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
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
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
                                            <li><a href="index.php">Trang chủ</a></li>
                                            <li><a href="#">Danh mục</a>
                                            <ul class="submenu">
                                            <form  action="/nhom2_php/quynh/findlist.php" method="post"> 
                            
                            
                        <?php

                     
                            for($i=0;$i<$_SESSION['numDM'];$i++){
                                echo '
                                 
                                    <ul> <input type="submit" name="DM" value="'.$mangDM[$i].'"  style="color:black; background-color: white;border:white;"></ul>'
                                                   
                                    ;

                            }

                             
                      
                        ?>
                        </form>
                        </ul>









                                                <!-- <ul class="submenu">
                                                <form  action="/nhom2_php/quynh/findlist.php" method="post">  
                                                    <ul><input type="submit" name="DM" value="Thời sự"  style="color:black; background-color: white;border:white;"></ul>
                                                    <ul><input type="submit" name="DM" value="Giải trí"  style="color:black; background-color: white;border:white;"></ul>
                                                    <ul><input type="submit" name="DM" value="Thể thao"  style="color:black; background-color: white;border:white;"></ul>
                                                    <ul><input type="submit" name="DM" value="Giáo dục"  style="color:black; background-color: white;border:white;"></ul>
                                                    <ul><input type="submit" name="DM" value="Phạm Thị Nụ" style="color:black; background-color: white;border:white;"> </ul>
                                                </form>
                                                </ul> -->
                                            </li>
                                            
                                            <li><a href="index.php?act=about">Về chúng tôi</a></li>
                                            
                                            <!-- <li><a href="contact.html">Liên hệ</a></li> -->
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>    
                            <!-- tìm kiếm-->
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag Newssearch"></i>
                                    <div class="search-box">
                                        <form action="/nhom2_php/quynh/search.php" method="GET">
                                            <input type="text" placeholder="Search" name="searchTerm" class="input-search">
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function()) {
                                    var searchButton = document.querySelector('.Newssearch');
                                        searchButton.addEventListener('click', function(event) {
                                            event.preventDefault(); // Ngăn chặn hành vi mặc định của nút submit
                                            console.log('Button clicked');
                                            var searchForm = document.querySelector('.search-box form');
                                            searchForm.submit();
                                        });
                                }
                            </script>
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