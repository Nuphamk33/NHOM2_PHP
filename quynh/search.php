<?php
 include "view/header.php";
include "model/search.php";
?>


<div class="weekly2-news-area  weekly2-pading gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle mb-30">
                    <h3>Kết quả tìm kiếm :</h3>
                </div>
            </div>
        </div>
        <div class="news-page-container">
            <div class="news-page-content">
                <div class="news-data-list">
                    <?php
                    // Kiểm tra xem đã có kết quả tìm kiếm hay chưa
                    // Sử dụng lớp NewsSearch để tìm kiếm dữ liệu
                     $newsSearch = new NewsSearch();
                     $searchTerm = $_GET['searchTerm'];
                    $searchResults = $newsSearch->searchNewsByTitle($searchTerm);
                     if (isset($_GET['searchTerm'])) {
                        // $searchTerm = $_GET['searchTerm'];
                        // $searchResults = $newsSearch->searchNewsByTitle($searchTerm);
                         if (!empty($searchResults)) {
                            foreach ($searchResults as $result) {
                                echo '
                                <div class="row">
                                    <div class="col-12">
                                        <div class="weekly2-news-active dot-style d-flex dot-style">
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">


                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="' . $result['image'] . '" alt="">
                                            </button>
                                        </div>
                                        <input type="hidden"  name="news_id" value="' . $result['news_id'] . ' " >
                                            </input>                                       
                                    
                                    </form>












                                                </div>
                                                <div class="weekly2-caption">
                                                    <span class="color1">' . $result['status_news'] . '</span>
                                                    <p>' . $result['date'] . '</p>
                                                    <h4><a href="index.php?act=details&news_id=">' . $result['title'] . '</a></h4>
                                                </div>
                                            </div> 
                                        </div>
                                    </div> 
                                </div>';
                                echo "<br>";
                                echo "<br>";
                             }
                        } else {
                            echo 'Không tìm thấy kết quả.';
                        }
                     }
                    ?>
                </div>
                <!-- <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        const newsDataAfterSerach = localStorage.getItem("newsData");

                        if (newsDataAfterSerach) {
                            const decodeNewsData = JSON.parse(newsDataAfterSerach)
                            const newsDataList = document.querySelector('.news-data-list')
                            //render data
                            const html = `
                                <table>
                                    ${decodeNewsData && decodeNewsData.map((item, index) => {
                                        return `
                                            <div class="row" key=${index}>
                                                <div class="col-12">
                                                    <div class="weekly2-news-active dot-style d-flex dot-style">
                                                        <div class="weekly2-single">
                                                            <div class="weekly2-img">
                                                                <img src="${item.image}" alt="">
                                                            </div>
                                                            <div class="weekly2-caption">
                                                                <span class="color1">${item.status_news}</span>
                                                                <p>${item.date}</p>
                                                                <h4><a href="details.html">${item.title}</a></h4>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div> 
                                            </div>
                                            `
                                    })}
                                </table>
                            `;

                            newsDataList.innerHTML = html;
                        }
                    })
                </script> -->
            </div>
        </div>
    </div>
</div>
<?php
 include "view/footer.php";?>