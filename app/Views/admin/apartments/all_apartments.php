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
                                                <?= $earning_type ? $earning_type : ucwords(lang('text.all_apartment')) ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="col mb-2">
                                    <div class="filter-action pl-2" id="menu_apartment_type" data-active="apartment">
                                        <a href="<?= route_to('admin.all_apartments') ?>" id="apartment_type_all" class="mr-2 <?php if ($uri->getSegment(3) == null) { echo " text-primary font-weight-bold"; } ?>">All</a>
                                        <a href="<?= route_to('admin.all_apartments') . '/published' ?>" id="apartment_type_apartment" data-query="status" class="mr-2 <?php if ($uri->getSegment(3) == "published") {  echo " text-primary font-weight-bold";  } ?>">Published</a>
                                        <a href="<?= route_to('admin.all_apartments') . '/draft' ?>" id="apartment_type_space" data-query="status" class="mr-2 <?php if ($uri->getSegment(3) == "draft") { echo " text-primary font-weight-bold"; } ?>">Draft</a>
                                        <a href="<?= route_to('admin.all_apartments') . '/pending' ?>" id="apartment_type_space" data-query="status" class="mr-2 <?php if ($uri->getSegment(3) == "pending") { echo " text-primary font-weight-bold"; } ?>">Pending</a>
                                    </div>
                                </div>
                            </div>

                            <table id="datatable" class="table table-striped dt-responsive nowrap" style="bearning-collapse: collapse; bearning-spacing: 0; width: 100%;">
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
                                    foreach ($apartments as $apartment) : ?>
                                        <tr>
                                            <td class="text-muted">#<?= $i++ ?></td>
                                            <td>
                                                <div class="media">
                                                    <img class="d-flex align-self-start rounded mr-3" src="https://themesdesign.in/zegva/layouts/vertical/assets/images/users/user-5.jpg" alt="" height="64">
                                                    <div class="media-body">
                                                        <h5 class="mt-3 font-14"><?= $apartment['title'] ?></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <?= $apartment['categories'] ?>
                                            </td>
                                            <td><?= $apartment['price'] ?></td>
                                            <td><?= $apartment['status'] ?></td>

                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-center" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="h3">...</span>
                                                    </a>
                                                    <?php $apartment_id = $apartment['id'] ?>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href="<?= route_to('blog').$apartment_id ?>">View</a>
                                                        <a class="dropdown-item" href="<?= route_to('apartment_edit').$apartment_id ?>">Edit</a>
                                                        <a class="dropdown-item" href="<?= route_to('admin.all_apartments').'/delete/'.$apartment_id ?>">Delete</a>
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