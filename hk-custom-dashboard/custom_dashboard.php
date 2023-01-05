<style>
	* {
		box-sizing: inherit;
	}

	.grid {
		width: 100%;
		display: block;
		padding: 0;
	}


	.row {
		display: flex;
		flex-wrap: wrap;
		margin-left: -12px;
		margin-right: -12px;
	}

	.col {
		padding-left: 12px;
		padding-right: 12px;
	}

	.l-6 {
		flex: 0 0 50%;
		max-width: 50%;
		margin: 10px 0;
	}

	.l-4 {
		flex: 0 0 33.33333%;
		max-width: 33.33333%;
		margin: 10px 0;
	}

	.pd-20 {
		padding: 20px 0;
	}

	.about-wrap {
		max-width: unset;
	}

	.wrap-content {
		padding: 20px 40px;
		background-color: #fff;
		box-shadow: 0px 1px 2px 0px rgb(0 0 0 / 30%);
		margin: 20px 0;
	}

	.wrap-content__noBG {
		/* padding: 20px 40px; */
		/* background-color: #fff;
		box-shadow: 0px 1px 2px 0px rgb(0 0 0 / 30%); */
		margin: 20px 0;
	}

	.flex-block {
		display: flex;
		align-items: center;

		justify-content: center;
	}

	.icon-noti {
		font-size: 60px;
		margin-right: 40px;
	}

	.sub-content {
		line-height: 18px;
		font-size: 15px;
		color: #555;
	}

	.noti-content {
		flex: 1;
	}

	.noti-content h3 {
		line-height: 2rem;
		margin: 0;
	}

	.title__col,
	.title {
		text-transform: uppercase;
		font-size: 15px;
	}

	.title__col {
		padding: 10px 0;

	}

	.title {
		/* text-transform: capitalize; */
		font-weight: 500;
		font-size: 18px;
		padding-top: 20px;
	}

	.quict__item {
		background-color: #fff;
		display: block;
		width: 100%;
		padding: 20px 0;
		color: #333;
		text-decoration: none;
		text-align: center;
		border: 2px solid transparent;
		overflow: hidden;
		box-shadow: 0px 1px 2px 0px rgb(0 0 0 / 30%);
	}

	.noti__col--item {
		background-color: #fff;
		display: block;
		width: 100%;
		padding: 20px 0;
		color: #333;
		text-decoration: none;
		text-align: center;
		overflow: hidden;
		box-shadow: 0px 1px 2px 0px rgb(0 0 0 / 30%);
	}

	.noti__col--content {
		min-height: 200px;
	}

	.quict__item:hover {
		color: transparent;
		border: 2px solid var(--e-context-primary-color);
	}

	.quict__item--img {
		text-align: center;
		margin-bottom: 20px;
	}

	.quict__item--img img {
		width: 60%;
		height: 160px;
		object-fit: contain;
	}


	.quict__item--title p {
		text-transform: capitalize;
		font-weight: 500;
		font-size: 18px;
		color: #333;
		margin: 4px;
	}

	.quict__item--link {
		display: flex;
		align-items: center;
		justify-content: center;
		color: var(--e-context-primary-color);
	}

	.quict__item--link p {
		margin: 0;
		text-transform: capitalize;
	}

	.quict__item--icon {
		position: relative;
		top: 1px;
	}

	.banner__item {
		height: 300px;
		object-fit: cover;
	}

	/* SLide */
	* {
		box-sizing: border-box;
		padding: 0;
		margin: 0;
	}

	.slider {
		max-width: 100%;
		margin: 20px auto;
		position: relative;
	}

	.slider-wrap {
		width: 100%;
		overflow: hidden;
		position: relative;
	}

	.slider-main {
		display: flex;
		align-items: center;
		position: relative;
		transition: transform 0.5s linear;
	}

	.slider-item {
		width: 100%;
		flex: 1 0 100%;
		cursor: pointer;
	}

	.slieder-img {
		width: 100%;
		border-radius: 8px;
		height: 300px !important;
		object-fit: cover;
	}

	.btn-icon {
		width: 30px;
		height: 30px;
		padding: unset !important;
		/* display: none; */
		text-align: center;
	}

	.btn {
		font-size: 20px;
		background-color: #fff;
		position: absolute;
		padding: 10px 14px;
		border-radius: 50%;
	}

	.btn:hover {
		color: #BDC3C7;
		cursor: pointer;
	}

	.prev-btn {
		top: 50%;
		left: 0;
		transform: translateX(-50%);
	}

	.next-btn {
		top: 50%;
		right: 0;
		transform: translateX(50%);
	}

	.icon {
		position: relative;
		top: 4px;
	}

	.doct-slider {
		position: absolute;
		bottom: 40px;
		width: 100%;
		text-align: center;
	}

	.list-doct {
		padding: 0;
		list-style: none;
	}

	.doct-item {
		display: inline-block;
		width: 14px;
		height: 14px;
		background-color: #95A5A6;
		border-radius: 50%;
		margin: 0 6px;
		cursor: pointer;
		display: none;
	}

	.doct-item.active {
		background-color: #27AE60;
	}
