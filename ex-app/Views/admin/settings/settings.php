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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.13/ace.js" integrity="sha512-OMjy8oWtPbx9rJmoprdaQdS2rRovgTetHjiBf7RL7LvRSouoMLks5aIcgqHb6vGEAduuPdBTDCoztxLR+nv45g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                    <style>
                        .CodeMirror {
                            border: 1px solid black;
                            font-size: 13px
                        }
                    </style>
                    <!-- Right Sidebar -->
                    <div class="email-rightbar mb-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- // main contents goes here -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Styling</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- // Tab one. for settings -->
                                        <div class="col-md-8">
                                            <?= form_open() ?>
                                            <div class="form-group">
                                                <label class="text-muted">Site Title</label>
                                                <input type="text" name="site_title" value="<?= conf['site_title'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted">Site Description</label>
                                                <textarea name="site_desc" class="form-control" rows="4"><?= conf['site_desc'] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted">Admin User</label>
                                                <select name="admin_user" class="form-control">
                                                    <option value="" selected disabled>Admin User</option>
                                                    <option value="">Null</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted">Site Favicon</label>
                                                <input type="file" name="site_favico" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted">Site Logo</label>
                                                <input type="file" name="site_logo" class="form-control">
                                            </div>
                                            <div class="control-group fileupload" id="file-upload1">
                                                <div class="image-box text-center">
                                                    <p>Upload Image</p>
                                                    <img src="" alt="">
                                                </div>
                                                <div class="controls" style="display: none;">
                                                    <input type="file" name="contact_image_1" />
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-info btn-sm" style="min-width: 150px;"><?= lang('text.save') ?></button>
                                            </div>
                                            <?= form_close() ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- // tab 3 for custom css -->
                                        <?= form_open() ?>
                                        <div class="form-group">
                                            <label class="text-muted">Custom CSS</label>
                                            <textarea id="ace_editor" rows="15" name="custom_css" rows="4"><?= conf['custom_css'] ?></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-info btn-sm" style="min-width: 150px;"><?= lang('text.save') ?></button>
                                        </div>
                                        <?= form_close() ?>
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