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
                                                <?= $earning_type ? $earning_type : ucwords(lang('All Room')) ?>
                                            </h4>
                                        </div>
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
                                    foreach ($rooms as $room) : ?>
                                        <tr>
                                            <td class="text-muted"><?= $i++ ?></td>
                                            <td>
                                                <div class="media">
                                                    <img class="d-flex align-self-start rounded mr-3" src="<?= $room['room_image'] ?>" width="64" alt="" height="64">
                                                    <div class="media-body">
                                                        <h5 class="mt-3 font-14"><?= $room['room_name'] ?></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <?= $room['total_rooms'] ?>
                                            </td>
                                            <td><?= number_format($room['price']) ?></td>
                                            <td><?= $room['facilities'] ?></td>

                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-center" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="h3">...</span>
                                                    </a>
                                                    <?php $room_id = $room['id']; $room_name = $room['room_name']; ?>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href='<?= route_to("admin.manage_rooms") . "?room_id=$room_id&room_name=$room_name" ?>''>Manage Room</a>
                                                        <?php /*<a class="dropdown-item" href="<?= route_to('room_edit') . $room_id ?>">Edit</a> */ ?>
                                                        <a class="dropdown-item" href="<?= route_to('admin.all_rooms') . '/delete/' . $room_id ?>">Delete</a>
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
                    url: "<?= route_to('rooms.view') . '/get' ?>",
                    type: 'GET'
                }
            });
        </script>