</style>

<?php

/**
 * Our custom dashboard page
 */

/** WordPress Administration Bootstrap */
require_once(ABSPATH . 'wp-load.php');
require_once(ABSPATH . 'wp-admin/admin.php');
require_once(ABSPATH . 'wp-admin/admin-header.php');
?>

<?php
$ch = curl_init();
$url = 'https://amedigital.vn/wp-json/wp/v2/media';
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);
// echo $resp;
if ($e = curl_error($ch)) {
	print_r($e);
} else {
	$decode = json_decode($resp);
	// var_dump($decode);
}
curl_close($ch);
?>


<div class="wrap about-wrap">
	<div class="wrap-content flex-block">
		<i class="fa-regular fa-bell icon-noti"></i>
		<div class="noti-content">
			<h3><?php _e("You haven't finished setting up your site."); ?></h3>

			<div class="sub-content">
				<?php _e('Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'); ?>
			</div>
		</div>
	</div>

	<div class="wrap-content">
		<h1><?php _e('Chào mừng bạn đến với trang quản trị AME Digital'); ?></h1>

		<div class="about-text">
			<?php _e('Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'); ?>
		</div>
	</div>

	<div class="wrap-content__noBG">
		<div class="grid">
			<div class="row">

				<div class="col l-6">
					<div class="title__col">
						<h3>
							Thông báo
						</h3>
					</div>
					<div href="#" class="noti__col--item">
						<div href="#" class="noti__col--content">

						</div>
					</div>
				</div>
				<div class="col l-6">
					<div class="title__col">
						<h3>
							Tin tức
						</h3>
					</div>
					<div href="#" class="noti__col--item">
						<div href="#" class="noti__col--content">

						</div>
					</div>
				</div>

			</div>
		</div>

	</div>


	<div>
		<div class="title">
			<h3>
				Các chức năng
			</h3>
		</div>
		<div class="wrap-content__noBG">
			<div class="grid">
				<div class="row">
					<div class="col l-4">
						<a href="#" class="quict__item">
							<div class="quict__item--img">
								<img src=<?php echo plugins_url('/img/text.png', __FILE__) ?> />
							</div>
							<div class="quict__item--title">
								<p>Tùy biến Text</p>
							</div>
							<div class="quict__item--link">
								<p>
									<span>
										Xem
									</span>
									<i class="fa-solid fa-arrow-right-long quict__item--icon"></i>
								</p>
							</div>
						</a>
					</div>

					<div class="col l-4">
						<a href="#" class="quict__item">
							<div class="quict__item--img">
								<img src="<?php echo plugins_url('/img/image.png', __FILE__) ?>" />
							</div>
							<div class="quict__item--title">
								<p>Tùy biến hình ảnh</p>
							</div>
							<div class="quict__item--link">
								<p>
									<span>
										Xem
									</span>
									<i class="fa-solid fa-arrow-right-long quict__item--icon"></i>
								</p>
							</div>
						</a>
					</div>

					<div class="col l-4">
						<a href="#" class="quict__item">
							<div class="quict__item--img">
								<img src="<?php echo plugins_url('/img/link.png', __FILE__) ?>" />
							</div>
							<div class="quict__item--title">
								<p>Tùy biến Link</p>
							</div>
							<div class="quict__item--link">
								<p>
									<span>
										Xem
									</span>
									<i class="fa-solid fa-arrow-right-long quict__item--icon"></i>
								</p>
							</div>
						</a>
					</div>

					<div class="col l-4">
						<a href="#" class="quict__item">
							<div class="quict__item--img">
								<img src="<?php echo plugins_url('/img/color.png', __FILE__) ?> " />
							</div>
							<div class="quict__item--title">
								<p>Tùy biến màu sắc</p>
							</div>
							<div class="quict__item--link">
								<p>
									<span>
										Xem
									</span>
									<i class="fa-solid fa-arrow-right-long quict__item--icon"></i>
								</p>
							</div>
						</a>
					</div>

					<div class="col l-4">
						<a href="#" class="quict__item">
							<div class="quict__item--img">
								<img src="<?php echo plugins_url('/img/code.png', __FILE__) ?>" />
							</div>
							<div class="quict__item--title">
								<p>Chèn code vào Website</p>
							</div>
							<div class="quict__item--link">
								<p>
									<span>
										Xem
									</span>
									<i class="fa-solid fa-arrow-right-long quict__item--icon"></i>
								</p>
							</div>
						</a>
					</div>

					<div class="col l-4">
						<a href="#" class="quict__item">
							<div class="quict__item--img">
								<img src="<?php echo plugins_url('/img/css.png', __FILE__) ?>" />
							</div>
							<div class="quict__item--title">
								<p>Thay đổi CSS</p>
							</div>
							<div class="quict__item--link">
								<p>
									<span>
										Xem
									</span>
									<i class="fa-solid fa-arrow-right-long quict__item--icon"></i>
								</p>
							</div>
						</a>
					</div>

				</div>
			</div>

		</div>
	</div>


	<div>
		<div class="wrap-content__noBG pd-20">
			<div class="slider">
				<div class="slider-wrap">
					<div class="slider-main">
						<?php if (!empty($decode)) {
							foreach ($decode as $item) {
						?>
								<div class="slider-item">
									<img src=<?php echo $item->guid->rendered ?> alt="" class="slieder-img">
								</div>
						<?php }
						} ?>
					</div>
				</div>
				<div class="btn btn-icon prev-btn">
					<i class="fa-solid fa-arrow-left-long icon icon-slider icon-slider-left"></i>
				</div>
				<div class="btn btn-icon next-btn">
					<i class="fa-solid fa-arrow-right-long icon icon-slider icon-slider-right"></i>
				</div>
				<div class="doct-slider">
					<ul class="list-doct">
						<?php if (!empty($decode)) {
							foreach ($decode as $key => $item) {
						?>
								<li data-index="<?php echo $key ?>" class="doct-item <?php if ($key == 0) echo 'active' ?>"></li>
						<?php }
						} ?>

					</ul>
				</div>
			</div>



		</div>
	</div>

	<!-- <div class="wrap-content__noBG pd-20">
		<div class="banner__item">
			<img src="https://duynh404.cf/api/files/view/ip14-pro-2880-80002-1920x533_1672068638.png" />

		</div>
	</div> -->

	<div class="wrap-content__noBG pd-20">
		<div class="grid">
			<div class="row">

				<div class="col l-6">
					<div class="title__col">
						<h3>
							Thông tin liên hệ
						</h3>
					</div>
					<div href="#" class="noti__col--item">
						<div href="#" class="noti__col--content">
							<p>AME Digital trực thuộc Công ty CP Đầu tư công nghệ và Chuyển đổi số AlphaGroup.</p>
							<p>AME Digital trực thuộc Công ty CP Đầu tư công nghệ và Chuyển đổi số AlphaGroup.</p>
						</div>
					</div>
				</div>
				<div class="col l-6">
					<div class="title__col">
						<h3>
							Theo dõi chúng tôi
						</h3>
					</div>
					<div href="#" class="noti__col--item">
						<div href="#" class="noti__col--content">

						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

