<style>
    .partner-form {
        background-image: url('http://ibooking.booteam.co/storage/2021/01/30/slider03-1612013205.JPG');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        height: 50%;
        opacity: 99;
    }

    .page.contact-us section.partner-form:before {
        content: '';
        background: rgba(0, 0, 0, 0.4);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9;
    }

    .partner-form__right {
        float: left;
        position: relative;
        margin-top: 10%;
        padding-left: 20px;
        /* color: #fff; */
    }
</style>
<div class="site-content">
    <section class="partner-form">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-5 card card-body pl-3 pr-3 pt-5 pb-5 m-2">
                    <div class="become-form">
                        <h2 class="title pb-3">Contact Us</h2>
                        <?php if(isset($validation) && !empty($validation)){ ?>
                        
                            <?php foreach($validation as $v){ ?>
                                <p> <?= $v ?> </p>
                            <?php } ?>
                            
                        <?php } ?>
                        <?= form_open() ?>
                            <div class="gmz-loader ">
                                <div class="loader-inner">
                                    <div class="spinner-grow text-info align-self-center loader-lg"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="full-name">Full Name<span class="required">*</span> </label>
                                    <input type="text" name="full_name" required class="form-control gmz-validation" data-validation="required" id="full-name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" required class="form-control gmz-validation" data-validation="required" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject<span class="required">*</span> </label>
                                <input type="text" name="subject" required class="form-control gmz-validation" data-validation="required" id="subject">
                            </div>
                            <div class="form-group">
                                <label for="content">Content<span class="required">*</span> </label>
                                <textarea name="content" rows="3" required class="form-control" id="content"></textarea>
                            </div>
                            <div class="gmz-message"></div>
                            <button type="submit" class="btn btn-primary">SUBMIT REQUEST</button>
                        </form>
                    </div>
                </div>
                <div class="col partner-form__right">
                    <div class="become-intro text-white">
                        <h3 class="text-white">Stay in touch with us</h3>
                        <p class="description"><?= conf['contact_us_desc'] ?>.</p>
                        <p class="meta">Address: <?= conf['contact_us_address'] ?></p>
                        <p class="meta">Phone: <?= conf['contact_us_phone'] ?></p>
                        <p class="meta">Email: <?= conf['contact_us_email'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=51.512204828497794,-0.08400867198810423&hl=es;z=14&amp;output=embed"></iframe>
        </div>
</div>
<style>
    .error {
        display: none !important;
    }
</style>