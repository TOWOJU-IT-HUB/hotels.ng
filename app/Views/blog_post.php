<?php
    $db      = \Config\Database::connect();
    $ads = $db->query("SELECT * FROM ads")->getResultArray();
?>
<div class="site-content">
    <div class="container p-5">
        <div class="strong h2">
            <?= $news['title'] 
            ?>
        </div>
        <div class="row mt-3">
            <div class="col-8 d-flex justify-content" style="min-height: 300px;">
                <?= $news['body'] ?>
            </div>
            <div class="col-4">
                <!-- // Ads goes here -->
                <?php foreach($ads as $ad): ?>
                    <div class="card">
                        <div class="card-body">
                            hello
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>