</div>

<footer>
	<script type="text/javascript">
		window.addEventListener('load', function() {
			const $ = document.querySelector.bind(document);
			const $$ = document.querySelectorAll.bind(document);
			const slider = $('.slider');
			const sliderMain = $('.slider-main');
			const nextBtn = $('.next-btn');
			const prevBtn = $('.prev-btn');
			const sliderItems = $$('.slider-item');
			const doctItem = $$('.doct-item');
			let positionX = 0;
			let index = 0;

			const sliderItemWidth = sliderItems[0].offsetWidth;
			const slidersItemLenght = sliderItems.length;
			const slidersLenght = sliderItemWidth * slidersItemLenght;



			nextBtn.onclick = function() {
				nextSlider();
			}

			prevBtn.onclick = function() {
				prevSlider();
			}

			setInterval(function() {
				nextSlider();
			}, 3000);

			sliderItems.forEach(function(sliderItem) {
				sliderItem.onclick = function() {
					nextSlider();
				}
			})

			doctItem.forEach(function(e) {
				e.onclick = function() {
					let docActive = Number(e.dataset.index);
					positionX = (-(docActive * sliderItemWidth) + sliderItemWidth);
					index = docActive - 1;
					nextSlider();
					console.log(positionX, index)
				}

			})

			function nextSlider() {
				index++;
				positionX -= sliderItemWidth;
				if (index >= slidersItemLenght) {
					index = 0;
					positionX = 0;
				}
				dotActiveSlider();
				sliderMain.style.transform = `translateX(${positionX}px)`;

			}

			function prevSlider() {
				index--;
				positionX += sliderItemWidth;
				if (index < 0) {
					index = slidersItemLenght - 1;
					positionX = -(slidersLenght - sliderItemWidth);
				}
				dotActiveSlider();
				sliderMain.style.transform = `translateX(${positionX}px)`;
			}

			function dotActiveSlider() {
				doctItem.forEach(function(e) {
					let docActive = Number(e.dataset.index);
					if (index === (docActive)) {
						$('.doct-item.active').classList.remove('active');

						e.classList.add('active')
					}

				})
			}
		})
	</script>
</footer>

<?php include(ABSPATH . 'wp-admin/admin-footer.php');
