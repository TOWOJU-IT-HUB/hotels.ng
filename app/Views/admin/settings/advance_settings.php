<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <style type="text/css" media="screen">
        #ace_editor {
            margin: 0;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
    <?php $uri = service('uri') ?>
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
            </div>
            <!-- end page-title -->
            <div class="row card card-body">
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
                    <style>
                        .CodeMirror {
                            border: 1px solid black;
                            font-size: 13px
                        }
                    </style>
                    <!-- Right Sidebar -->
                    <div class="email-rightbar mb-3">
                        <div class="card">
                            <div class="card-body text-left col-8 mb-5">
                                <!-- // main contents goes here -->
                                <?= form_open() ?>
                                <div class="form-group">
                                    <label class="text-muted">Site Language</label>
                                    <select class="form-control" name="site_language">
                                        <option selected>Site Language</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Mapbox Token</label>
                                    <textarea name="mapbox" value="<?= conf['mapbox'] ?>" placeholder="hsbGp3eGUwMXZ5M3VvM2NteXIyam9nIn0.ysDAJn41bgYT21EJihW0Hw" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Email Password</label>
                                    <input type="text" name="email_password" value="<?= conf['email_password'] ?>" placeholder="MyPassword101@!" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Email Port</label>
                                    <input type="text" name="email_port" value="<?= conf['email_port'] ?>" placeholder="465" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Email Encryption</label>
                                    <input type="text" name="email_enc" value="<?= conf['email_enc'] ?>" placeholder="SSL or TLS" class="form-control">
                                </div>

                                <p class="h5 text-muted mb-3 mt-5">Social Login</p>
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="facebook-tab" data-toggle="tab" href="#facebook" role="tab" aria-controls="facebook" aria-selected="true">Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="google-tab" data-toggle="tab" href="#google" role="tab" aria-controls="google" aria-selected="false">Google</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="myTabContent">
                                    <div class="tab-pane fade show active" id="facebook" role="tabpanel" aria-labelledby="facebook-tab">
                                        <!-- // Tab one. for settings -->
                                        <div class="col">
                                            <div class="m-3"></div>
                                            <div class="form-group">
                                                <label class="text-muted">App ID</label>
                                                <input type="text" name="facebook_app_id" value="<?= conf['facebook_app_id'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted">App Secret</label>
                                                <input type="text" name="facebook_app_secret" value="<?= conf['facebook_app_secret'] ?>"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted">Callback URL</label>
                                                <input type="text" maxlength="100" placeholder="<?= base_url('callback/facebook') ?>" value="<?= conf['facebook_callback'] ?>" name="facebook_callback" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="google" role="tabpanel" aria-labelledby="google-tab">
                                        <!-- // tab 3 for custom css -->
                                        <div class="col">
                                            <div class="m-3"></div>
                                            <div class="form-group">
                                                <label class="text-muted">Client ID</label>
                                                <input type="text" name="google_app_id" value="<?= conf['google_app_id'] ?>"  class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted">Client Secret</label>
                                                <input type="text" name="google_app_secret" value="<?= conf['google_app_secret'] ?>"  class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted">Callback Url</label>
                                                <input type="text" maxlength="100" placeholder="<?= base_url('callback/google') ?>" value="<?= conf['google_callback'] ?>"  name="google_callback" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-3"></div>
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