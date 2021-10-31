</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<?php
$db      = \Config\Database::connect();
$menu3 = $db->query("SELECT * FROM menus WHERE location=3 ")->getResultArray();
$menu2 = $db->query("SELECT * FROM menus WHERE location=2 ")->getResultArray();
$menu1 = $db->query("SELECT * FROM menus WHERE location=1 ")->getResultArray();
?>
<footer class="site-footer pt-60 pb-40">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget widget-nav">
                        <h4 class="widget__title"><?= lang('text.company') ?></h4>
                        <ul class="menu">

                            <?php foreach ($menu1 as $m1) : ?>
                                <li class="menu-item menu-item-1 ">
                                    <a href="<?= $m1['url'] ?>"><?= $m1['title'] ?></a>
                                </li>
                            <?php endforeach ?>

                            <?php /*
                            <li class="menu-item menu-item-1 ">
                                <a href="<?= route_to('contact_us') ?>"><?= lang('text.contact_us') ?></a>
                            </li>
                            <li class="menu-item menu-item-2 ">
                                <a href="<?= route_to('become.partner') ?>"><?= lang('text.become_partner') ?></a>
                            </li>
                            <li class="menu-item menu-item-3 ">
                                <a href="<?= route_to('blog') ?>"><?= lang('text.blog') ?></a>
                            </li>
                            <li class="menu-item menu-item-4 ">
                                <a href="<?= route_to('rewards') ?>"><?= lang('text.rewards') ?></a>
                            </li>
                            <li class="menu-item menu-item-5 ">
                                <a href="<?= route_to('career') ?>"><?= lang('text.work_with_us') ?></a>
                            </li>
                            <li class="menu-item menu-item-6 ">
                                <a href="<?= route_to('visit') ?>"><?= lang('text.meet_the_team') ?></a>
                            </li> */ ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-nav">
                        <h4 class="widget__title">SUPPORT</h4>
                        <ul class="menu">
                            <?php foreach ($menu2 as $m2) : ?>
                                <li class="menu-item menu-item-1 ">
                                    <a href="<?= $m2['url'] ?>"><?= $m2['title'] ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-nav">
                        <h4 class="widget__title">TOP CITIES</h4>
                        <ul class="menu">
                            <?php foreach ($menu3 as $m3) : ?>
                                <li class="menu-item menu-item-1 ">
                                    <a href="<?= $m3['url'] ?>"><?= $m3['title'] ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-select">
                        <h4 class="widget__title">Language</h4>
                        <div class="select-language dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Language </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= base_url('lang/en') ?>">
                                    <span class="flag-icon flag-icon-us"></span>
                                    English </a>
                                <a class="dropdown-item" href="<?= base_url('lang/es') ?>">
                                    <span class="flag-icon flag-icon-es"></span>
                                    Spanish </a>
                                <a class="dropdown-item" href="<?= base_url('lang/fr') ?>">
                                    <span class="flag-icon flag-icon-fr"></span>
                                    French </a>
                                <a class="dropdown-item" href="<?= base_url('lang/in') ?>">
                                    <span class="flag-icon flag-icon-in"></span>
                                    Hindi </a>
                            </div>
                        </div>
                        <div class="mb-4"></div>
                        <div class="promo d-flex align-items-center">
                            <?php
                            $social = $db->query("SELECT * FROM social")->getResultArray();
                            ?>
                            <?php foreach ($social as $icon) : ?>
                                <a target="_blank" href="<?= $icon['social_url'] ?>">
                                    <span class="mr-2"> <i class="fa fa-<?= $icon['social_icon'] ?>"></i> </span>
                                </a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-30 pb-30">
        <div class="container">
            <div class="copyright text-center">
                Designed By Joel Studi0 & <a target="_blank" href="https://towoju.com"><span class="text-white"> TOWOJU I.T HUB</span></a> - © <?= date('Y');
                                                                                                                                                echo ' ' . conf['site_title'] ?> All rights reserved.
            </div>
        </div>
    </div>
</footer>
<script src="<?= base_url() ?>/html/assets/vendor/bootstrap-4.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/html/assets/vendor/slick-1.8.1/slick.min.js"></script>
<script src="<?= base_url() ?>/vendors/glow-cookies/glowCookies.js"></script>
<script src="<?= base_url() ?>/html/assets/vendor/daterangepicker-master/moment.min.js"></script>
<script src="<?= base_url() ?>/html/assets/vendor/daterangepicker-master/daterangepicker.js"></script>
<script src="<?= base_url() ?>/vendors/magnific-popup/magnific-popup.js"></script>
<script src="<?= base_url() ?>/html/assets/vendor/ion.rangeSlider-master/js/ion.rangeSlider.min.js"></script>
<script src="<?= base_url() ?>/vendors/matchHeight.js"></script>
<script src="<?= base_url() ?>/js/bootstrap-validate.js"></script>
<script src="<?= base_url() ?>/admin/plugins/select2/select2.min.js"></script>
<script src="<?= base_url() ?>/html/assets/js/main6782.js?v=1.0.3.2"></script>
<script src="<?= base_url() ?>/admin/plugins/toast/jquery.toast.min.js"></script>
<script src="<?= base_url() ?>/vendors/toastr/toastr.min.js"></script>
<script src="<?= base_url() ?>/html/assets/js/custom6782.js?v=1.0.3.2"></script>
<!-- Sweet-Alert  -->
<script src="<?= base_url('dashboard/plugins/sweetalert2.min.js') ?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $('.carousel').carousel({
        interval: 2000
    })
