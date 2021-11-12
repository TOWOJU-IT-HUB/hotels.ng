<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <?php $uri = service('uri') ?>
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
            </div>
            <!-- end page-title -->
            <div class="row card card-body">
                <div class="col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="general-tab" data-toggle="pill" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="static-page-tab" data-toggle="pill" href="#static-page" role="tab" aria-controls="static-page" aria-selected="false">Static Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contents-types-tab" data-toggle="pill" href="#contents-types" role="tab" aria-controls="contents-types" aria-selected="false">Content Types</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sitemap-tab" data-toggle="pill" href="#sitemap" role="tab" aria-controls="sitemap" aria-selected="false">Sitemap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="webmaster-tools-tab" data-toggle="pill" href="#webmaster-tools" role="tab" aria-controls="webmaster-tools" aria-selected="false">Webmaster Tools</a>
                        </li>
                    </ul>
                    <?= form_open() ?>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <label class="switch">
                                    <p class="text-muted" style="margin-bottom: -4px;">Enable SEO Option</p>
                                    <input type="checkbox" name="booking_review" <?php if(conf['booking_review'] == 'on'){ echo "checked"; } ?> class="primary">
                                    <span class="slider round"></span>
                                </label>
                                <div class="form-group">
                                    <a data-toggle="collapse" href="#!" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <li class="list-group-item">
                                            Title Separator
                                        </li>
                                    </a>
                                    <div class="collapse" id="collapseOne">
                                        <div class="list-group-item">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Robots.txt</label>
                                    <textarea rows="15" class="form-control" name="robot" placeholder="Allow All"></textarea>
                                </div>
                                <p class="mt-3">URL: <?= base_url('robots.txt') ?></p>
                            </div>
                            <div class="tab-pane fade" id="static-page" role="tabpanel" aria-labelledby="static-page-tab">
                                //
                            </div>
                            <div class="tab-pane fade" id="contents-types" role="tabpanel" aria-labelledby="contents-types-tab">
                                //
                            </div>
                            <div class="tab-pane fade" id="sitemap" role="tabpanel" aria-labelledby="contents-types-tab">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <li class="list-group-item">
                                            Enable Sitemap
                                            <label class="switch ">
                                                <input type="checkbox" name="enable_sitemap" <?php if(conf['enable_sitemap'] == 'on'){ echo "checked"; } ?> class="primary">
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        <i class="fas fa-info-circle fa-2x mr-2"></i> <b>Sitemap URL: </b> <a href="<?= base_url('sitemap.xml') ?>"><?= base_url('sitemap.xml') ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="webmaster-tools" role="tabpanel" aria-labelledby="contents-types-tab">
                                <div class="col-lg-8 col-xl-8 col-md-12">
                                    <h5 class="mb-4 mt-4">Webmaster Tools verification</h6>
                                    <div class="form-group">
                                        <label class="text-muted">Google verification code</label>
                                        <input type="text" name="google_verification_code" class="form-control" placeholder="H8a1tah1t6ejCu4QUNMEkUwCSEVxjLc3a-SCfNlIm" value="<?= conf['google_verification_code'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted">Bing verification code</label>
                                        <input type="text" name="bing_verification_code" class="form-control" placeholder="H8a1tah1t6ejCu4QUNMEkUwCSEVxjLc3a-SCfNlI" value="<?= conf['bing_verification_code'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted">Yandex verification code</label>
                                        <input type="text" name="yandex_verification_code" class="form-control" placeholder="H8a1tah1t6ejCu4QUNMEkUwCSEVxjLc3a" value="<?= conf['yandex_verification_code'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted">Baidu verification code</label>
                                        <input type="text" name="baidu_verification_code" class="form-control" placeholder="H8a1tah1t6ejCu4QUNMEkUwCSEVxjLc3a" value="<?= conf['baidu_verification_code'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-info" style="min-width: 150px;" type="submit"><?= lang('text.save') ?></button>
                        </div>
                    <?= form_close() ?>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- container-fluid -->
     </div>