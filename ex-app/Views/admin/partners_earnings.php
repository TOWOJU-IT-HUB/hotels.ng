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
                                                <?php $earning_type = session()->get('earning_type'); ?>
                                                <?= $earning_type ? $earning_type : ucwords("My earnings") ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col mb-2">
                                    <div class="filter-action pl-2" id="menu_post_type" data-active="apartment">
                                        <a href="#!" id="post_type_all" class="mr-2">All</a>
                                        <a href="#!" id="post_type_apartment"
                                            class="mr-2 text-primary font-weight-bold">Apartment</a>
                                        <a href="#!" id="post_type_space" class="mr-2">Space</a>
                                        <a href="#!" id="post_type_car" class="mr-2">Car</a>
                                        <a href="#!" id="post_type_hotel" class="mr-2">Hotel</a>
                                        <a href="#!" id="post_type_beauty" class="mr-2">Beauty</a>
                                        <a href="#!" id="post_type_tour" class="mr-2">Tour</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control bg-light bearning-light" value="" type="text"
                                            name="search" placeholder="Search..." autocomplete="off">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">search</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-2">

                                    <div class="input-group input-group-sm">
                                        <select name="payment_status" id="filter_status"
                                            class="custom-select bg-light bearning-light">
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

                            </div>
                            <hr>

                            <table class="table table-striped dt-responsive nowrap"
                                style="bearning-collapse: collapse; bearning-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Total</th>
                                        <th>Net Earnings</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($earnings as $earning) : ?>
                                    <tr>
                                        <td class="text-muted">#<?= $i++ ?></td>
                                        <td><?= ucwords($earning['lastname'] . ' ' . $earning['firstname']) ?></td>
                                        <td><?= $earning['email'] ?></td>
                                        <td><?= COUNTRY_CURRENCY ? COUNTRY_CURRENCY : "USD" . number_format(convertedCurrency($earning['total_eanings'], "USD", COUNTRY_CURRENCY), 2) ?>
                                        </td>
                                        <td><?= COUNTRY_CURRENCY ? COUNTRY_CURRENCY : "USD" . number_format(convertedCurrency($earning['balance'], "USD", COUNTRY_CURRENCY), 2) ?>
                                        </td>
                                        <td><?= COUNTRY_CURRENCY ? COUNTRY_CURRENCY : "USD" . number_format(convertedCurrency($earning['balance'], "USD", COUNTRY_CURRENCY), 2) ?>
                                        </td>
                                        <td class="" style="display: table-cell;">
                                            <?php $partner_id = $earning['partner_id'] ?>
                                            <a href='<?= route_to('admin.analytics')."/$partner_id/" ?>' class="btn btn-outline-info">Analytic</a>
                                            <a href='<?= route_to('admin.withdrawal')."/$partner_id/" ?>' class="btn btn-outline-info">Withdrawal</a>
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