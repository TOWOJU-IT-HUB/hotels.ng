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
                                'hotel_id'        =>    $rex['hotel_id'],
                                'data-hotel'     =>     $rex['hotel_name'],
                                'data-city'     =>     $rex['city'],
                                'data-country'     =>     $rex['country_trans'],
                                'data-type'     =>     $rex['accommodation_type_name'],
                                'ratings'        =>     $rex['review_score'],
                                'checkin'        =>     $rex['checkin'],
                                'checkout'        =>     $rex['checkout'],
                            ];
                            $es = '?' . http_build_query($es);
                            $final_url = route_to('hotels.view') . $es;
                            // $final_url = "https://google.com";
                            ?>
                            <div class="col-md-6 col-xl-3">

                                <!-- Simple card -->
                                <div class="card">
                                    <a target="_blank" href="<?= $final_url ?>">
                                        <img class="card-img-top img-fluid" src="<?= $rex['hotel_thumbnail'] ?>" alt="<?= $rex['hotel_name'] ?>">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title font-16 mt-0"><?= $rex['hotel_name'] ?></h4>
                                        <p class="card-text text-danger h4"><?= COUNTRY_CURRENCY . number_format(convertedCurrency($rex['price'], $rex['currency']), 2) ?></p>
                                        <p class="card-text"><i class="fas fa-map-marker-alt mr-2"></i> <?= $rex['city'] .', '.$rex['country_trans'] ?>.</p>
                                        <a target="_blank" href="<?= $final_url ?>" class="btn btn-outline-info waves-effect waves-light">View Detail </a>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach ?>
                    </div>
                    <!-- end col -->
                </div>

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->