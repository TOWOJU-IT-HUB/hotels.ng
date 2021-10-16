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

                            <div class="form-row">
                                <div class="col mb-2">
                                    <div class="filter-action pl-2" id="menu_post_type" data-active="apartment">
                                        <a href="#!" id="post_type_all" class="mr-2"><?= lang('text.all') ?></a>
                                        <a href="#!" id="post_type_apartment" class="mr-2 text-primary font-weight-bold"><?= lang('text.apartment') ?></a>
                                        <a href="#!" id="post_type_space" class="mr-2"><?= lang('text.space') ?></a>
                                        <a href="#!" id="post_type_car" class="mr-2"><?= lang('text.car') ?></a>
                                        <a href="#!" id="post_type_hotel" class="mr-2"><?= lang('text.hotel') ?></a>
                                        <a href="#!" id="post_type_beauty" class="mr-2"><?= lang('text.beauty') ?></a>
                                        <a href="#!" id="post_type_tour" class="mr-2"><?= lang('text.tour') ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php $k=1; while($k < 10): ?>
                        <div class="col-sm-4 col-xl-3  col-lg-3">
                            <div class="card text-white pl-3" style="min-height: 250px">
                                <div class="card-body">
                                    //
                                </div>
                            </div>
                        </div>
                        <?php $k++; endwhile ?>
                    </div>
                    <!-- end col -->
                </div>

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->