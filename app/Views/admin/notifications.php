<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="page-title-box">
            </div>
            <!-- // Page contents starts here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="pl-2">
                                                <?php $notification_type = session()->get('notification_type'); ?>
                                                <?= $notification_type ? $notification_type : "My notifications" ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-striped dt-responsive nowrap" style="bnotification-collapse: collapse; bnotification-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($notifications as $notification) : ?>
                                        <tr>
                                            <td class="text-muted">#<?= $i++ ?></td>
                                            <td><?= ucwords($notification['title']) ?></td>
                                            <td><?= $notification['message'] ?></td>
                                            <td><?= $notification['status'] ?></td>
                                            <td><?= $notification['created_at'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- end col -->
                </div>

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->