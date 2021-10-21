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
                </div>
                <!-- end page-title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?= form_open() ?>
                                <div class="form-group">
                                    <label class="text-muted">Post Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Permalink</label>
                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                        <span class="bootstrap-touchspin-prefix input-group-prepend">
                                            <span class="input-group-text"><?= base_url().'/post/' ?></span>
                                        </span><input type="text" name="slug" value="<?= "new-post-" . uniqid('article') ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Post Content</label>
                                    <textarea class="summernote" name="body" required id="summernote"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Short Description</label>
                                    <textarea class="form-control" rows="6" name="short_desc" required id="summernote"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Status</label>
                                    <select name="status" class="form-control col-md-4">
                                        <option value="published">Published</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="text-muted">Image</label>
                                    <div class="dropzone">
                                        <div class="fallback">
                                            <input name="file" class="" type="file" multiple="multiple">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-sm" style="min-width: 150px;"><?= lang('text.save') ?></button>
                                </div>
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
