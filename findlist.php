<?php  
    require_once "./php/DanhMuc.php";
    $GetNew = DM::GetNew();
    $dem = $_SESSION['dem'];
    $_SESSION['a0'];
    $i=0;
    $a=0;
?>



<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Danh mục </title>
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
                                       <li> <a href="thongtin.html"><i class="fas fa-user"></i></a></li>
                                       <li>
                                        <a href="NguyenPhucThinh"><span style="color: white; font-size: 13px;"> Đăng xuất</span></a>
                                        <span><?php ?> </span>
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
                                            
                                            
                                            <li><a href="about.html">Về chúng tôi</a></li>
                                            
                                            <!-- <li><a href="contact.html">Liên hệ</a></li> -->
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>    
                            <!-- tìm kiếm-->
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag search-btn" ></i>
                                    <div class="search-box">
                                        <form action="">
                                            <input type="text" placeholder="Search" name="search" class="input-search">
                                            <button name="search-btn"></button>
                                        </form>
                                    </div>
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

    <main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
          

            <div class="row">
       <div class="col-lg-20">




<h1> <?php
echo $user_name = $_POST["DM"];
?> </h1>  



<div class="trending-bottom">
                            <div class="row">




                              
                               
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                                                         
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>
                                
                                                               
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?php if($a<$dem){$b="a".$a;  echo $_SESSION[$b];}; $a++; ?>" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="details.html"> <?php if($i<$dem){echo $_SESSION[$i];}$i++; ?>  </a></h4>
                                        </div>
                                    </div>
                                </div>
    



</div>
</div>






                   
</div>
</div>
</div>
</div>
                   









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
                                            Hotline: 19002810 (9-16h30) | 0929263744 (ngoài giờ HC)
                                            © 2003 Tin tức mới nhất.
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
                                <p>Hotline: 0919 281 023</p>
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
   &copy;<script>document.write(new Date().getFullYear());</script> Thiết kế <i class="ti-heart" aria-hidden="true"></i> bởi <a href="https://colorlib.com" target="_blank">Nhóm 2</a>
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

        <script src="./search.js"></script>
        
    </body>
</html>