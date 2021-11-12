<div class="site-content">
	<section class="list-hotel list-hotel--grid py-40 bg-gray-100">
		<div class="container">
			<style>
				.hotel_img {
					max-width: 358px;
					max-height: 238px;
				}
			</style>
			<h2 class="section-title mb-20">List Of Hotels</h2>
			<div class="row"> <?php if (!empty($news)) : ?>
					<?php foreach ($news as $key => $rex) : ?>
						<a href="<?= $final_url = 'WE'; ?>">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
									<div class="hotel-item__thumbnail">
										<a href="<?= $final_url ?>">
											<img class="hotel_img" src="<?= base_url($rex['image']) ?>" alt="<?= $rex['title'] ?>" width="358px" height="238px">
										</a>
									</div>
									<div class="hotel-item__details">
										<h3 class="hotel-item__title"><a href="<?= base_url('blog/post/'.$rex['slug']) ?>"><?= $rex['title'] ?></a></h3>
										<div class="d-flex justify-content-between align-items-center">
											<a class="btn btn-primary hotel-item__view-detail" href="<?= $final_url ?>">View Detail </a>
										</div>
									</div>
								</div>
							</div>
						</a>
				<?php endforeach; endif ?>
			</div>
			<div class="row">
				<div class="col-12">
					<?= $pager->simpleLinks() ?>
				</div>
			</div>
		</div>
	</section>
</div>