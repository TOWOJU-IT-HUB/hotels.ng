<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <?php $uri = service('uri') ?>
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
            </div>
            <!-- end page-title -->
            <div class="row">
                <div class="col-12">
                    <!-- Left sidebar -->
                    <div class="email-leftbar card">
                        <div class="mail-list">
                            <a href="<?= route_to('general_settings') ?>" class="<?php if ($uri->getSegment(2) == "settings") {
                                                                                        echo 'active';
                                                                                    } ?>"> <?= lang('text.general_settings') ?> </a>
                            <a href="<?= route_to('page_settings') ?>" class="<?php if ($uri->getSegment(2) == "page_settings") {
                                                                                    echo 'active';
                                                                                } ?>"> <?= lang('text.page_settings') ?> </a>
                            <a href="<?= route_to('booking_settings') ?>" class="<?php if ($uri->getSegment(2) == "booking_settings") {
                                                                                        echo 'active';
                                                                                    } ?>"> <?= lang('text.booking_settings') ?> </a>
                            <a href="<?= route_to('services_settings') ?>" class="<?php if ($uri->getSegment(2) == "services_settings") {
                                                                                        echo 'active';
                                                                                    } ?>"> <?= lang('text.services_settings') ?> </a>
                            <a href="<?= route_to('reviews_settings') ?>" class="<?php if ($uri->getSegment(2) == "reviews_settings") {
                                                                                        echo 'active';
                                                                                    } ?>"> <?= lang('text.reviews_settings') ?> </a>
                            <a href="<?= route_to('apperance_settings') ?>" class="<?php if ($uri->getSegment(2) == "apperance_settings") {
                                                                                        echo 'active';
                                                                                    } ?>"> <?= lang('text.apperance_settings') ?> </a>
                            <a href="<?= route_to('email_settings') ?>" class="<?php if ($uri->getSegment(2) == "email_settings") {
                                                                                    echo 'active';
                                                                                } ?>"> <?= lang('text.email_settings') ?> </a>
                            <a href="<?= route_to('advance_settings') ?>" class="<?php if ($uri->getSegment(2) == "advance_settings") {
                                                                                        echo 'active';
                                                                                    } ?>"> <?= lang('text.advance_settings') ?> </a>
                        </div>
                    </div>
                    <!-- End Left sidebar -->
                    <!-- Right Sidebar -->
                    <div class="email-rightbar mb-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- // main contents goes here -->
                                <div class="col-md-8">
                                    <?= form_open() ?>

                                    <div class="m-3"></div>
                                    <div class="form-group">
                                        <label class="text-muted">Default Currency</label>
                                        <input type="text" name="site_title" value="<?= conf['site_currency'] ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted">Tax (%)</label>
                                        <input type="file" name="site_favico" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted">Commission (%)</label>
                                        <input type="file" name="site_logo" class="form-control">
                                    </div>


                                    <div class="mt-4"></div>

                                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                        <?php foreach ($gateway as $pay) : ?>
                                            <li class="nav-item">
                                                <a class="nav-link" id="<?= strtolower(trim($pay['name'])) ?>-tab" data-toggle="tab" href="#<?= strtolower(trim($pay['name'])) ?>" role="tab" aria-controls="<?= strtolower(trim($pay['name'])) ?>" aria-selected="true"><?= ucwords(trim($pay['name'])) ?></a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>

                                    <div class="tab-content mt-4" id="myTabContent">
                                        <?php foreach ($gateway as $pay) : ?>
                                            <div class="tab-panel active" id="<?= strtolower(trim($pay['name'])) ?>" role="tabpanel" aria-labelledby="<?= strtolower(trim($pay['name'])) ?>-tab">
                                                <!-- // Tab one. for settings -->
                                                <div class="col-10">
                                                    <div class="m-3"></div>
                                                    <div class="form-group">
                                                        <label class="text-muted">PayPal Email</label>
                                                        <input type="text" name="paypal_email" value="<?= conf['paypal_email'] ?>" placeholder="example@gmail.com" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-muted">Rapid API Key</label>
                                                        <input type="text" name="rapid_api_key" value="<?= conf['rapid_api_key'] ?>" placeholder="xHkeljwkekeX" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-muted">PayPal Client ID</label>
                                                        <input type="text" name="paypal_client_id" value="<?= $pay['paypal_client_id'] ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-muted">PayPal Client Secrect</label>
                                                        <input type="text" name="paypal_client_secret" value="<?= $pay['paypal_client_secret'] ?>" class="form-control">
                                                    </div>
                                                    <?php /*
                                                    <div class="form-group">
                                                        <label class="text-muted">Public Key</label>
                                                        <input type="text" name="public_key" value="<?= $pay['public_key'] ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-muted">Extra Key 1</label>
                                                        <input type="text" name="<?= strtolower(trim($pay['name'])) ?>_extra_one" value="<?= $pay['extra_one'] ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-muted">Extra Key 2</label>
                                                        <input type="text" name="<?= strtolower(trim($pay['name'])) ?>_extra_two" value="<?= $pay['extra_two'] ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-muted">Logo</label>
                                                        <input type="file" name="<?= strtolower(trim($pay['name'])) ?>_logo" class="form-control">
                                                    </div>
                                                    */ ?>

                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-info btn-sm" style="min-width: 150px;"><?= lang('text.save') ?></button>
                                    </div>
                                    <?= form_close() ?>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                    </div>
                    <!-- end Col-9 -->
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->
    </style>