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
                                            <!-- <a href='<?= route_to('admin.analytics')."/$partner_id/" ?>' class="btn btn-outline-info">Analytic</a> -->
                                            <a href='<?= route_to('admin.withdrawal')."/$partner_id/" ?>' class="btn btn-outline-info">Withdrawals</a>
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