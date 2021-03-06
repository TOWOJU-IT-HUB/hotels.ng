<!DOCTYPE html>
<html lang="<?= session()->get('lang') ?>">
<?php 
/* Grab Currency list from ::DB */
$db = db_connect();
$curr_list = $db->query('SELECT * FROM currency')->getResultArray();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="storage/2021/02/01/favicon-1612164546.png" />
    <title> <?= lang('text.site_title') ?> <?php if (isset($title)) {
                                                echo ' :: ' . $title;
                                            } ?> </title>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="description" content="<?= conf['site_title'] ?> - " />
    <meta property="og:locale" content="en" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= lang('text.site_title') ?>" />
    <meta property="og:description" content="<?= lang('text.site_title') ?>" />
    <meta property="og:url" content="<?= current_url() ?>" />
    <meta property="og:site_name" content="<?= lang('text.site_title') ?>" />
    <meta property="article:published_time" content="2021-09-23T15:39:13+07:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta property="twitter:url" content="index.html" />

    <link rel="stylesheet" href="<?= base_url() ?>/html/assets/vendor/slick-1.8.1/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/glow-cookies/glowCookies.css">
    <link rel="stylesheet" href="<?= base_url() ?>/html/assets/vendor/daterangepicker-master/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/mapbox/mapbox-gl.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/mapbox/mapbox-gl-geocoder.css">
    <link rel="stylesheet" href="<?= base_url() ?>/html/assets/vendor/ion.rangeSlider-master/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/html/assets/vendor/font-awesome-5/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/flag-icon/css/flag-icon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/admin/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/html/assets/vendor/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/html/assets/css/main6782.css?v=1.0.3.2">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/toast/jquery.toast.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/toastr/toastr.min.css">
    <!-- Sweetalert css -->
    <link href="<?= base_url('dashboard/plugins/sweetalert2.css') ?>" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="google-signin-client_id" content="<?= conf['google_client_id'] ?>">
    <style>
        :root {
            --primary: hsl(175, 69%, 38%);
            --primary-hover: hsl(175, 69%, 40%);
        }
        .fa-chevron-right{
            display: none;
        }
    </style>
    <script src="<?= base_url() ?>/html/assets/vendor/jquery-3.5.1.min.js"></script>
</head>

