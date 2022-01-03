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
                                                <?php $order_type = session()->get('order_type'); ?>
                                                <?= $order_type ? $order_type : "My Orders" ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <table class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Service</th>
                                        <th>Number</th>
                                        <th>Booking</th>
                                        <th>Total Paid</th>
                                        <th>Amount Due</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($orders as $order) : ?>
                                        <tr>
                                            <td class="text-muted">#<?= $i++ ?></td>
                                            <td><?= ucwords($order['firstname'].' '.$order['lastname']) ?></td>
                                            <td><?= $order['number'] ?></td>
                                            <td><?= $order['checkin'] . ' to ' . $order['checkout'] ?></td>
                                            <td><?= $order['currency']. number_format($order['total_paid'], 2) ?></td>
                                            <td><?= $order['currency']. number_format($order['total'], 2) ?></td>
                                            <td>
                                                <?php if($order['status'] == 'pending' || $order['status'] == NULL): ?>
                                                    <span class="order-status"><span class="badge badge-info">Incomplete</span></span>
                                                <?php else: ?>
                                                    <span class="order-status"><span class="badge badge-warning">Completed</span></span>
                                                <?php endif ?>
                                            </td>
                                            <td><?= $order['created_at'] ?></td>
                                            <td>
                                                <div class="btn-group"><?php $order_id = $order['id'] ?>

                                                    <button type="button" class="btn btn-warning gmz-open-modal" data-remote="<?= route_to('admin.order') . "/$order_id" ?>" data-target="#theModal" data-toggle="modal">
                                                        Details
                                                    </button>

                                                    <a href='<?= base_url("admin/mark_as_paid/$order_id") ?>'><button type="button" class="btn btn-danger gmz-open-modal">
                                                        Mark as Paid
                                                    </button></a>
                                                </div>
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