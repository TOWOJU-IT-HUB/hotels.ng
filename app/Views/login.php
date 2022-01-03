<div class="site-content">
    <section class="list-hotel list-hotel--grid py-40 bg-gray-100">
        <div class="container">
            <style>
                .linedText {
                    margin: 10px;
                    display: flex;
                }

                .linedText:before,
                .linedText:after {
                    color: white;
                    content: '';
                    flex: 1;
                    border-bottom: groove 2px;
                    margin: auto 0.25em;
                    box-shadow: 0 -1px;
                    /* ou 0 1px si border-style:ridge */
                }
            </style>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card card-pages mt-2">
                        <div class="card-body">
                            <p class="h3 ml-3 text-center">Sign In</p>
                            <p class="m-3 pb-3 text-center">Log in to your account to continue.</p>
                            <?= form_open() ?>
                            <?php if (isset($validation)) : ?>
                                <div class="alert alert-danger mb-3">
                                    <?= service('validation')->listErrors() ?>
                                </div>
                            <?php endif ?>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" type="email" name="email" required="" id="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" required="" id="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group text-center mt-3 mb-3">
                                <div class="col-12">
                                    <button style="min-width: 200px;" class="btn btn-info waves-effect waves-light" type="submit">Login</button>
                                </div>
                            </div>
                            <h3 class="linedText">OR</h1>
                            <div class="row text-center">
                                <div class="col-sm-6">
                                    <button class="btn btn-outline-primary float-right" onclick="fbLogin()">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <div class="g-signin2 ml-3 mt-2" data-onsuccess="onSignIn">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center mt-3 mb-2">
                                <div class="col-12">
                                    Not registered ? <a href="<?= base_url('register') ?>" class="text-info">Create an account</a>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </section>
</div>