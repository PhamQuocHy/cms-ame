<style>
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

	.l-4 {
		flex: 0 0 33.33333%;
		max-width: 31.33333%;
		margin: 10px 0;
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

	.title {
		padding-top: 20px;
	}

	.title h3 {
		text-transform: capitalize;
		font-weight: 500;
		font-size: 18px;
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
<?php include(ABSPATH . 'wp-admin/admin-footer.php');
