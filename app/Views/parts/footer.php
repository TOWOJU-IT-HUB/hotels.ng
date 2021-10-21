</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<footer class="site-footer pt-60 pb-40">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget widget-nav">
                        <h4 class="widget__title"><?= lang('text.company') ?></h4>
                        <ul class="menu">
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
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-nav">
                        <h4 class="widget__title">SUPPORT</h4>
                        <ul class="menu">
                            <li class="menu-item menu-item-1 ">
                                <a href="#">Account</a>
                            </li>
                            <li class="menu-item menu-item-2 ">
                                <a href="#">About Us</a>
                            </li>
                            <li class="menu-item menu-item-3 ">
                                <a href="#">Legal</a>
                            </li>
                            <li class="menu-item menu-item-4 ">
                                <a href="#">Contact</a>
                            </li>
                            <li class="menu-item menu-item-5 ">
                                <a href="#">Affiliate Program</a>
                            </li>
                            <li class="menu-item menu-item-6 ">
                                <a href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-nav">
                        <h4 class="widget__title">TOP CITIES</h4>
                        <ul class="menu">
                            <li class="menu-item menu-item-1 ">
                                <a href="#">Chicago</a>
                            </li>
                            <li class="menu-item menu-item-2 ">
                                <a href="#">New York</a>
                            </li>
                            <li class="menu-item menu-item-3 ">
                                <a href="#">San Francisco</a>
                            </li>
                            <li class="menu-item menu-item-4 ">
                                <a href="#">California</a>
                            </li>
                            <li class="menu-item menu-item-5 ">
                                <a href="#">Ohio</a>
                            </li>
                            <li class="menu-item menu-item-6 ">
                                <a href="#">Alaska</a>
                            </li>
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
                        <h4 class="widget__title">Currencies</h4>
                        <div class="select-language dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                USD </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-30 pb-30">
        <div class="container">
            <div class="copyright text-center">
                © <?= date('Y') ?> Joel Studi0 - All rights reserved.
            </div>
            <ul class="social-footer">
                <li>
                    <a href="http://facebook.com/" title="Fanpage weTrip">
                        <i class="gmz-icon">
                            <svg height="24px" width="24px" viewBox="0 0 512 512">
                                <!-- Font Awesome Pro 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                            </svg>
                        </i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com/" title="Instagram">
                        <i class="fab fa-instagram term-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com/" title="twitter.com">
                        <i class="gmz-icon"><svg height="24px" width="24px" viewBox="0 0 512 512">
                                <!-- Font Awesome Pro 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                            </svg></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<script src="<?= base_url() ?>/html/assets/vendor/jquery-3.5.1.min.js"></script>
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
<!-- Ajax function for inine login -->
<script>
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