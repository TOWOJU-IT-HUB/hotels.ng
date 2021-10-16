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
                                                <?= ucwords("Post Tags") ?>
                                            </h4>
                                            <button class="btn btn-info btn-md" type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target=".bs-example-modal-center"><?= lang('text.add_new') .' '. lang('text.tags') ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table id="datatable" class="table table-striped dt-responsive nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th><?= lang('text.tags') ?></th>
                                        <th><?= lang('text.description') ?></th>
                                        <th><?= lang('text.action') ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($tags as $tag) : ?>
                                        <tr>
                                            <td class="text-muted">#<?= $i++ ?></td>
                                            <td>
                                                <h5 class="mt-3 font-14"><?= $tag['title'] ?></h5>
                                            </td>
                                            <td>
                                                <?= $tag['description'] ?>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-center" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        ...
                                                    </a>
                                                    <?php $tag_id = $tag['id'] ?>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href="<?= route_to('tag_edit') . $tag_id ?>"><?= lang('text.edit') ?></a>
                                                        <a class="dropdown-item" href="<?= route_to('admin.post_tagegory') . '/delete/' . $tag_id ?>"><?= lang('text.delete') ?></a>
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
                        <h5 class="modal-title mt-0"><?= lang('text.add_new') ?> <?= lang('text.tags') ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open() ?>
                        <div class="form-group">
                            <label class="text-muted"><?= lang('text.title') ?></label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-muted"><?= lang('text.description') ?> (optional)</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><?= lang('text.close') ?></span>
                            </button>
                            <button type="button" id="addtagegory" class="btn btn-info"><?= lang('text.save') ?></button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>