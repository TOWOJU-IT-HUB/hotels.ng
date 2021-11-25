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
    <style>
        .icon-spinner {
            display: none;
        }

        .load-animate {
            -animation: spin .7s infinite linear;
            -webkit-animation: spin2 .7s infinite linear;
        }

        @-webkit-keyframes spin2 {
            from {
                -webkit-transform: rotate(0deg);
            }

            to {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            from {
                transform: scale(1) rotate(0deg);
            }

            to {
                transform: scale(1) rotate(360deg);
            }
        }
    </style>
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
                                Select Language
                                <span class="icon-spinner"><i class="fa fa-spinner load-animate"></i></span> </button>
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
<script>
    // Google signIn
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        $.ajax({
            type: 'POST',
            url: '<?= base_url('home/social_login') ?>',
            dataType: 'json',
            data: {
                email: profile.getEmail(),
                password: "123456",
                first_name: profile.getName(),
                last_name: profile.getName(),
            },
            success: function(response) {
                if (response.success) {
                    $(".gmz-message").show();
                    $(".gmz-message").html("Login successful");
                    $("#login").prop("disabled", true);
                    signOut();
                    let uri = "<?= route_to('login.check') ?>";
                    window.location = uri;
                } else {
                    $(".gmz-message").show();
                    $(".gmz-message").html("Invalid Login details");
                }
            }
        });
    }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function() {
            console.log('User signed out.');
        });
    }
</script>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Sweet-Alert  -->
<script src="<?= base_url('dashboard/plugins/sweetalert2.min.js') ?>"></script>
<script>
    $('.carousel').carousel({
        interval: 2000
    })

    window.fbAsyncInit = function() {
        FB.init({
            appId: '<?= conf['facebook_app_id'] ?>',
            cookie: true, // enable cookies to allow the server to access the session
            xfbml: true, // parse social plugins on this page
            version: 'v3.2' // use graph api version 2.8
        });

        // Check whether the user already logged in
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                //display user data
                getFbUserData();
            }
        });
    };

    // Load the JavaScript SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Facebook login with JavaScript SDK
    function fbLogin() {
        FB.login(function(response) {
            if (response.authResponse) {
                // Get and display the user profile data
                getFbUserData();
            } else {
                document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
            }
        }, {
            scope: 'public_profile,email'
        });
    }

    // Fetch the user profile data from facebook
    function getFbUserData() {
        FB.api('/me', {
                locale: 'en_US',
                fields: 'id,first_name,last_name,email,link,gender,locale,picture'
            },
            function(response) {
                var firstname = "";
                var lastname = "";
                // console.log(response);
                var image = response.picture.data.url;
                var email = response.email;
                var firstname = response.first_name;
                var lastname = response.last_name;
                var id = response.id;
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('home/social_login') ?>',
                    dataType: 'json',
                    data: {
                        email: email,
                        first_name: firstname,
                        last_name: lastname,
                    },
                    success: function(response) {
                        if (response.success) {
                            $(".gmz-message").show();
                            $(".gmz-message").html("Login successful");
                            $("#login").prop("disabled", true);
                            fbLogout();
                            let uri = "<?= route_to('login.check') ?>";
                            window.location = uri;
                        } else {
                            $(".gmz-message").show();
                            $(".gmz-message").html("Invalid Login details");
                        }
                    }
                });
            });
    }

    // Logout from facebook
    function fbLogout() {
        FB.logout(function() {
            document.getElementById('fbLink').setAttribute("onclick", "fbLogin()");
            document.getElementById('fbLink').innerHTML = '<img src="images/fb-login-btn.png"/>';
            document.getElementById('userData').innerHTML = '';
            document.getElementById('status').innerHTML = '<p>You have successfully logout from Facebook.</p>';
        });
    }
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
            $(".gmz-loader").show();
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

    function cheki_password() {
        var passconf = $('#passconf').val();
        var password = $('#rpassword').val();
        if (password !== passconf) {
            $("#cheki").html("Password doesn't match");
            $("#cheki").show().addClass('error');
        } else {
            $("#cheki").hide();
        }
    }
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
            // $('.gmz-box-popup').click();
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

    function initBooking(d) {
        loginStatus = "<?= session()->get('id') ?>";
        let hotel_id = $("a:focus").attr('data-hotel_id'); //$('d').data('hotel_id');
        if (!loginStatus) {
            $('.gmz-box-popup').click();
        } else {
            window.location.href = "<?= base_url('home/add_order/') ?>" + '/' + d;
        }
    }
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/61844cb76bb0760a49412e2e/1fjmcnbov';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<a href="https://api.whatsapp.com/send?phone=+447404603011&text=Hello, I will love some help on your website www.weotrip.com." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 20px;
        left: 20px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>
</body>

</html>