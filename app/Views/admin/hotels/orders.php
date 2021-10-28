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

                            <!-- <div class="form-row">
                                <div class="col mb-2">
                                    <div class="filter-action pl-2" id="menu_post_type" data-active="apartment">
                                        <a href="#!" id="post_type_all" class="mr-2">All</a>
                                        <a href="#!" id="post_type_apartment" class="mr-2 text-primary font-weight-bold">Apartment</a>
                                        <a href="#!" id="post_type_space" class="mr-2">Space</a>
                                        <a href="#!" id="post_type_car" class="mr-2">Car</a>
                                        <a href="#!" id="post_type_hotel" class="mr-2">Hotel</a>
                                        <a href="#!" id="post_type_beauty" class="mr-2">Beauty</a>
                                        <a href="#!" id="post_type_tour" class="mr-2">Tour</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control bg-light border-light" value="" type="text" name="search" placeholder="Search..." autocomplete="off">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">search</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-2">

                                    <div class="input-group input-group-sm">
                                        <select name="payment_status" id="filter_status" class="custom-select bg-light border-light">
                                            <option value="hotel" selected="">Filter by Status</option>
                                            <option value="refund_request">Refund request</option>
                                            <option value="payment_confirmation">Payment Confirmation</option>
                                            <option value="unfinished">Unfinished</option>
                                            <option value="complete">Complete</option>
                                            <option value="cancelled">Cancelled</option>
                                            <option value="refunded">Refunded</option>
                                            <option value="incomplete">Incomplete</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Filter</button>
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                            <hr>

                            <table class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Service</th>
                                        <th>Number</th>
                                        <th>Booking</th>
                                        <th>Total</th>
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
                                            <td><?= ucwords($order['services']) ?></td>
                                            <td><?= $order['quantity'] ?></td>
                                            <td><?= $order['booking_from'] . ' to ' . $order['booking_to'] ?></td>
                                            <td><?= $order['total'] ?></td>
                                            <td>
                                                <?php if($order['status'] == '0'): ?>
                                                    <span class="order-status"><span class="badge badge-info">Incomplete</span></span>
                                                <?php else: ?>
                                                    <span class="order-status"><span class="badge badge-warning">Completed</span></span>
                                                <?php endif ?>
                                            </td>
                                            <td><?= $order['date'] ?></td>
                                            <td>
                                                <div class="btn-group"><?php $order_id = $order['id'] ?>

                                                    <button type="button" class="btn btn-warning gmz-open-modal" data-remote="<?= route_to('admin.order') . "/$order_id" ?>" data-target="#theModal" data-toggle="modal">
                                                        Details
                                                    </button>

                                                    <button type="button" class="btn btn-outline-warning btn-sm " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu" style="will-change: transform;">
                                                        <a class="dropdown-item btnChangeStatus" href="javascript:void(0);" data-action="#" data-params="#" data-change-status="cancelled">
                                                            Cancel order
                                                        </a>
                                                        <a class="dropdown-item btnChangeStatus" href="javascript:void(0);" data-action="#" data-params="#" data-change-status="refunded">
                                                            Refunded
                                                        </a>
                                                        <a class="dropdown-item btnChangeStatus" href="javascript:void(0);" data-action="#" data-params="#" data-change-status="complete">
                                                            Complete
                                                        </a>
                                                        <a class="dropdown-item btnChangeStatus" href="javascript:void(0);" data-action="#" data-params="#" data-change-status="incomplete">
                                                            Incomplete
                                                        </a>
                                                    </div>
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