<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Thủ tướng mong muốn các doanh nghiệp đến đầu tư, mở rộng đầu tư; đặc biệt là với UAE có nhiều quỹ đầu tư hãy xem Việt Nam là địa chỉ tin cậy để gửi gắm.</li>
                                    <li class="news-item">"Mỏ dầu" IoT tạo ra "dầu mỏ" dữ liệu ......</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="assets/img/trending/trending_top.jpg" alt="">
                                <div class="trend-top-cap">
                                    <span>Giới sao</span>
                                    <h2><a href="index.php?act=details&news_id=">HÀN QUỐC - G-Dragon có thể sẽ phải đền bù số tiền lên tới 933 tỷ đồng dù anh có kết quả xét nghiệm âm tính với ma túy sau nhiều cuộc kiểm tra.</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <?php
                                    foreach ($new1 as $n){
                                        echo'<div class="col-lg-4">
                                                <div class="single-bottom mb-35">
                                                    <div class="trend-bottom-img mb-30">


                                                            <form action="detail.php" method="post"> 
                                                        
                                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                            <img src="'.$n['image'].'" alt="">
                                                            </button>
                                                       
                                                        <input type="hidden"  name="news_id" value="' . $n['news_id'] . ' " >
                                                            </input>                                       
                                                    
                                                    </form>













                                                        
                                                    </div>
                                                    <div class="trend-bottom-cap">
                                                        <span class="color1">'.$n['status_news'].'</span>
                                                        <h4><a href="index.php?act=details&news_id=">'.$n['title'].'</a></h4>
                                                    </div>
                                                </div>
                                            </div>';
                                    }

                                ?>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <?php
                            foreach ($new1 as $n){
                                echo'<div class="trand-right-single d-flex">
                                        <div class="trand-right-img">
                                            <img src="'.$n['image'].'" alt="">
                                        </div>
                                        <div class="trand-right-cap">
                                            <span class="color3">'.$n['status_news'].'</span>
                                            <h4><a href="index.php?act=details&news_id=">'.$n['title'].'</a></h4>
                                        </div>
                                    </div>';
                            }

                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Báo hot tuần</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                        <?php
                            foreach ($new1 as $n){
                                echo'<div class="weekly-single">
                                        <div class="weekly-img">
                                            <img src="'.$n['image'].'" alt="">
                                        </div>
                                        <div class="weekly-caption">
                                            <span class="color1">'.$n['status_news'].'</span>
                                            <h4><a href="index.php?act=details&news_id=">'.$n['title'].'</a></h4>
                                        </div>
                                    </div> ';
                            }

                        ?>
                            
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
   <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Có gì mới</h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="properties__button">
                            <!--Nav Button  -->                                            
                            <nav>                                                                     
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tất cả</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Cuộc sống</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Du lịch</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Thời trang</a>
                                    <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Thể thao</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="whats-news-caption">
                                    <div class="row">
                                    <?php
                                        foreach ($new1 as $n){
                                            echo'<div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="'.$n['image'].'" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">'.$n['status_news'].'</span>
                                                            <h4><a href="index.php?act=details&news_id=">'.$n['title'].'</a></h4>
                                                        </div>
                                                    </div>
                                                </div>';
                                        }

                                    ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Card two -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                    <?php
                                        foreach ($new1 as $n){
                                            echo'<div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="'.$n['image'].'" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">'.$n['status_news'].'</span>
                                                            <h4><a href="index.php?act=details&news_id=">'.$n['title'].'</a></h4>
                                                        </div>
                                                    </div>
                                                </div>';
                                        }

                                    ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Card three -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                    <?php
                                        foreach ($new1 as $n){
                                            echo'<div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="'.$n['image'].'" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">'.$n['status_news'].'</span>
                                                            <h4><a href="index.php?act=details&news_id=">'.$n['title'].'</a></h4>
                                                        </div>
                                                    </div>
                                                </div>';
                                        }

                                    ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- card fure -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                    <?php
                                        foreach ($new1 as $n){
                                            echo'<div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="'.$n['image'].'" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">'.$n['status_news'].'</span>
                                                            <h4><a href="index.php?act=details&news_id=">'.$n['title'].'</a></h4>
                                                        </div>
                                                    </div>
                                                </div>';
                                        }

                                    ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- card Six -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                    <?php
                                        foreach ($new1 as $n){
                                            echo'<div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="'.$n['image'].'" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">'.$n['status_news'].'</span>
                                                            <h4><a href="index.php?act=details&news_id=">'.$n['title'].'</a></h4>
                                                        </div>
                                                    </div>
                                                </div>';
                                        }

                                    ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Theo dõi chúng tôi</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                            </div>
                            <div class="follow-count">  
                                <span>281,023</span>
                                <p>Người theo dõi</p>
                            </div>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>281,023</span>
                                <p>Người theo dõi</p>
                            </div>
                        </div>
                            <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>281,023</span>
                                <p>Người theo dõi</p>
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>281,023</span>
                                <p>Người theo dõi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Poster -->
                <div class="news-poster d-none d-lg-block">
                    <img src="assets/img/news/news_card.png" alt="">
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Tin nóng cuối tuần</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <?php
                                foreach ($new1 as $n){
                                    echo'<div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="'.$n['image'].'" alt="">
                                            </div>
                                            <div class="weekly2-caption">
                                                <span class="color1">'.$n['status_news'].'</span>
                                                <p>25 11 2023</p>
                                                <h4><a href="index.php?act=details&news_id=">Chào mừng bạn đến với ...</a></h4>
                                            </div>
                                        </div> ';
                                }

                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
    <!--  Recent Articles start -->
    <div class="recent-articles">
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Tin cuối ngày</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            <?php
                                foreach ($new1 as $n){
                                    echo'<div class="single-recent mb-100">
                                            <div class="what-img">
                                                <img src="'.$n['image'].'" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">'.$n['status_news'].'</span>
                                                <h4><a href="index.php?act=details&news_id=">Nhấn vào để xem chi tiết hơn.</a></h4>
                                            </div>
                                        </div>';
                                }

                            ?>
                            
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!--Recent Articles End -->
    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
    </main>