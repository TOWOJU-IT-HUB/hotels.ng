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
                            
                            <a href="<?= route_to('booking_settings') ?>" class="<?php if ($uri->getSegment(2) == "booking_settings") {
                                                                                        echo 'active';
                                                                                    } ?>"> <?= lang('text.booking_settings') ?> </a>
                            
                            
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
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#blog" role="tab" aria-controls="profile" aria-selected="false">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="profile" aria-selected="false">Contact Us</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- // Tab one. for settings -->
                                        <div class="col-md-8">
                                            <?= form_open() ?>
                                            <a style="color: blue;" href="<?= base_url() ?>"><b> Visit page </b>: <?= base_url() ?></a>
                                            <div class="m-3"></div>
                                            <div class="form-group">
                                                <label class="text-muted">Text on slider</label>
                                                <input type="text" name="site_title" value="<?= conf['slider_text'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted">Slider</label>
                                                <input type="file" name="slider" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted">Site Logo</label>
                                                <input type="file" name="site_logo" class="form-control">
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-info btn-sm" style="min-width: 150px;"><?= lang('text.save') ?></button>
                                            </div>
                                            <?= form_close() ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- // tab 3 for custom css -->
                                        <?= form_open() ?>
                                        <a style="color: blue;" href="<?= base_url() ?>/blog"><b> Visit page </b>: <?= base_url() ?>/blog</a>
                                        <div class="m-3"></div>
                                        <div class="form-group">
                                            <label class="text-muted">Feature Image On Blog Page</label>
                                            <input type="file" name="blog_featured_image" class="form-control">
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-info btn-sm" style="min-width: 150px;"><?= lang('text.save') ?></button>
                                        </div>
                                        <?= form_close() ?>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- // tab 3 for custom css -->
                                        <div class="col-md-8">
                                            <?= form_open() ?>
                                            <a style="color: blue;" href="<?= base_url() ?>/contact_us"><b> Visit page </b>: <?= base_url() ?>/contact_us</a>
                                            <div class="m-3"></div>
                                            <div class="form-group">
                                                <label class="text-muted">Feature Image On Contact us Page</label>
                                                <input type="file" name="contact_us_featured_image" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted">Heading</label>
                                                <input type="text" name="contact_us_heading" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted">Description</label>
                                                <textarea name="contact_us_desc" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted">Address</label>
                                                <input type="text" name="contact_us_address" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted">Phone Number</label>
                                                <input type="number" name="contact_us_phone" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted">Email</label>
                                                <input type="email" name="contact_us_email" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted">Latitude</label>
                                                <input type="text" maxlength="50" name="contact_us_latitude" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted">Longitude</label>
                                                <input type="text" maxlength="50" name="contact_us_longitude" class="form-control">
                                            </div>

                                            <div class="text-center">
                                                <button class="btn btn-info btn-sm" style="min-width: 150px;"><?= lang('text.save') ?></button>
                                            </div>
                                            <?= form_close() ?>
                                        </div>
                                    </div>
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