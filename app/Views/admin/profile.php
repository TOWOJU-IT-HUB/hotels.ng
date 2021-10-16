
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">
                    <div class="page-title-box">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- <div class="card"> -->
                                                <div class="card-body">
                                                <h4 class="mb-4"> Your Profile </h4>
                                                    
                                                <?= form_open() ?>
                                                    <div class="row mb-2">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="text-muted">First Name</label>
                                                                <input type="text" class="form-control" value="<?= $user['firstname'] ?>" name="firstname" required="" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="text-muted">Last Name</label>
                                                                <div>
                                                                    <input type="text" id="lastname" value="<?= $user['lastname'] ?>" name="lastname" class="form-control" required="" placeholder="Last Name" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="text-muted">E-Mail</label>
                                                                <div>
                                                                    <input type="email" readonly="" class="form-control" required="" value="<?= $user['email'] ?>" name="email" parsley-type="email" placeholder="Enter a valid e-mail" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="text-muted">Phone</label>
                                                                <div>
                                                                    <input parsley-type="digits" type="text" value="<?= $user['phone'] ?>" name="phone" class="form-control" required="" placeholder="Phone Number" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="avater">
                                                        <div class="form-group">
                                                            <div class="img">
                                                                <img class="rounded-circle" alt="200x200" src="https://themesdesign.in/zegva/layouts/vertical/assets/images/users/user-4.jpg" data-holder-rendered="true">
                                                            </div>
                                                            <div class="action d-flex align-items-center mt-1">
                                                                <a href="javascript:void(0)" class="text-success mr-3" data-toggle="modal" data-target="#gmzMediaModal" data-url="/">Change image</a>
                                                                
                                                                <a href="javascript:void(0)" class="ml-3 text-danger btn-remove">Remove Image</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-5">
                                                        <label class="text-muted">Address</label>
                                                        <div>
                                                            <textarea required="" name="address" class="form-control" rows="3"><?= $user['address'] ?></textarea>
                                                        </div>
                                                    </div>

                                                    <p class="strong mo-mt-2">Leave empty if you don't want to change password</p>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="text-muted">Password</label>
                                                                <div>
                                                                    <input type="password" name="password" class="form-control"  parsley-type="password" placeholder="Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="text-muted">Confirm Password</label>
                                                                <div>
                                                                    <input parsley-type="password" name="passconf" type="password" class="form-control" placeholder="Confirm Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <div>
                                                            <button type="submit" class="btn btn-info waves-effect waves-light">
                                                                Save changes
                                                            </button>
                                                        </div>
                                                    </div>
                                                <?= form_close() ?>

                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    
                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->