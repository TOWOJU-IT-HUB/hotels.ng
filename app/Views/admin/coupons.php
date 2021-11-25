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
            <?php $uri = service('uri') ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="widget-header mb-3">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="pl-2">
                                                <?= ucwords(lang('text.coupons')) ?>
                                            </h4>
                                            <button class="btn btn-info btn-md" type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target=".bs-example-modal-center">Add New coupon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table id="datatable" class="table table-striped dt-responsive nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th><?= lang('text.code') ?></th>
                                        <th><?= lang('text.discounts') ?></th>
                                        <th><?= lang('text.date_range') ?></th>
                                        <th><?= lang('text.status') ?></th>
                                        <th><?= lang('text.action') ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($coupons as $coupon) : ?>
                                        <tr>
                                            <td class="text-muted">#<?= $i++ ?></td>
                                            <td>
                                                <h5 class="mt-3 font-14"><?= $coupon['code'] ?></h5>
                                            </td>
                                            <td>
                                                <h5 class="mt-3 font-14"><?= number_format($coupon['discount'], 4) ?>%</h5>
                                            </td>
                                            <td>
                                                <?= $coupon['start_date'] .' <i class="fas fa-long-arrow-alt-right mr-2 ml-2"></i> '.$coupon['end_date'] ?>
                                            </td>
                                            <td>
                                                <h5 class="mt-3 font-14"><?= $coupon['status'] ?></h5>
                                            </td>

                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-center" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="h3">...</span>
                                                    </a>
                                                    <?php $coupon_id = $coupon['id'] ?>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href="<?= route_to('admin.post_coupon') . '/delete/' . $coupon_id ?>"><?= lang('text.delete') ?></a>
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
        <!-- content -->

        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0"><?= lang('text.add_new') ?> <?= lang('text.coupons') ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open() ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-muted"><?= lang('text.code') ?></label>
                                    <input type="text" name="code" required maxlength="10" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-muted"><?= lang('text.discounts') ?>(%)</label>
                                    <input type="number" max="100" required name="discount" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-muted"><?= lang('text.description') ?> (optional)</label>
                            <textarea name="description" class="form-control" required rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-muted"><?= lang('text.start_date') ?></label>
                                    <input type="date" name="start_date" required class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-muted"><?= lang('text.end_date') ?></label>
                                    <input type="date" name="end_date" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><?= lang('text.close') ?></span>
                            </button></button>save') ?>
<span class="icon-spinner"><i class="fa fa-spinner load-animate"></i></span> </button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>