<?php
include_once './comment.php';
include_once './news.php';
require_once ('./includes/header.php');
?>

<?php
$newsObj = new News();  
$comments = new Comments();

if (isset($_GET['news_id'])) {
	$news_id = $_GET['news_id'];
	$newsObj->updateViews($news_id);
	$newsDetail = $newsObj->getDetailById($news_id);  
}

if (isset($_POST['content_cmt'])) {
	if (isset($_SESSION['user'])) {
		$payload['user_id'] = $_SESSION['user']['id'];
		$payload['content_cmt'] = $_POST['content_cmt'];
		$payload['news_id'] = $news_id;

		$count = $comments->insert($payload);
		if ($count == 1) {
			header('Location:detail.php?id=' . $news_id);
		}
	} else {
		echo '<script>alert("Đăng nhập để comment")</script>';
	}
}

if (isset($_GET['action'])) {
	$action = $_GET['action'];
	switch ($action) {
		case 'delete':
			if (is_numeric($_GET['comment_id'])) {
				$comments->delete($_GET['comment_id']);
				header('Location:detail.php?id=' . $news_id);
			}
			break;
		default:
			# code...
			break;
	}
}
?>

<!-- Breadcrumb -->
<div class="container">
	<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
		<div class="f2-s-1 p-r-30 m-tb-6">
			<a href="index.php" class="breadcrumb-item f1-s-3 cl9">
				Home
			</a>
			<span class="breadcrumb-item f1-s-3 cl9">
				<?php echo isset($news['title']) ? 'Tin tức: ' . $news['title'] : ''; ?>
			</span>
		</div>
	</div>
</div>

<!-- Content -->
<section class="bg0 p-b-140 p-t-10">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-30">
				<div class="p-r-10 p-r-0-sr991">
					<!-- Blog Detail -->
					<div class="p-b-70">
						<a href="detail.php?id=<?php echo isset($news['category_id']) ? $news['category_id'] : ''; ?>" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
							<?php echo isset($news['category_id']) ? $news['category_id'] : ''; ?>
						</a>

						<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
							<?php echo isset($news['title']) ? $news['title'] : ''; ?>
						</h3>

						<div class="flex-wr-s-s p-b-40">
							<span class="f1-s-3 cl8 m-r-15">
								<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
									by <?php echo isset($news['user_id']) ? $news['user_id'] : ''; ?>
								</a>

								<span class="m-rl-3">-</span>

								<span>
									<?php echo isset($news['date']) ? $news['date'] : ''; ?>
								</span>
							</span>
						</div>

						<h4 class="f1-m-2 cl3 tab01-title">
							<?php echo isset($news['summary']) ? $news['summary'] . '<br><br>' : ''; ?>
						</h4>

						<div class="wrap-pic-max-w p-b-30">
							<img src="<?php echo isset($news['image']) ? $news['image'] : ''; ?>" alt="IMG">
						</div>

						<div>
							<?php echo isset($news['content']) ? $news['content'] : ''; ?>
						</div>

						<!-- Share -->
						<div class="flex-s-s">
							<span class="f1-s-12 cl5 p-t-1 m-r-15">
								Share:
							</span>

							<div class="flex-wr-s-s size-w-0">
								<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
									<i class="fab fa-facebook-f m-r-7"></i>
									Facebook
								</a>

								<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
									<i class="fab fa-twitter m-r-7"></i>
									Twitter
								</a>

								<a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
									<i class="fab fa-google-plus-g m-r-7"></i>
									Google+
								</a>

								<a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
									<i class="fab fa-pinterest-p m-r-7"></i>
									Pinterest
								</a>
							</div>
						</div>
					</div>

					<!-- Leave a comment -->
					<div class="comments">
						<div class="leave-comment">
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									Leave a Comment
								</h3>
							</div>

							<form action="" method="POST">
								<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="content" placeholder="Comment..."></textarea>
								<input type="submit" class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10" value="Post Comment">
							</form>
						</div>

						<hr>

						<div class="show-comments">
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									Comments
								</h3>
							</div>
							<!-- list comment -->
							<?php
							// Ensure $comment is defined before using it
							if(isset($comment)) {
								$list_cmt = $comment->getByPostId($news_id);
								foreach ($list_cmt as $r) {
							?>
								<div class="single-comment">
									<div class="media">
										<div class="media-body">
											<h5 class="mt-0"><strong>@<?php echo $r['full_name'] ?></strong></h5>
											<p><?php echo $r['content_cmt'] ?></p>

											<!-- <?php
											if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 0) {
											?>
												<a href="?action=delete&id=<?php echo $news_id ?>&comment_id=<?php echo $r['id'] ?>" onclick="return confirm('Xóa à?')">Xóa</a>
											<?php
											}
											?> -->

										</div>
									</div>
								</div>
								<hr>
							<?php
								}
							}
							?>
						</div>
		</div>
	</div>
</section>

<?php
require_once('includes/footer.php');
?>