<body class="body">
    <!-- // Top Menu Starts Here -->
    <div id="top-bar-1" class="top-bar top-bar--1">
        <div class="top-bar__left">
            <div class="promo d-flex align-items-center">
              <?php
                $db      = \Config\Database::connect();
                $social = $db->query("SELECT * FROM social")->getResultArray();
                ?>
                <?php foreach ($social as $icon) : ?>
                    <a target="_blank" href="<?= $icon['social_url'] ?>">
                        <span class="mr-2"> <i class="fa fa-<?= $icon['social_icon'] ?>"></i> </span>&nbsp;&nbsp;
                    </a>
                <?php endforeach ?>
            </div>
        </div>
        <div class="text-center">
            <a class="ml-3" href="mailto:<?= conf['site_email'] ?>"><span><i class="fa fa-envelope"></i> <?= conf['site_email'] ?></span></a>&nbsp;&nbsp;
           <a class="ml-3" href="tel:<?= conf['contact_us_phone'] ?>"><span><i class="fa fa-phone"></i> <?= conf['contact_us_phone'] ?></span></a>
        </div>
        <div class="top-bar__right">
            <div class="select-language dropdown">
                <select class="dropdown-toggle" onchange="setLang(this.value)">
                    <option disabled> Select Language </option>
                    <option <?php if (session()->get('lang') == 'en') {
                                echo "selected";
                            } ?> value="<?= base_url('lang/en') ?>"> English </option>
                    <option <?php if (session()->get('lang') == 'es') {
                                echo "selected";
                            } ?> value="<?= base_url('lang/es') ?>"> Spanish </option>
                    <option <?php if (session()->get('lang') == 'fr') {
                                echo "selected";
                            } ?> value="<?= base_url('lang/fr') ?>"> French </option>
                    <option <?php if (session()->get('lang') == 'in') {
                                echo "selected";
                            } ?> value="<?= base_url('lang/in') ?>"> Hindi </option>
                </select>
            </div>
            <div class="select-language dropdown">
                <select name="country_currency" onchange="changeCurrency(this.value)" class="dropdown-toggle">
                    <option selected disabled>Select Currency</option>
                    <?php foreach($curr_list as $cur): ?>
                        <option <?php if(session()->get('currency') == $cur['code']){ echo "selected"; } ?> value="<?= base_url('language/currency/'.$cur['code']) ?>"><?= $cur['name'].' '.$cur['symbol_native'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
    </div>
    <!-- // Top Menu Ends Here -->

    <!-- loader/spinner -->
    <div class="gmz-loader  gmz-page-loader ">
        <div class="loader-inner">
            <div class="spinner-grow text-info align-self-center loader-lg"></div>
        </div>
    </div>
    <!-- loader/spinner -->

    <!-- Authentication signIn <> Register <> Password Reset -->

    <div class="white-popup mfp-with-anim mfp-hide gmz-popup-form" id="gmz-login-popup">
        <div class="popup-inner">
            <h4 class="popup-title">Sign In</h4>
            <div class="popup-content">
                <?= form_open('home/login') ?>
                    <div class="gmz-loader ">
                        <div class="loader-inner">
                            <div class="spinner-grow text-info align-self-center loader-lg"></div>
                        </div>
                    </div>
                    <div class="form">
                        <input type="hidden" name="isfr" value="1" />
                        <div id="username-field" class="field-wrapper input">
                            <label for="username"><?= lang('text.email') ?></label>
                            <i class="fal fa-user-alt"></i>
                            <input id="email" name="email" type="text" class="form-control gmz-validation" data-validation="required" placeholder="Your <?= lang('text.email') ?>">
                        </div>

                        <div id="password-field" class="field-wrapper input mb-2">
                            <div class="d-flex justify-content-between">
                                <label for="password"><?= lang('text.password') ?></label>
                                <a href="#gmz-reset-popup" class="forgot-pass-link gmz-box-popup" data-effect="mfp-zoom-in"> <?= lang('text.forgot') . ' ' . lang('text.password') ?>?</a>
                            </div>
                            <i class="fal fa-lock"></i>
                            <input id="password" name="password" type="password" class="form-control gmz-validation" data-validation="required" placeholder="Your <?= lang('text.password') ?>">
                            <div class="view-password">
                                <i class="fal fa-eye view"></i>
                                <i class="fal fa-eye-slash not-view"></i>
                            </div>
                        </div>

                        <div class="gmz-message alert alert-info"></div>

                        <div class="d-sm-flex justify-content-between">
                            <div class="field-wrapper">
                                <button type="submit" id="login" class="login btn btn-info"><?= lang('text.login') ?></button>
                            </div>
                        </div>

                        <div class="division">
                            <span>OR</span>
                        </div>

                        <div class="social">
                            <a href="javascript:void(0);" onclick="fbLogin();" id="fbLink">
                                <i class="fab fa-facebook-f"></i>
                                <span class="brand-name">Facebook</span>
                            </a>
                            <div class="g-signin2 ml-3 mt-2" data-onsuccess="onSignIn">
                            </div>
                        </div>
                        <p class="signup-link">Not registered ? <a href="#gmz-register-popup" class="gmz-box-popup" data-effect="mfp-zoom-in">Create an account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="white-popup mfp-with-anim mfp-hide gmz-popup-form" id="gmz-register-popup">
        <div class="popup-inner">
            <h4 class="popup-title">Sign Up</h4>
            <div class="popup-content">
                <?= form_open('home/register') ?>
                    <div class="gmz-loader ">
                        <div class="loader-inner">
                            <div class="spinner-grow text-info align-self-center loader-lg"></div>
                        </div>
                    </div>
                    <div class="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div id="first_name-field" class="field-wrapper input">
                                    <label for="first_name"><?= lang('text.firstname') ?></label>
                                    <i class="fal fa-user-alt"></i>
                                    <input required id="firstname" name="firstname" type="text" class="form-control gmz-validation" data-validation="required" placeholder="<?= lang('text.firstname') ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div id="last_name-field" class="field-wrapper input">
                                    <label for="last_name"><?= lang('text.lastname') ?></label>
                                    <i class="fal fa-user-alt"></i>
                                    <input required id="lastname" name="lastname" type="text" class="form-control gmz-validation" data-validation="required" placeholder="<?= lang('text.lastname') ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div id="phone_number-field" class="field-wrapper input">
                            <label for="phone">Phone Number</label>
                            <i class="fal fa-phone"></i>
                            <input name="phone" type="tel" value="" required class="form-control gmz-validation" data-validation="required" placeholder="Phone Number">
                        </div>


                        <div id="<?= lang('text.email') ?>-field" class="field-wrapper input">
                            <label for="r<?= lang('text.email') ?>"><?= lang('text.email') ?></label>
                            <i class="fal fa-at"></i>
                            <input required id="r<?= lang('text.email') ?>" name="email" type="text" value="" class="form-control gmz-validation" data-validation="required" placeholder="<?= lang('text.email') ?>">
                        </div>

                        <div class="row">
                        <div class="col-6">
                            <div id="password-field" class="field-wrapper input mb-2">
                                <div class="d-flex justify-content-between">
                                    <label for="rpassword"><?= lang('text.password') ?></label>
                                </div>
                                <i class="fal fa-lock"></i>
                                <input required onkeyup="cheki_password()" id="rpassword" name="password" type="password" minlength="8" class="form-control gmz-validation" data-validation="required" placeholder="<?= lang('text.password') ?>">
                                <div class="view-password">
                                    <i class="fal fa-eye view"></i>
                                    <i class="fal fa-eye-slash not-view"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="password-field" class="field-wrapper input mb-2">
                                <div class="d-flex justify-content-between">
                                    <label for="rpassword"><?= "Confirm ".lang('text.password') ?></label>
                                </div>
                                <i class="fal fa-lock"></i>
                                <input required onkeyup="cheki_password()" id="passconf" name="confpass" type="password" minlength="8" class="form-control gmz-validation" data-validation="required" placeholder="Confirm Password">
                                <div class="view-password">
                                    <i class="fal fa-eye view"></i>
                                    <i class="fal fa-eye-slash not-view"></i>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div id="cheki" class="gmz-message alert alert-info m-3"></div>
                        <div class="field-wrapper terms_condition">
                            <div class="n-chk">
                                <label class="new-control new-checkbox checkbox-primary">
                                    <input required type="checkbox" name="agree_field" value="1" id="agree-term" class="new-control-input gmz-validation" data-validation="required">
                                    <span class="new-control-indicator"></span><span>I agree to the <a href="<?= route_to('tos') ?>"> terms and conditions </a></span>
                                </label>
                            </div>

                        </div>

                        <div class="gmz-message"></div>

                        <div class="d-sm-flex justify-content-between">
                            <div class="field-wrapper">
                                <button type="submit" class="btn btn-primary" value=""><?= lang('text.register') ?></button>
                            </div>
                        </div>

                        <!-- <div class="division">
                            <span>OR</span>
                        </div> -->

                        <!-- <div class="social">
                            <a href="https://www.facebook.com/v3.3/dialog/oauth?client_id=350904019789211&amp;redirect_uri=https%3A%2F%2Fibooking.booteam.co%2Fcallback%2Ffacebook&amp;scope=<?= lang('text.email') ?>&amp;response_type=code&amp;state=BLWPid0hDujFblN3sNnyitXx0dOwU4yZCmvUAHJW" class="btn social-fb">
                                <i class="fab fa-facebook-f"></i>
                                <span class="brand-name">Facebook</span>
                            </a>
                            <a href="https://accounts.google.com/o/oauth2/auth?client_id=<?= conf['google_client_id'] ?>&amp;redirect_uri=<?= base_url('callback/google') ?>&amp;scope=openid+profile+<?= lang('text.email') ?>&amp;response_type=code&amp;state=vbv7twKEKyFLUAUKyWpsI91HrWtOhy4ulrtzica2" class="btn social-github">
                                <i class="fab fa-google"></i>
                                <span class="brand-name">Google</span>
                            </a>
                        </div> -->

                        <p class="signup-link">Already have an account? <a href="#gmz-login-popup" class="gmz-box-popup" data-effect="mfp-zoom-in"><?= lang('text.login') ?></a></p>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="white-popup mfp-with-anim mfp-hide gmz-popup-form" id="gmz-reset-popup">
        <div class="popup-inner">
            <h4 class="popup-title"><?= lang('text.password_recovery') ?></h4>
            <div class="popup-content">
                <form action="<?= route_to('password_reset') ?>" method="POST">
                    <div class="gmz-loader ">
                        <div class="loader-inner">
                            <div class="spinner-grow text-info align-self-center loader-lg"></div>
                        </div>
                    </div>
                    <div class="form">
                        <div id="<?= lang('text.email') ?>-field" class="field-wrapper input">
                            <div class="d-flex justify-content-between">
                                <label for="f<?= lang('text.email') ?>"><?= lang('text.email') ?></label>
                            </div>
                            <i class="fal fa-at"></i>
                            <input id="f<?= lang('text.email') ?>" name="email" type="text" class="form-control gmz-validation" data-validation="required" value="" placeholder="<?= lang('text.email') ?>">
                        </div>

                        <div class="gmz-message"></div>

                        <div class="d-sm-flex justify-content-between pb-2">
                            <div class="field-wrapper">
                                <button type="submit" class="btn btn-primary" value="">RESET</button>
                            </div>
                        </div>

                        <p>Enter your <?= lang('text.email') ?> and instructions will sent to you!</p>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- // Header Menu Starts here -->
    <header class="site-header">
        <div class="toggle-menu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="site-branding">
            <h1>
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url() . '/uploads/logo/' . conf['site_logo'] ?>" alt="<?= lang('text.site_title') ?>" height="39px" />
                </a>
            </h1>
        </div>
        <div class="site-navigation">
            <div class="menu-overlay t_menu"></div>
            <ul id="menu-primary-1" class="main-menu t_menu">
                <li class="back-menu">
                    <i class="far fa-long-arrow-left"></i>
                </li>

                <li class="menu-item menu-item-1 ">
                    <a href="<?= base_url() ?>"><?= lang('text.home') ?></a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#" onclick="sub_menu()">Services</a>
                    <ul role="menu" class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="<?= base_url('/search?room_type[]=Hotel&country[]='.user_country()) ?>">Hotel</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?= base_url('/search?room_type[]=Apartment&country[]='.user_country()) ?>">Apartment</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?= base_url('/search?room_type[]=Motel&country[]='.user_country()) ?>">Motels</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?= base_url('/search?room_type[]=Hostel&country[]='.user_country()) ?>">Hostel</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?= base_url('/search?room_type[]=Resort&country[]='.user_country()) ?>">Resorts</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?= base_url('/search?room_type[]=Villa&country[]='.user_country()) ?>">Villa</a>
                        </li>
                    </ul> <span class="arrow-pc"><i class="far fa-chevron-down"></i></span>
                </li>
                <li class="menu-item menu-item-23 ">
                    <a href="<?= route_to('blog') ?>"><?= lang('text.blog') ?></a>
                </li>
                <li class="menu-item menu-item-29 ">
                    <a href="<?= route_to('contact_us') ?>"><?= lang('text.contact_us') ?></a>
                </li>
                <li class="menu-item menu-item-29 "><div class="d-lg-none d-xl-none d-xxl-none d-block">
                    <a href="https://weotrip.com/home/partner"><button type="button" class="btn btn-primary"><b>Become a Partner</b></button></a>
                </div></li>
            </ul>
        </div>
        <div class="user-navigation">
            <?php if (session()->get('isLoggedIn') != true) : ?>
                <ul>
                    <li class="become-partner"><a href="<?= base_url('home/partner') ?>" class="btn btn-sm btn-primary">Become A Partner</a></li>
                    <li><a href="#gmz-login-popup" class="btn btn-sm btn-dark gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-sign-in pr-2"></i><?= lang('text.signin') ?></a></li>
                </ul>
            <?php else : ?>
                <ul>
                    <li id="gmz-dropdown-notification" class="dropdown notifications" data-action="<?= base_url() ?>/update-check-notification" data-params="eyJ1c2VyX2lkIjoxLCJ1c2VyX2hhc2hpbmciOiI2NWY1OWQzYTliNTEzMWRmMGVmODFiNTk1NTg3ZjZmNiJ9">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fal fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item notify-title">
                                Notifications
                            </div>
                            <p class="text-muted">No Notifications found!</p>
                            <a href="<?= base_url('admin/notifications') ?>" class="dropdown-item text-center notify-item notify-all">
                                View All
                                <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="user-logged">
                        <div class="user-info">
                            <a href="javascript:void(0);">
                                <img src="<?= base_url('uploads/profile_image/' . $_SESSION['profile_image']) ?>" alt="avatar">
                                <span><?= $_SESSION['fullname'] ?></span>
                                <i class="far fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="user-dropdown">
                            <ul>
                                <li>
                                    <a href="<?= route_to('admin.dashboard') ?>"><i class="gmz-icon"></i>Dashboard</a>
                                </li>
                                <?php if(session()->get('role') == 'admin'): ?>
                                <li>
                                    <a href="<?= base_url('admin/settings') ?>"><i class="gmz-icon"></i>Settings</a>
                                </li>
                            <?php endif ?>
                                <li>
                                    <a href="<?= base_url('admin/profile') ?>"><i class="gmz-icon"></i>Your Profile</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/wishlist') ?>"><i class="gmz-icon"></i>Wishlist</a>
                                </li>
                                <li class="logout">
                                    <a href="<?= base_url('logout') ?>"><i class="gmz-icon"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            <?php endif ?>
        </div>
    </header>
    <!-- // Header Menu ends here -->