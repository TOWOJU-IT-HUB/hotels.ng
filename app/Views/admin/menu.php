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
                                                <?= ucwords("Menu's") ?>
                                            </h4>
                                            <button class="btn btn-info btn-md" type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target=".bs-example-modal-center">Add New menu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table id="datatable" class="table table-striped dt-responsive nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th><?= lang('text.title') ?></th>
                                        <th>URI</th>
                                        <th>Location</th>
                                        <th><?= lang('text.status') ?></th>
                                        <th><?= lang('text.action') ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($menus as $menu) : ?>
                                        <tr>
                                            <td class="text-muted">#<?= $i++ ?></td>
                                            <td>
                                                <h5 class="mt-3 font-14"><?= $menu['title'] ?></h5>
                                            </td>
                                            <td><?= $menu['url'] ?></td>
                                            <td>Column <?= $menu['location'] ?></td>
                                            <td><?= $menu['status'] ?></td>

                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-center" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="h3">...</span>
                                                    </a>
                                                    <?php $menu_id = $menu['id'] ?>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <!-- <a class="dropdown-item" data-remote="<?= base_url("home/edit_menu/$menu_id") ?>" data-target="#theModal" data-toggle="modal" href=""><?= lang('text.edit') ?></a> -->
                                                        <a class="dropdown-item" href="<?= base_url('admin/menu') . '/delete/' . $menu_id ?>"><?= lang('text.delete') ?></a>
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
                        <h5 class="modal-title mt-0"><?= lang('text.add_new') ?> <?= lang('text.menu') ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open() ?>
                        <div class="form-group">
                            <label class="text-muted"><?= lang('text.title') ?></label>
                            <input type="text" name="title" class="form-control" placeholder="Contact Us">
                        </div>
                        <div class="form-group">
                            <label class="text-muted"><?= lang('text.url') ?></label>
                            <input type="text" name="url" class="form-control" placeholder="https://weotrip.com/contact-us">
                        </div>
                        <div class="form-group">
                            <label class="text-muted"><?= lang('text.location') ?></label>
                            <select name="location" class="form-control">
                                <option value="1">Column 1</option>
                                <option value="2">Column 2</option>
                                <option value="3">Column 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-muted"><?= lang('text.status') ?></label>
                            <select name="status" class="form-control">
                                <option value="active">Published</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><?= lang('text.close') ?></span>
                            </button>
                            <button type="submit" id="addmenu" class="btn btn-info"><?= lang('text.save') ?></button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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