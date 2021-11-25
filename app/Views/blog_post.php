<?php
$db  = \Config\Database::connect();
$ads = $db->query("SELECT * FROM ads")->getResultArray();
?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<div class="site-content">
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a target="_blank" href="<?= route_to('home') ?>">Home</a></li>
                <li><span><?= ucwords("blog / post/ " . $news['slug']) ?></span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-8 mr-1 mb-5 card card-body">
                <section class="description">
                    <p class="mt-1 mb-3 h3">
                        <?= $news['title'] ?>
                    </p>
                    <div class="text-center mb-3">
                        <img src="<?= base_url("uploads/blog_images/" . $news['image']) ?>" alt="<?= $news['title'] ?>" />
                    </div>
                    <div class="section-content">
                        <p style="text-align: justify">
                            <?= $news['body'] ?>
                        </p>
                    </div>
                </section>
            </div>

            <div class="col-lg-3 mb-5 card card-body">
                <section class="description">
                    <p class="mt-1 h3">
                        <?= "Advertisements" ?>
                    </p>
                    <hr class="mb-3" style="padding-top: 0px; margin-top:0px;">
                    <div class="section-content">
                        <?php foreach ($ads as $ads) : ?>
                            <p style="text-align: justify">
                                <?= $ads['content'] ?>
                            </p>
                        <?php endforeach ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>