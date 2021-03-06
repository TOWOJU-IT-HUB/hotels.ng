    <!-- Summernote css -->
    <link href="<?= base_url('dashboard/plugins/summernote/summernote-bs4.css') ?>" rel="stylesheet" />
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                </div>
                <!-- end page-title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?= form_open_multipart() ?>
                                <div class="f1-steps">
                                    <div class="f1-progress">
                                        <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
                                    </div>
                                    <div class="f1-step active">
                                        <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                        <p>about</p>
                                    </div>
                                    <div class="f1-step">
                                        <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                        <p>account</p>
                                    </div>
                                    <div class="f1-step">
                                        <div class="f1-step-icon"><i class="fa fa-question"></i></div>
                                        <p>question</p>
                                    </div>
                                    <div class="f1-step">
                                        <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                                        <p>social</p>
                                    </div>
                                </div>

                                <fieldset>
                                    <h4>Tell us who you are:</h4>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">First name</label>
                                        <input type="text" name="f1-first-name" placeholder="First name..." class="f1-first-name form-control" id="f1-first-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-last-name">Last name</label>
                                        <input type="text" name="f1-last-name" placeholder="Last name..." class="f1-last-name form-control" id="f1-last-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-about-yourself">About yourself</label>
                                        <textarea name="f1-about-yourself" placeholder="About yourself..." class="f1-about-yourself form-control" id="f1-about-yourself"></textarea>
                                    </div>
                                    <div class="f1-buttons">
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <h4>Set up your account:</h4>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-email">Email</label>
                                        <input type="text" name="f1-email" placeholder="Email..." class="f1-email form-control" id="f1-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-password">Password</label>
                                        <input type="password" name="f1-password" placeholder="Password..." class="f1-password form-control" id="f1-password">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                                        <input type="password" name="f1-repeat-password" placeholder="Repeat password..." class="f1-repeat-password form-control" id="f1-repeat-password">
                                    </div>
                                    <div class="f1-buttons">
                                        <button type="button" class="btn btn-previous">Previous</button></button>t
<span class="icon-spinner"><i class="fa fa-spinner load-animate"></i></span> </button>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <h4>Security question:</h4>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-question">Question</label>
                                        <input type="text" name="f1-question" placeholder="Question..." class="f1-question form-control" id="f1-question">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-answer">Answer</label>
                                        <input type="text" name="f1-answer" placeholder="Answer..." class="f1-answer form-control" id="f1-answer">
                                    </div>
                                    <div class="f1-buttons">
                                        <button type="button" class="btn btn-previous">Previous</button></button>t
<span class="icon-spinner"><i class="fa fa-spinner load-animate"></i></span> </button>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <h4>Social media profiles:</h4>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-facebook">Facebook</label>
                                        <input type="text" name="f1-facebook" placeholder="Facebook..." class="f1-facebook form-control" id="f1-facebook">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-twitter">Twitter</label>
                                        <input type="text" name="f1-twitter" placeholder="Twitter..." class="f1-twitter form-control" id="f1-twitter">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-google-plus">Google plus</label>
                                        <input type="text" name="f1-google-plus" placeholder="Google plus..." class="f1-google-plus form-control" id="f1-google-plus">
                                    </div>
                                    <div class="f1-buttons">
                                        <button type="button" class="btn btn-previous">Previous</button></button>ubmit
<span class="icon-spinner"><i class="fa fa-spinner load-animate"></i></span> </button>
                                    </div>
                                </fieldset>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- content -->
        <style>
            * {
                box-sizing: border-box;
            }

            /* Mark input boxes that gets an error on validation: */
            input.invalid {
                background-color: #ffdddd;
            }

            /* Hide all steps by default: */
            .tab {
                display: none;
            }

            button {
                background-color: #04AA6D;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                font-size: 17px;
                cursor: pointer;
            }

            button:hover {
                opacity: 0.8;
            }
        </style>
        <script>
            function scroll_to_class(element_class, removed_height) {
                var scroll_to = $(element_class).offset().top - removed_height;
                if ($(window).scrollTop() != scroll_to) {
                    $('html, body').stop().animate({
                        scrollTop: scroll_to
                    }, 0);
                }
            }

            function bar_progress(progress_line_object, direction) {
                var number_of_steps = progress_line_object.data('number-of-steps');
                var now_value = progress_line_object.data('now-value');
                var new_value = 0;
                if (direction == 'right') {
                    new_value = now_value + (100 / number_of_steps);
                } else if (direction == 'left') {
                    new_value = now_value - (100 / number_of_steps);
                }
                progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
            }

            jQuery(document).ready(function() {

                /*
                    Fullscreen background
                */
                $.backstretch("assets/img/backgrounds/1.jpg");

                $('#top-navbar-1').on('shown.bs.collapse', function() {
                    $.backstretch("resize");
                });
                $('#top-navbar-1').on('hidden.bs.collapse', function() {
                    $.backstretch("resize");
                });

                /*
                    Form
                */
                $('.f1 fieldset:first').fadeIn('slow');

                $('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea').on('focus', function() {
                    $(this).removeClass('input-error');
                });

                // next step
                $('.f1 .btn-next').on('click', function() {
                    var parent_fieldset = $(this).parents('fieldset');
                    var next_step = true;
                    // navigation steps / progress steps
                    var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                    var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                    // fields validation
                    parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
                        if ($(this).val() == "") {
                            $(this).addClass('input-error');
                            next_step = false;
                        } else {
                            $(this).removeClass('input-error');
                        }
                    });
                    // fields validation

                    if (next_step) {
                        parent_fieldset.fadeOut(400, function() {
                            // change icons
                            current_active_step.removeClass('active').addClass('activated').next().addClass('active');
                            // progress bar
                            bar_progress(progress_line, 'right');
                            // show next step
                            $(this).next().fadeIn();
                            // scroll window to beginning of the form
                            scroll_to_class($('.f1'), 20);
                        });
                    }

                });

                // previous step
                $('.f1 .btn-previous').on('click', function() {
                    // navigation steps / progress steps
                    var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                    var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                    $(this).parents('fieldset').fadeOut(400, function() {
                        // change icons
                        current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
                        // progress bar
                        bar_progress(progress_line, 'left');
                        // show previous step
                        $(this).prev().fadeIn();
                        // scroll window to beginning of the form
                        scroll_to_class($('.f1'), 20);
                    });
                });

                // submit
                $('.f1').on('submit', function(e) {

                    // fields validation
                    $(this).find('input[type="text"], input[type="password"], textarea').each(function() {
                        if ($(this).val() == "") {
                            e.preventDefault();
                            $(this).addClass('input-error');
                        } else {
                            $(this).removeClass('input-error');
                        }
                    });
                    // fields validation

                });

            });
        </script>