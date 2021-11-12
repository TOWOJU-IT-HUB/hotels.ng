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
                                                <?php $withdrawal_type = session()->get('user_type'); ?>
                                                <?= $withdrawal_type ? $withdrawal_type : "My withdrawals" ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table class="table dt-responsive nowrap" style="bwithdrawal-collapse: collapse; bwithdrawal-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Created at</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($withdrawals as $withdrawal) : ?>
                                        <tr>
                                            <td class="text-muted">#<?= $i++ ?></td>
                                            <td><?= ucwords($withdrawal['fullname']) ?></td>
                                            <td><?= $withdrawal['email'] ?></td>
                                            <td>$<?= number_format($withdrawal['amount'], 2) ?></td>
                                            <td><?= $withdrawal['created_at'] ?></td>
                                            <td><?= $withdrawal['status'] ?></td>
                                            <td class="text-center">
                                                <div class="btn-group"><?php $withdrawal = $withdrawal['id'] ?>

                                                    <button type="button" class="btn btn-warning gmz-open-modal" data-remote="<?= base_url("home/withdrawal/$withdrawal") ?>" data-target="#theModal" data-toggle="modal">
                                                        Details
                                                    </button>

                                                    <button type="button" class="btn btn-outline-warning btn-sm " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu" style="will-change: transform;">
                                                        <a class="dropdown-item btnChangeStatus" onclick="accept()" href="javascript:void(0);" data-action="#" data-params="#" data-change-status="refunded">
                                                            Accept
                                                        </a>
                                                        <a class="dropdown-item btnChangeStatus" onclick="cancel()" href="javascript:void(0);" data-action="#" data-params="#" data-change-status="cancelled">
                                                            Cancel
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Created at</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                    <!-- end col -->
                </div>

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->

        <!-- Modal -->
        <div class="modal fade" id="theModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="https://c.tenor.com/gJLmlIn6EvEAAAAC/loading-gif.gif" alt="Loading">
                    </div>
                </div>
            </div>
        </div>

        <script>
            function accept(){
                alert("You click accept withdrawal");
            }
            function cancel(){
                alert("You click cancel withdrawal");
            }
        </script>