<div class="site-content">
    <section class="list-hotel list-hotel--grid py-40 bg-gray-100">
        <div class="container">
            <style>
                .hotel_img {
                    max-width: 358px;
                    max-height: 238px;
                }
            </style>
            <h2 class="section-title mb-5">Search Reasult.</h2>
            <div class="row"> <?php if (!empty($response)) : ?>
                    <?php foreach ($response as $key => $rex) : ?>
                        <?php // http_build_query()
                                        $es = [
                                            'hotel_id'        =>    $rex['hotel_id'],
                                            // 'data-hotel' 	=> 	$rex['hotel_name'],
                                            // 'data-city' 	=> 	$rex['city'],
                                            // 'data-country' 	=> 	$rex['country_trans'],
                                            // 'data-type' 	=> 	$rex['accommodation_type_name'],
                                            // 'ratings'		=> 	$rex['review_score'],
                                            // 'checkin'		=> 	$rex['checkin'],
                                            // 'checkout'		=> 	$rex['checkout'],
                                        ];
                                        $es = '?' . http_build_query($es);
                                        $final_url = route_to('hotels.view') . $es;
                                        // $final_url = "https://google.com";
                        ?>
                        <a href="<?= $final_url ?>">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
                                    <div class="hotel-item__thumbnail">

                                        <div class="add-wishlist-wrapper">
                                            <a href='#gmz-login-popup' id="wishModal" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"></a>
                                            <a onclick="addWishlist($(this).data('hotel_id'))" class="add-wishlist gmz-box-popup" data-hotel_id="<?= $rex['hotel_id'] ?>" data-effect="mfp-zoom-in">
                                                <i class="fal fa-heart"></i>
                                            </a>
                                        </div>

                                        <a href="<?= $final_url ?>">
                                            <img class="hotel_img" src="<?= str_replace('max1280x900', '358x238', $rex['hotel_thumbnail']) ?>" alt="<?= $rex['hotel_name'] ?>" width="358px" height="238px">
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
                                        <h3 class="hotel-item__title"><a href="<?= $final_url ?>"><?= $rex['hotel_name'] ?></a></h3>
                                        <p class=" hotel-item__location"><i class="fas fa-map-marker-alt mr-2"></i><?= $rex['city'] . ' ' . $rex['country_trans'] ?> </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="hotel-item__price">
                                                <span class="_retail"><?= COUNTRY_CURRENCY . number_format(convertedCurrency($rex['min_total_price'], $rex['currencycode']), 2) ?></span>
                                                <span class="_unit">night</span>
                                            </div>
                                            <a class="btn btn-primary hotel-item__view-detail" href="<?= $final_url ?>">View Detail </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                <?php endforeach;
                                endif ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <?= $pager->simpleLinks() ?>
                </div>
            </div>
        </div>
    </section>
</div>