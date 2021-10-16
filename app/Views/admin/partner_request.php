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
                                                <?php $user_type = session()->get('user_type'); ?>
                                                <?= $user_type ? $user_type : "My users" ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-striped dt-responsive nowrap" style="buser-collapse: collapse; buser-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($users as $user) : ?> 
                                        <tr>
                                            <td class="text-muted">#<?= $i++ ?></td>
                                            <td><?= ucwords($user['lastname'] .' '.$user['firstname']) ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['address'] ?></td>
                                            <td class="text-center strong">
                                                ...
                                            </td>
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