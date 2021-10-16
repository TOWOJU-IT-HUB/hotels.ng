<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.13/ace.js" integrity="sha512-OMjy8oWtPbx9rJmoprdaQdS2rRovgTetHjiBf7RL7LvRSouoMLks5aIcgqHb6vGEAduuPdBTDCoztxLR+nv45g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php $uri = service('uri') ?>
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
            </div>
            <!-- end page-title -->
            <div class="row card card-body">
                <div class="col-12">
                    <!-- Left sidebar -->
                    <div class="email-leftbar">
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
                            <div class="card-body text-left">
                                <!-- // main contents goes here -->
                                <?= form_open() ?>
                                <div class="form-group">
                                    <li class="list-group-item">
                                        Enable Post Review
                                        <label class="switch ">
                                            <input type="checkbox" name="post_review" <?php if(conf['post_review'] == 'on'){ echo "checked"; } ?> class="primary">
                                            <span class="slider round"></span>
                                        </label>
                                    </li>
                                </div>
                                <div class="form-group">
                                    <li class="list-group-item">
                                        Enable Service Review
                                        <label class="switch ">
                                            <input type="checkbox" name="service_review" <?php if(conf['service_review'] == 'on'){ echo "checked"; } ?> class="primary">
                                            <span class="slider round"></span>
                                        </label>
                                    </li>
                                </div>
                                <div class="form-group">
                                    <li class="list-group-item">
                                        Need Booking To Review
                                        <label class="switch ">
                                            <input type="checkbox" name="booking_review" <?php if(conf['booking_review'] == 'on'){ echo "checked"; } ?> class="primary">
                                            <span class="slider round"></span>
                                        </label>
                                    </li>
                                </div>
                                <div class="form-group">
                                    <li class="list-group-item">
                                        Need Approve To Publish Review
                                        <label class="switch ">
                                            <input type="checkbox" name="publish_review" <?php if(conf['publish_review'] == 'on'){ echo "checked"; } ?> class="primary">
                                            <span class="slider round"></span>
                                        </label>
                                    </li>
                                </div>
                                <div class="text-center">
                                    <button style="min-width: 150px;" class="btn btn-info" type="submit"><?= lang('text.save') ?></button>
                                </div>
                                <?= form_close() ?>
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
    <style>
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 28px;
            float: right;
        }

        /* Hide default HTML checkbox */
        .switch input {
            display: none;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input.default:checked+.slider {
            background-color: #444;
        }

        input.primary:checked+.slider {
            background-color: #2196F3;
        }

        input.success:checked+.slider {
            background-color: #8bc34a;
        }

        input.info:checked+.slider {
            background-color: #3de0f5;
        }

        input.warning:checked+.slider {
            background-color: #FFC107;
        }

        input.danger:checked+.slider {
            background-color: #f44336;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>