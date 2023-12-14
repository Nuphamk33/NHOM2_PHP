

<?php
    
    include "model/news.php";
    include "model/details.php";
    // include "model/search.php";
    //load du lieu trang chu
    $news = new News();
    $new1 = $news->getAllNews();
    // $new1 = getAllNews();

    //load chi tiet bai viet
    // $details = new Details();
    // $detail1 = $details->getDetails();
    // $details = new Details($conn);
    //tim kiem bai viet
    // $newsSearch = new NewsSearch();
    // $searchTerm = $_GET['searchTerm'];
    // $searchResults = $newsSearch->searchNewsByTitle($searchTerm);

    include "view/header.php";
if(isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'about':
            include "view/about.php";
            break;
        case 'details':
            include "view/details.php";
            break;
        case 'thongtin':
            include "view/thongtin.php";
            break;
        case 'search':
            include "view/search.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}
if (isset($_GET['searchTerm'])) {
    include "view/search.php";
    // $searchTerm = $_GET['searchTerm'];
    // $searchResults = $newsSearch->searchNewsByTitle($searchTerm);

    // if (!empty($searchResults)) {
    //     foreach ($searchResults as $result) {
    //         echo '
    //         <div class="row">
    //             <div class="col-12">
    //                 <div class="weekly2-news-active dot-style d-flex dot-style">
    //                     <div class="weekly2-single">
    //                         <div class="weekly2-img">
    //                             <img src="' . $result['image'] . '" alt="">
    //                         </div>
    //                         <div class="weekly2-caption">
    //                             <span class="color1">' . $result['status_news'] . '</span>
    //                             <p>' . $result['date'] . '</p>
    //                             <h4><a href="details.html">' . $result['title'] . '</a></h4>
    //                         </div>
    //                     </div> 
    //                 </div>
    //             </div> 
    //         </div>';
    //     }
    // } else {
    //     echo 'Không tìm thấy kết quả.';
    // }
}
else {include "view/home.php";
}
   

    include "view/footer.php";

?>