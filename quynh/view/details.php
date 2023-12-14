

<main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trang chủ / Bài đăng</strong>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <?php
                                $conn = new PDO("mysql:host=127.0.0.1:3307;dbname=webtintuc_n2;charset=utf8", "root", "");
                                    // Kiểm tra xem tham số GET 'id' có tồn tại hay không
                                    if (isset($_GET['news_id'])) {
                                        // Lấy giá trị của tham số 'id' và giải mã URL
                                        $detailId = urldecode($_GET['news_id']);

                                        // Tạo một đối tượng Details và truyền đối tượng Database vào
                                        $details = new Details($conn);

                                        // Gọi phương thức getDetails() để lấy chi tiết của bài báo
                                        $Details = $details->getDetails($detailId);

                                        // Kiểm tra xem có bài báo tương ứng hay không
                                        if ($Details) {
                                            // Hiển thị chi tiết của bài báo
                                            echo '<div class="about-img">';
                                            echo '<img src="' . $Details['image'] . '" alt="">';
                                            echo '</div>';
                                            
                                            echo '<div class="about-prea">';
                                            echo '<p class="about-pera1 mb-25">' . $Details['content'] . '</p>';
                                            echo '</div>';
                                        }
                                    }
                                ?>
                      
                                <div class="social-share pt-30">
                                    <div class="section-tittle">
                                        <h3 class="mr-20">Share:</h3>
                                        <ul>
                                            <li><a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a></li>
                                            <li><a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a></li>
                                            <li><a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a></li>
                                            <li><a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- From -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập bình luận'" placeholder=" Nhập bình luận"></textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Gửi</button>
                                        </div>
                                    </form>
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
                                <img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t39.30808-6/405268972_122141933648022988_5987151734906577459_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeGWItD52kQgNo318yId3nVG7Bq-C4xyp-XsGr4LjHKn5WZ13MLhKjwM8jCm6Om_ibPDGD7Y0Q73zDVNVM-lJzyi&_nc_ohc=k7_CdYpCblgAX_Q1FKB&_nc_ht=scontent.fhan3-1.fna&oh=00_AfAIQLRD1G17OcL-qxtJmgFsT0GBHHwSIyGZgoQHgWdq3w&oe=657265B5" alt="">
                            </div>
                        </div>
                   </div>
            </div>
        </div>
        <!-- About US End -->
    </main>