<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= conf['site_title'] ?></title>
    <meta content="<?= conf['site_title'] ?>" name="description" />
    <meta content="towojuads" name="author" />
    <link rel="shortcut icon" href="<?= base_url('dashboard/images/favicon.ico') ?>">
    <link href="<?= base_url('dashboard/plugins/bootstrap-datepicker.min.css') ?>" rel="stylesheet">
    <!-- Dropzone css -->
    <link href="<?= base_url('dashboard/plugins/dropzone/dist/dropzone.css') ?>" rel="stylesheet" type="text/css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?= base_url('dashboard/plugins/morris.css') ?>">
    <link href="<?= base_url('dashboard/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('dashboard/css/metismenu.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('dashboard/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('dashboard/css/style.css') ?>" rel="stylesheet" type="text/css">
    <!-- DataTables -->
    <link href="<?= base_url('dashboard/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/datatables/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Sweetalert css -->
    <link href="<?= base_url('dashboard/plugins/sweetalert2.css') ?>" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="<?= base_url('dashboard/datatables/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="http://codemirror.net/lib/codemirror.css" rel="stylesheet" type="text/css">
    <link href="https://codemirror.net/theme/darcula.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url('dashboard/js/jquery.min.js') ?>"></script>
</head>
<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?= route_to('admin.profile') ?>" class="logo">
                    <img src="<?= base_url() ?>/dashboard/images/logo-light.png" class="logo-lg" alt="" height="22">
                    <img src="<?= base_url() ?>/dashboard/images/logo-sm.png" class="logo-sm" alt="" height="24">
                </a>
            </div>
            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input" type="search" placeholder="Search" />
                    <a href="<?= route_to('admin.profile') ?>" class="close-search toggle-search" data-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>
            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                    <!-- <li class="list-inline-item dropdown notification-list d-none d-md-inline-block">
                        <a class="nav-link waves-effect toggle-search" href="<?= route_to('admin.profile') ?>" data-target="#search-wrap">
                            <i class="fas fa-search noti-icon"></i>
                        </a>
                    </li> -->
                    <!-- language-->
                    <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="<?= base_url('lang').'/en' ?>" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?= base_url() ?>/dashboard/images/flags/us_flag.jpg" class="mr-2" height="12" alt="" /> <span class="no_m">English</span> <span class="mdi mdi-chevron-down"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                            <a class="dropdown-item" href="<?= base_url('lang').'/fr' ?>"><img src="<?= base_url() ?>/dashboard/images/flags/french_flag.jpg" alt="" height="16" /> <span class=""> French </span></a>
                            <a class="dropdown-item" href="<?= base_url('lang').'/es' ?>"><img src="<?= base_url() ?>/dashboard/images/flags/spain_flag.jpg" alt="" height="16" /> <span class=""> Spanish </span></a>
                            <a class="dropdown-item" href="<?= base_url('lang').'/in' ?>"><img src="<?= base_url() ?>/dashboard/images/flags/india_flag.jpg" alt="" height="16" /> <span class=""> Hindu </span></a>
                        </div>
                    </li>
                    <!-- notification -->
                    <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="<?= route_to('admin.notifications') ?>" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-bell noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">new</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                <?= lang('text.notification') ?>
                            </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                <?= lang('text.view_all') ?> <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="<?= route_to('admin.profile') ?>" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url() ?>/dashboard/images/users/user-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <a class="dropdown-item" href="<?= route_to('admin.profile') ?>"><i class="mdi mdi-account-circle"></i> <?= lang('text.profile') ?></a>
                                <a class="dropdown-item" href="<?= route_to('admin.profile') ?>"><i class="mdi mdi-wallet"></i> <?= lang('text.my_wallet') ?></a>
                                <a class="dropdown-item d-block" href="<?= route_to('admin.profile') ?>"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                                <a class="dropdown-item" href="<?= route_to('admin.profile') ?>"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?= route_to('admin.profile') ?>"><i class="mdi mdi-power text-danger"></i> <?= lang('text.logout') ?></a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title"><?= lang('text.general') ?></li>
                        <li>
                            <a href="<?= route_to('admin.dashboard') ?>" class="waves-effect">
                                <i class="dripicons-meter"></i> <span> <?= lang('text.dashboard') ?> </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= route_to('admin.profile') ?>" class="waves-effect">
                                <i class="dripicons-user"></i> <span> <?= lang('text.profile') ?> </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= route_to('admin.notification') ?>" class="waves-effect">
                                <i class="fas fa-bell noti-icon"></i> <span> <?= lang('text.notification') ?> </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= route_to('admin.my_orders') ?>" class="waves-effect">
                                <i class="dripicons-to-do"></i> <span> <?= lang('text.my_orders') ?> </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= route_to('admin.wishlist') ?>" class="waves-effect">
                                <i class="fas fa-heart"></i> <span> <?= lang('text.wishlist') ?> </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> <?= lang('text.earnings_report') ?> <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?= route_to('admin.partners_earnings') ?>"> <?= lang('text.partners_earnings') ?> </a></li>
                                <li><a href="<?= route_to('admin.analytics') ?>"> <?= lang('text.analytics') ?> </a></li>
                                <li><a href="<?= route_to('admin.withdrawal') ?>"> <?= lang('text.withdrawal') ?> </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document-edit"></i><span> <?= lang('text.posts') ?> <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?= route_to('admin.all_posts') ?>"> <?= lang('text.all_posts') ?> </a></li>
                                <li><a href="<?= route_to('admin.add_new') ?>"> <?= lang('text.add_new') ?> </a></li>
                                <li><a href="<?= route_to('admin.category') ?>"> <?= lang('text.category') ?> </a></li>
                                <li><a href="<?= route_to('admin.tags') ?>"> <?= lang('text.tags') ?> </a></li>
                                <li><a href="<?= route_to('admin.comments') ?>"> <?= lang('text.comments') ?> </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document-edit"></i><span> <?= lang('text.pages') ?> <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?= route_to('admin.all_pages') ?>"> <?= lang('text.all_pages') ?> </a></li>
                                <li><a href="<?= route_to('admin.add_page') ?>"> <?= lang('text.add_new') ?> </a></li>
                            </ul>
                        </li>
                        <li class="menu-title"><?= lang('text.all_services') ?></li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-office-building"></i><span> <?= lang('text.hotel') ?> <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?= route_to('admin.all_hotels') ?>"> <?= lang('text.all_hotels') ?> </a></li>
                                <li><a href="<?= route_to('admin.add_new_hotels') ?>"> <?= lang('text.add_new_hotels') ?> </a></li>
                                <li><a href="<?= route_to('admin.property_type') ?>"> <?= lang('text.property_type') ?> </a></li>
                                <li><a href="<?= route_to('admin.facilities') ?>"> <?= lang('text.facilities') ?> </a></li>
                                <li><a href="<?= route_to('admin.hotel_services') ?>"> <?= lang('text.hotel_services') ?> </a></li>
                                <li><a href="<?= route_to('admin.room_facilities') ?>"> <?= lang('text.room_facilities') ?> </a></li>
                                <li><a href="<?= route_to('admin.reviews') ?>"> <?= lang('text.reviews') ?> </a></li>
                                <li><a href="<?= route_to('admin.orders') ?>"> <?= lang('text.orders') ?> </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-hospital-building"></i><span> <?= lang('text.apartments') ?> <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?= route_to('admin.all_apartments') ?>"> <?= lang('text.all_apartments') ?> </a></li>
                                <li><a href="<?= route_to('admin.add_new') ?>"> <?= lang('text.add_new') ?> <?= lang('text.apartments') ?> </a></li>
                                <li><a href="<?= route_to('admin.types') ?>"> <?= lang('text.types') ?> </a></li>
                                <li><a href="<?= route_to('admin.amenities') ?>"> <?= lang('text.amenities') ?> </a></li>
                                <li><a href="<?= route_to('admin.reviews') ?>"> <?= lang('text.reviews') ?> </a></li>
                                <li><a href="<?= route_to('admin.orders') ?>"> <?= lang('text.orders') ?> </a></li>
                            </ul>
                        </li>
                        <li class="menu-title"><?= lang('text.system') ?></li>
                        <li>
                            <a href="<?= route_to('general_settings') ?>" class="waves-effect"><i class="fas fa-cog"></i><span> <?= lang('text.settings') ?> </span></a>
                        </li>
                        <li>
                            <a href="<?= route_to('admin.menu') ?>" class="waves-effect"><i class="mdi mdi-menu"></i><span> <?= lang('text.menu') ?> </span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-user-group"></i><span> <?= lang('text.users') ?> <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?= route_to('admin.all_users') ?>"> <?= lang('text.all_users') ?> </a></li>
                                <li><a href="<?= route_to('admin.partner_request') ?>"> <?= lang('text.partner_request') ?> </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= route_to('admin.media') ?>" class="waves-effect"><i class="dripicons-photo"></i><span> <?= lang('text.media') ?> </span></a>
                        </li>
                        <li>
                            <a href="<?= route_to('admin.coupons') ?>" class="waves-effect"><i class="dripicons-ticket"></i><span> <?= lang('text.coupons') ?> </span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> <?= lang('text.tools') ?> <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?= route_to('admin.import_data') ?>"><?= lang('text.import_data') ?></a></li>
                                <li><a href="<?= route_to('admin.seo') ?>"><?= lang('text.seo') ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->