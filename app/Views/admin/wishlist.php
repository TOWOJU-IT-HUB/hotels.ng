<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="page-title-box">
            </div>
            <!-- // Page contents starts here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="pl-2">
                                                <?php $order_type = session()->get('order_type'); ?>
                                                <?= $order_type ? $order_type : lang('text.wishlist') ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <?php foreach ($response as $key => $rex) : ?>
                    <?php // http_build_query()
						$es = [
							'hotel_id'		=>	$rex['hotel_id'],
							'data-hotel' 	=> 	$rex['hotel_name'],
							'data-city' 	=> 	$rex['city'],
							'data-country' 	=> 	$rex['country_trans'],
							'data-type' 	=> 	$rex['accommodation_type_name'],
							'ratings'		=> 	$rex['review_score'],
							'checkin'		=> 	$rex['checkin'],
							'checkout'		=> 	$rex['checkout'],
						];
						$es = '?' . http_build_query($es);
						$final_url = route_to('hotels.view') . $es;
						// $final_url = "https://google.com";
						?>
						<a href="<?= $final_url ?>">
                            <div class="col-sm-4 col-xl-3  col-lg-3">
                                <div class="card text-white pl-3" style="min-height: 250px">
                                    <div class="card-body">
                                        <div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
                                            <div class="hotel-item__thumbnail">
                                                <a href="<?= $final_url ?>">
                                                    <img class="hotel_img" src="<?= $rex['hotel_thumbnail'] ?>" alt="<?= $rex['hotel_name'] ?>" width="230px" height="200px">
                                                </a>
                                                <a class="hotel-item__type" href="#!">
                                                    Hotels
                                                </a>
                                            </div>
                                            <div class="hotel-item__details">
                                                <span class="hotel-item__label"><?= $rex['accommodation_type_name'] ?></span>
                                                <div class="hotel-item__rating">
                                                    <div class="star-rating">
                                                        <?php $i = 0;
                                                        $stars = ($rex['review_score'] / 2) ?>
                                                        <?php while ($stars < 5 && $rex['review_score'] != null) : ?>
                                                            <i class="fa fa-star"></i>
                                                        <?php $stars++;
                                                        endwhile ?>
                                                    </div>
                                                </div>
                                                <h5 class="hotel-item__title"><a href="<?= $final_url ?>"><?= $rex['hotel_name'] ?></a></h5>
                                                <p class=" hotel-item__location"><i class="fas fa-map-marker-alt mr-2"></i><?= $rex['city'] . ' ' . $rex['country_trans'] ?> </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="hotel-item__price">
                                                        <span class="_retail"><?= $rex['currency'] . number_format($rex['price'], 2) ?></span><span class="_unit">night</span>
                                                    </div>
                                                    <a class="btn btn-primary hotel-item__view-detail" href="<?= $final_url ?>">View Detail </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach ?>
                    </div>
                    <!-- end col -->
                </div>

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->