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

    .number {
        width: 40px !important;
        height: 40px !important;
        background: var(--primary);
        border-radius: 50%;
        font-weight: bold;
        font-size: 24px;
        color: #fff;
        margin: auto;
        margin-bottom: 15px;
        line-height: 38px;
        text-align: center;
    }

    .itemy {
        margin-bottom: 50 px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    img {
        max-width: 100%;
    }

    element {
        background-color: #ebe7e7;
    }
</style>
<div class="site-content">
    <section class="partner-form">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-5 card card-body pl-3 pr-3 pt-5 pb-5 m-2">
                    <div class="become-form">
                        <h2 class="title pb-3">Become A Partner</h2>
                        <?= form_open() ?>
                            <div class="gmz-loader ">
                                <div class="loader-inner">
                                    <div class="spinner-grow text-info align-self-center loader-lg"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="full-name">FirstName<span class="required">*</span> </label>
                                    <input type="text" name="firstname" required class="form-control gmz-validation" data-validation="required" id="firstname">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="email">LastName</label>
                                    <input type="text" name="lastname" required class="form-control gmz-validation" data-validation="required" id="lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" required class="form-control gmz-validation" data-validation="required" id="email">
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="subject">Password<span class="required">*</span> </label>
                                    <input type="text" name="password" required class="form-control gmz-validation" data-validation="required" id="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="email">Phone Number</label>
                                    <input type="number" name="phone" required class="form-control gmz-validation" data-validation="required" id="phone">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="content">Address<span class="required">*</span> </label>
                                <textarea name="address" rows="3" required class="form-control " id="address"></textarea>
                            </div>
                            <div class="gmz-message"></div>
                            <button type="submit" class="btn btn-primary">SUBMIT REQUEST</button>
                        </form>
                    </div>
                </div>
                <div class="col partner-form__right">
                    <div class="become-intro text-white">
                        <h2 class="text-white mt-5 ml-5 pl-5">Why partner on <?= conf['site_title'] ?>?</h2>
                        <p class="description ml-5 pl-5">Join our community and start uploading your properties. We make it simple and secure to host travelers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <element class="text-center m-5" style="background-color: #ebe7e7; padding: 80 px 0;">
        <section class="icon-box">
            <div class="container">
                <h2 class="title m-5">How does it work?</h2>
                <div class="row m-4">
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="number">1</div>
                            <h4 class="main-text">Set up your property</h4>
                            <p class="sub-text">Explain what’s unique, show off with photos, and set the right price</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="number">2</div>
                            <h4 class="main-text">Get the perfect match</h4>
                            <p class="sub-text">We’ll connect you with travelers from home and abroad</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item">
                            <div class="number">3</div>
                            <h4 class="main-text">Start earning</h4>
                            <p class="sub-text">We’ll help you collect payment, deduct a commission, and send you the balance</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </element>
    <section class="why-be-partner">
        <div class="container m-5">
            <h1 class="title mb-5 pb-5 mt-5 text-center">Why be a Partner?</h1>
            <div class="itemy">
                <div class="float-left mr-5 col-md-6">
                    <img src="https://ibookingtest.booteam.co/html/assets/image/page/why-to-partner1.svg" alt="why-to-partner">
                </div>
                <div class="float-right col-md-6">
                    <h4 class="main-text">
                        Earn an additional income
                    </h4>
                    <p class="sub-text">Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
            </div>
            <div class="itemy">
                <div class="float-right mr-5 col-md-6">
                    <h4 class="main-text">
                        Open your network
                    </h4>
                    <p class="sub-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                <div class="float-left col-md-6">
                    <img src="https://ibookingtest.booteam.co/html/assets/image/page/why-to-partner2.svg" alt="why-to-partner">
                </div>
            </div>
            <div class="itemy">
                <div class="float-left col-md-6">
                    <img src="https://ibookingtest.booteam.co/html/assets/image/page/why-to-partner3.svg" alt="why-to-partner">
                </div>
                <div class="float-right mr-5 col-md-6">
                    <h4 class="main-text">
                        Practice your language
                    </h4>
                    <p class="sub-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
    </section>
</div>