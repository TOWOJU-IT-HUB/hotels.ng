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
                                                <?php $earning_type = session()->get('earning_type'); ?>
                                                <?= $earning_type ? $earning_type : ucwords(lang('text.all_hotel')) ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="col mb-2">
                                    <div class="filter-action pl-2" id="menu_hotel_type" data-active="hotel">
                                        <a href="<?= route_to('admin.all_hotels') ?>" id="hotel_type_all" class="mr-2 <?php if ($uri->getSegment(3) == null) {
                                                                                                                            echo " text-primary font-weight-bold";
                                                                                                                        } ?>">All</a>
                                        <a href="<?= route_to('admin.all_hotels') . '/published' ?>" id="hotel_type_hotel" data-query="status" class="mr-2 <?php if ($uri->getSegment(3) == "published") {
                                                                                                                                                                echo " text-primary font-weight-bold";
                                                                                                                                                            } ?>">Published</a>
                                        <a href="<?= route_to('admin.all_hotels') . '/draft' ?>" id="hotel_type_space" data-query="status" class="mr-2 <?php if ($uri->getSegment(3) == "draft") {
                                                                                                                                                            echo " text-primary font-weight-bold";
                                                                                                                                                        } ?>">Draft</a>
                                        <a href="<?= route_to('admin.all_hotels') . '/pending' ?>" id="hotel_type_space" data-query="status" class="mr-2 <?php if ($uri->getSegment(3) == "pending") {
                                                                                                                                                                echo " text-primary font-weight-bold";
                                                                                                                                                            } ?>">Pending</a>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-striped" style="bearning-collapse: collapse; bearning-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($hotels as $hotel) : ?>
                                        <tr>
                                            <td class="text-muted"><?= $i++ ?></td>
                                            <td>
                                                <div class="media">
                                                    <img class="d-flex align-self-start rounded mr-3" src="<?= $hotel['hotel_thumbnail'] ?>" width="64" alt="" height="64">
                                                    <div class="media-body">
                                                        <h5 class="mt-3 font-14"><?= $hotel['hotel_name'] ?></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <?= $hotel['accommodation_type_name'] ?>
                                            </td>
                                            <td><?= $hotel['currencycode'] . number_format($hotel['min_total_price']) ?></td>
                                            <td><?= $hotel['status'] ?></td>

                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-center" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="h3">...</span>
                                                    </a>
                                                    <?php $hotel_id = $hotel['hotel_id'] ?>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href="<?= route_to('hotels.view') . '?hotel_id=' . $hotel_id ?>">View</a>
                                                        <?php /*<a class="dropdown-item" href="<?= route_to('hotel_edit') . $hotel_id ?>">Edit</a> */ ?>
                                                        <a class="dropdown-item" href="<?= route_to('admin.all_hotels') . '/delete/' . $hotel_id ?>">Delete</a>
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

        <script>
            $('#example').DataTable({
                serverSide: true,
                ajax: {
                    url: "<?= route_to('hotels.view') . '/get' ?>",
                    type: 'GET'
                }
            });
        </script>