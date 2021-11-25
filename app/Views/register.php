<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= conf['site_title'] ?></title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="<?= base_url('dashboard/images/favicon.ico') ?>">
    <link href="<?= base_url('dashboard/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('dashboard/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('dashboard/css/metismenu.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('dashboard/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('dashboard/css/style.css') ?>" rel="stylesheet" type="text/css">
    <!-- Sweetalert css -->
    <link href="<?= base_url('dashboard/plugins/sweetalert2.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="accountbg"></div>
    <!-- Begin page -->
    <div class="home-btn d-none d-sm-block">
        <a href="<?= base_url() ?>" class="text-white"><i class="mdi mdi-home h1"></i></a>
    </div>
    <div class="wrapper-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card card-pages mt-2">
                        <div class="card-body">
                            <p class="h3 ml-3 text-center">Register</p>
                            <p class="m-3 pb-3 text-center">Already have an account? <a href="<?= base_url('login') ?>"> <span class=" text-primary"> Log in</span></a></p>
                            <?= form_open() ?>
                            <div class="row m-1">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">FirstName</label>
                                        <input class="form-control" type="text" required="" id="firstname" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">LastName</label>
                                        <input class="form-control" type="text" required="" id="lastname" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" type="email" required="" name="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" required id="customCheck1">
                                    <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <div class="form-group text-center mt-3">
                                <div class="col-12">
                                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
<!-- Sweet-Alert  -->
<script src="<?= base_url('dashboard/plugins/sweetalert2.min.js') ?>"></script>
<?php if (session()->get('error')) : ?>
    <script>
        swal({
            title: 'sorry!',
            text: "<?= session()->get('error') ?>",
            type: 'error',
        })
    </script>
<?php elseif (session()->get('success')) : ?>
    <script>
        swal({
            title: 'Good job!',
            text: '<?= session()->get("success") ?>',
            type: 'success',
        })
    </script>
<?php endif ?>
    <!-- jQuery  -->
    <script src="<?= base_url() ?>/dashboard/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/dashboard/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/dashboard/js/metismenu.min.js"></script>
    <script src="<?= base_url() ?>/dashboard/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url() ?>/dashboard/js/waves.min.js"></script>
    <script src="<?= base_url() ?>/dashboard/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- App js -->
    <script src="<?= base_url() ?>/dashboard/js/app.js"></script>
</body>

</html>