</script>
<!-- Ajax function for inine login -->
<script>
    // auto complete search //
    $(function() {
        $("#search").autocomplete({
            source: '<?= base_url('home/complete') ?>',
            headers: {
                "Content-Type": "application/json",
                "X-Requested-With": "XMLHttpRequest"
            }
        });
    });

    $(".gmz-message").hide();
    let uri = "<?= route_to('login.check') ?>";
    $(document).ready(function() {
        $("#login").click(function() {
            var email = $("#email").val();
            var password = $("#password").val();
            var csrfHash = $("input[name=csrf_name]").val();; // CSRF hash
            if (email.length == "" || password.length == "") {
                $(".gmz-message").html("Email/Password is empty").fadeIn();
                $(".gmz-message").addClass("error");
                return false;
            } else {
                $.ajax({
                    type: 'POST',
                    url: '<?= route_to('login') ?>',
                    dataType: 'json',
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(response) {
                        if (response.success) {
                            $(".gmz-message").show();
                            $(".gmz-message").html("Login successful");
                            $("#login").prop("disabled", true);
                            window.location = uri;
                        } else {
                            $(".gmz-message").show();
                            $(".gmz-message").html("Invalid Login details");
                        }
                    }
                });
            }
        });
        $("#email").focusout(function() {
            $(".gmz-message").hide();
            check_email();
        });
        $("#password").focusout(function() {
            $(".gmz-message").hide();
            check_password();
        });
        $("#password").keypress(function() {
            check_password();
        });

        function check_email() {
            $(".gmz-message").hide();
            var pattern = new RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);
            if (pattern.test($("#email").val())) {
                $(".gmz-message").hide();
            } else {
                $(".gmz-message").html("Invalid email address");
                $(".gmz-message").show().addClass("error");
            }
        }

        function check_password() {
            $(".gmz-message").hide();
            var password_length = $("#password").val().length;
            if (password_length < 7) {
                $(".gmz-message").html("Password should be at least 8 characters");
                $(".gmz-message").show().addClass("error");
            } else {
                $(".gmz-message").hide();
            }
        }
    });

    function setLang(params) {
        window.location.href = params;
    }
</script>
<!-- //Javascript for location search and autocomplete -->
<script>
    // AJAX call for autocomplete 
    $(document).ready(function() {
        $("#search-box").keyup(function() {
            $.ajax({
                type: "POST",
                url: "<?= route_to('hotel.locations') ?>",
                data: 'keyword=' + $(this).val(),
                beforeSend: function() {
                    $("#search-box").css("background", "#FFF url(<?= base_url('loading.gif') ?>) no-repeat 165px");
                },
                success: function(data) {
                    $("#suggesstion-box").show();
                    $("#suggesstion-box").html(data);
                    $("#search-box").css("background", "#FFF");
                }
            });
        });
    });
    //To select country name
    function selectCountry(val) {
        $("#search-box").val(val);
        $("#suggesstion-box").hide();
    }
</script>
<!-- jQuery UI -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
    var gmz_gdpr_params = {
        enable: "on",
        hide_after_click: "1",
        position: "left",
        manage_text: "",
        banner_heading: "",
        banner_description: "",
        banner_link_text: "",
        policy_page: "<?= base_url('page/privacy_policy') ?>",
        button_accept_text: "",
        button_reject_text: "",
    };
</script>
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
<script>
    function setCookie(c_name, value, exdays = 365) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = c_name + "=" + c_value;
    }

    function addWishlist(d) {
        loginStatus = "<?= session()->get('id') ?>";
        let hotel_id = $("a:focus").attr('data-hotel_id'); //$('d').data('hotel_id');
        if (!loginStatus) {
            swal({
                title: 'Please Login!',
                text: "Please Login to add item to wishlist",
                type: 'error',
            })
        } else {
            var url = "<?= route_to('admin.wishlist') ?>";
            $.ajax({
                url: url,
                type: "POST",
                dataType: 'json',
                data: {
                    'hotel_id': d,
                },
                success: function(response) {
                    $('#wishModal').addClass('text-primary');
                    alert(response.status);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
    }
</script>
</body>

</html>