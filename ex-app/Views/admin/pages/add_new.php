    <!-- Summernote css -->
    <link href="<?= base_url('dashboard/plugins/summernote/summernote-bs4.css') ?>" rel="stylesheet" />

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">
                <div class="page-title-box">

                    <div class="row align-items-center ">
                    </div>
                </div>
                <!-- end page-title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?= form_open() ?>
                                <div class="form-group">
                                    <label class="text-muted"><?= lang('text.title') ?></label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted"><?= lang('text.permalink') ?></label>
                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                        <span class="bootstrap-touchspin-prefix input-group-prepend">
                                            <span class="input-group-text"><?= base_url().'/page/' ?></span>
                                        </span><input type="text" name="slug" value="<?= "new-post-" . uniqid() ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted"><?= lang('text.content') ?></label>
                                    <textarea class="summernote" name="body" required id="summernote"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Status</label>
                                    <select name="status" class="form-control col-md-4">
                                        <option value="published"><?= lang('text.published') ?></option>
                                        <option value="draft"><?= lang('text.draft') ?></option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-info btn-md"><?= lang('text.save') ?></button>
                                </div>
                                <div class="clearfix"></div>
                                <?= form_close() ?>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->
